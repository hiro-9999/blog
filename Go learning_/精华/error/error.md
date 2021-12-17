```go
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
```
第二种方法是借用 panic 函数，结合 recover 来实现:

https://www.toutiao.com/a7015032499709690375/?log_from=04692e879a4a48_1639715601041
