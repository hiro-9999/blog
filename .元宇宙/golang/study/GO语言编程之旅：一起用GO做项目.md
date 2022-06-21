GO语言编程之旅：一起用GO做项目 (陈煎鱼) (z-lib.org)
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


