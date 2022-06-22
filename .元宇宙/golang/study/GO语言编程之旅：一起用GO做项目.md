GO语言编程之旅：一起用GO做项目 (陈煎鱼) (z-lib.org)
## colly爬取网页
colly的代码托管在GitHub上，官方网站为http://go-colly.org/
```go
func Add(a, b int) int {
	return a + b
}

# "regexp"
targetString := "hello world"
	matchString := "(?i)hello" //不区分大小写
	match, err := regexp.MatchString(matchString, targetString)
	if err != nil {
		fmt.Println(err)
	}
	fmt.Println(match)
	
re := regexp.MustCompile(`o`)
 res := re.ReplaceAllString(targetString,"O")
 
 re := regexp.MustCompile(`(\w)+`)
 res := re.FindStringIndex(targetString)

***_test.go
import "testing"

func TestAdd(t *testing.T) {
	if Add(1, 3) != 4 {
		t.Error("Add函数存在问题!")
	}
}
```

 ## runtime.Gosched()
 runtime.Goexit() // 效果和return一样
 Goexit()终止调用它的Go协程，但其他Go协程不会受影响。Goexit()会在终止该Go协程前执行所 有defer的函数。
 # GOMAXPROCS
 GOMAXPROCS(n int)函数可以设置程序在运行中所使用的CPU数，在以后的编程中是用得最多 的。Go语言程序默认会使用最大CPU数进行计算。
n := runtime.GOMAXPROCS(8)
	fmt.Println("先前的CPU核数设置为:", n) //8
	
# make(chan Type, capacity)	
当capacity为0时，channel是无缓冲阻塞读写的;当capacity大于0时，channel是有缓冲、非阻塞 的，直到写满capacity个元素才阻塞写入。
x, ok := <-channel
//同上，并检查通道是否关闭，将此状态赋值给ok
```go
ch := make(chan int)
done := make(chan bool)
go func() {
	for {
		select {
		case val := <-ch:
			fmt.Println(val)
		case <-time.After(time.Second * 3):
			fmt.Println("已超时3秒")
			done <- true
		}
	}
}()
for i := 0; i < 10; i++ {
	ch <- i
}
<-done
fmt.Println("程序终止")
	
	
ch := make(chan int, 4)
go func() {
	for i := 0; i < 3; i++ {
		ch <- i
	}
	close(ch)
}()
for data := range ch {
	fmt.Println(data)
}

go func() {
		for i := 0; i < 3; i++ {
			ch <- i
		}
		//close(ch)
	}()
	//for data := range ch {
	//	fmt.Println(data)
	//}
	for {
		select {
		case msg := <-ch:
			fmt.Println(msg)
		default:
			//time.Sleep(time.Second)
			//runtime.Goexit()
			//fmt.Println("over")
		}
	}
	
	
ch := make(chan string)

go func() {
	fmt.Println(<-ch)
}()
ch <- "test"

//time.Sleep(time.Second)

ticker := time.NewTicker(time.Second)
for {

	fmt.Println("loop", <-ticker.C)
}
```
channel是一种特殊的类型，和map类似，channel也是一个对应make创建的底层数据结构的引 用。声明一个channel的方式如下:
var 通道变量 chan 通道类型

https://github.com/valyala/fastjson)，有兴趣的读者可以尝试操作。

◇ Go官方文档
网址:https://golang.org/doc/


### 并发(concurrency):指在同一时刻只能有一条指令执行，但多个进程指令被快速地轮换 执行，得到在宏观上有多个进程同时执行的效果，但在微观上并不是同时执行，只是把时
间片分成了若干段，使得多个进程快速交替执行。

## go 函数名(函数参数) 如果函数有返回值，返回值会被忽略。因此，一旦使用go关键字，
 就不能使用函数返回值,来与主进程进行数据交换，而只能使用channel，关于channel将会在后面的章节中进行介绍。
 
 ### 所以Go采用了动态扩张 收缩的策略，初始化为2 KB，最大可扩张到1 GB。

