GO语言编程之旅：一起用GO做项目 (陈煎鱼) (z-lib.org)
◇ Go官方文档
网址:https://golang.org/doc/

◇ Go语言官方包索引与搜索引擎
网址:https://godoc.org/


### 切片 s 的长度和容量可通过表达式 len(s) 和 cap(s) 来获取 
🔴　第一个元素到其底层数组元素末尾的个数
```go
c1 := complex(1, 2)
fmt.Println(c1, "实部为:", real(c1))
fmt.Println(c1, "虚部为:", imag(c1))
	
	
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


