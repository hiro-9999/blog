## basic https://github.com/golang/go/releases
https://www.bilibili.com/video/av51636878?p=1

## slice --复合数据
## map --复合数据
## struct 结构体
## * & 指针类型前面加上*
## interface
  空interface
## reflect Golang反射
## 并发编程之Goroutine
## 并发编程之Channel
## 错误处理之error
## 错误处理之panic-recover
defer-panic-and-recover 机制。
## 错误处理之defer
recover 只有在 defer 中使用才更有意义

## Golang方法
type myInt int

func Add(a ,b int){             //函数
  fmt.Println(a+b)
}

func (a myInt) Add (b myInt){   //方法
  fmt.Println(a+b)
}

func main() {
        a, b := 3,4
        var aa,bb myInt = 3,4
        Add(a,b)
        aa.Add(bb)
  }
type A struct {
    Name string
}

func (a A)foo()  { //接收者写在函数名前面的括号里面
    fmt.Println("foo")
}

func main() {
    a := A{}
    a.foo() //foo
}

原文链接：https://blog.csdn.net/xiangxianghehe/article/details/78790601