第 13 章 并发与通道
package main
func run(arg string) {
// 此线程的任务 }
func main() {
     go run("this is new thread")
}

# if value, ok := data.(int); ok == true {
 switch value := data.(type) {
      case int:
      
◇ Go语言官方包索引与搜索引擎
网址:https://godoc.org/

# 包中成员以名称首字母大小写决定访问权限: 
◇ public:首字母大写，可被包外访问。

◇ private:首字母小写，仅包内成员可以访问。
### 另外要注意的是，所有的包名都应该使用小写字母。

### 切片 s 的长度和容量可通过表达式 len(s) 和 cap(s) 来获取 
🔴　第一个元素到其底层数组元素末尾的个数

◇ 在Go语言中使用多值返回来返回错误。
◇ Go语言的error类型实际上是一个接口，error接口包含Error方法，用来返回一个字符串。 ◇ Go语言标准库中的errors包可以用来创建错误，自定义错误内容。

第 10 章 错误处理
"fmt"
"errors"
div(dividend int, divisor int) (int, error) { if divisor == 0{ //除数为0则返回错误
       return 0,errors.New("divisor is zero")
}
return dividend/divisor,nil
main(){
res1,err:= div(4,2);if err != nil {
     fmt.Println(err.Error())
}else { fmt.Println("4/2 =",res1) }
res2,err := div(1,0);if err != nil{
     fmt.Println(err.Error())
}else { fmt.Println("1/0 =",res2) }

◇ 标准库中的fmt包提供了Errorf方法，用来设置返回错误内容的格式。
◇ 一般而言，只有当程序发生不可逆的错误时，才会使用panic方法来触发宕机。
◇ Go语言通过内置函数recover来捕获宕机，类似于其他编程语言中的try-catch机制。

```go
if _, _, line, ok := runtime.Caller(0); ok == true {
	//错误所在位置
	err := fmt.Errorf("***Line %d error***", line)
	fmt.Println(err.Error())
}
	
data := &struct {
Code int
  Msg  string
}{}
jsonData := `{"code":200,"msg":""}`
if err := json.Unmarshal([]byte(jsonData), data); err != nil {
       fmt.Println(err)
}
fmt.Println("code:", data.Code)
fmt.Println("msg:", data.Msg)

c1 := complex(1, 2)
fmt.Println(c1, "实部为:", real(c1))
fmt.Println(c1, "虚部为:", imag(c1))

const X complex128  = complex(1,1)
const Y complex128  = complex(2,2)
const multi = X * Y // 乗算

_, theta := cmplx.Polar(multi) //極座標の形で距離と偏角を返す
fmt.Println(theta * 180 / math.Pi) // ラジアンから度数に変換 90度になる
https://qiita.com/souhei-etou/items/dae870612865faf542e7	
	
//其底层数组元素末尾
s := []int{0, 1, 2, 3, 4, 5, 6, 7,9,10} // [0 1 2 3 4 5 6 7 8 9] len=10,cap=10　←其底层数组元素末尾
	s1 := s[0:5]                       // [0 1 2 3 4] len=5,cap=10
	s2 := s[5:]                        // [5 6 7 8 9] len=5,cap=5
	println(cap(s))
	println(cap(s1)) ->cap 10
	println(cap(s2)) //cap ->5
  
切片的容量是从它的第一个元素到其底层数组元素末尾的个数。
```
```go
go func(){
  defer func(){
     if e := recover(); e != nil{
        log.Printf("%v",e)
     }  
  }()
  panic("error")
}

fatapanic
fatalthrow <- error

GOMAXPROCS. 

import _ "go.uber.org/automacprocs"
```

不错，在看！！！

go mod graph

go mod vendor

go mod edit

go mod verify

go mod why

go mod download

go mod init

## go env
go modules on

go env -w GO111MODULE="on"

```
◇ 新生成的切片长度:结束位置-开始位置。
◇ 新生成的切片取出的元素不包括结束位置对应的元素。
◇ 新生成的切片是对现有数组或切片的引用，其地址与截取的数组或切片开始位置对应的元
素地址相同。
◇ 新生成的切片容量指从切片的起始元素开始到其底层数组中的最后一个元素的个数。

```

# 零基础Go语言从入门到精通 (零壹快学) (z-lib.org)
◇ sync.Map无须使用make创建。
◇ Load()方法的第一个返回值是接口类型，需要将其转换为map值的类型。
◇ 目前sync.Map没有提供获取map数量的方法，解决方案是通过循环遍历map。
◇ 与较普通的map相比，sync.Map为了保证并发安全，会有性能上的损失，因此在非并发情况
下，推荐使用map。

https://github.com/google/gops

$ go install github.com/google/gops@latest

# 分析内存 逃逸
go build -gcflag '-m -l' main.go


## go mod tidy	
importに記載されたパッケージのインストール。
不要なパッケージの削除



### 依存パッケージ一覧
$ go list -m all


### 依存関係の表示
$ go mod graph


https://nishinatoshiharu.com/go-modules-overview/

### サンプルコードなどであれば以下のような感じでOK
$ go mod init go-example

### 公開前提の場合はモジュールのパスを指定する
$ go mod init github.com/nishina555/go-example


