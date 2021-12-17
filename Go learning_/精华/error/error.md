```go
怎么用 4 个字符表示尽量多的数据呢？数字+字母总共有 36 个字符，理论上使用 4 位 36 进制可以表示 36x36x36x36 = 1679616 个值。因此我们只要找到一个针对错误信息字符串的哈希算法，把输出值限制在 1679616 范围内就行了。

这里我采用的是 MD5 作为例子。MD5 的输出是 128 位，理论上我可以取 MD5 的输出，模 1679616 就可以得到一个简易的结果。实际上为了减少除法运算，我采用的是取高 20 位（0xFFFFF）的简易方式（20 位二进制的最大值为 1048575），然后将这个数字转成 36 进制的字符串输出。

当出现异常错误时，我们可以将 message 的提示信息如下展示：“未知错误，错误代码 30EV，如需协助，请联系 XXX”。顺带一提，30EV 是 "Access denied for user 'db_user'@'127.0.0.1'" 的计算结果，这样一来，我就对调用方隐藏了敏感信息。

至于后台侧，还是需要实实在在地将这个哈希值和具体的错误信息记录在日志或者其他支持搜索的渠道里。当用户提供该代码时，可以快速定位。
import (
    // ...
    "github.com/martinlindhe/base36"
)

var (
    replacer = strings.NewReplacer(
        " ", "0",
        "O", "0",
        "I", "1",
    )
)

// ...

func Err2Hashcode(err error) (uint64, string) {
    u64 := hash(err.Error())
    codeStr := encode(u64)
    u64, _ = decode(codeStr)
    return u64, codeStr
}

func encode(code uint64) string {
    s := fmt.Sprintf("%4s", base36.Encode(code))
    return replace.Replace(s)
}

func decode(s string) (uint64, bool) {
    if len(s) != 4 {
        return 0, false
    }
    s = strings.Replace(s, "l", "1", -1)
    s = strings.ToUpper(s)
    s = replace.Replace(s)
    code := base36.Decode(s)
    return code, code > 0
}

// hash 函数可以自定义
func hash(s string) uint64 {
    h := md5.Sum([]byte(s))
    u := binary.BigEndian.Uint32(h[0:16])
    return uint64(u & 0xFFFFF)
}

在实际应用中，函数/模块透传错误时，应该采用 Go 的 error wrapping 模式，也就是 fmt.Errorf() 配合 %w 使用，业务方可以放心地添加自己的错误信息，只要调用方统一采用 errors.Is() 和 errors.As() 即可

func SomeProcess() (err error)
    defer func() {
        if e := recover(); e != nil {
            err = e.(error)
        }
    }()

    assert := func(cond bool, f string, a ...interface{}) {
        if !cond {
            panic(fmt.Errorf(f, a...))
        }
    }

    // ...

    err = DoSomething()
    assert(err == nil, "DoSomething() error: %w", err)

    // ...
}

if err := DoSomething(); err != nil {
    // ...
}

func SomeProcess() (err error) { // <-- 注意，err 变量必须在这里有定义
    defer func() {
        if err == nil {
            return
        }

        // 这下面的逻辑，就当作 catch 作用了
        if errors.Is(err, somepkg.ErrRecordNotExist) {
            err = nil       // 这里是举一个例子，有可能捕获到某些错误，对于该函数而言不算错误，因此 err = nil
        } else if errors.Like(err, somepkg.ErrConnectionClosed) {
            // ...          // 或者是说遇到连接断开的操作时，可能需要做一些重连操作之类的；甚至乎还可以在这里重连成功之后，重新拉起一次请求
        } else {
            // ...
        }
    }()

    // ...

    if err = DoSomething(); err != nil {
        return
    }

    // ...
}
```
第二种方法是借用 panic 函数，结合 recover 来实现:

https://www.toutiao.com/a7015032499709690375/?log_from=04692e879a4a48_1639715601041
