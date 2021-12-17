### 官方文档
https://go.dev/doc/

#### Go语言很可能是第一个将代码风格强制统一的语言，例如Go语言要求public的变量必须以大写字母开头，private变量则以小写字母开头
```
type IFly interface { Fly()
}
  这两者目前看起来完全没有关系，现在看看我们如何使用它们:
func main() {
var fly IFly = new(Bird) fly.Fly()
} 可以看出，虽然Bird类型实现的时候，没有声明与接口IFly的关系，但接口和类型可以直
接转换，甚至接口的定义都不用在类型定义之前，这种比较松散的对应关系可以大幅降低因为接 口调整而导致的大量代码调整工作
Go语言编程 by 许式伟 (z-lib.org).pdf
```

其一是defer关键字。defer语句的含义是不管程序是否出现异常，均 在函数退出时自动执行相关代码。

https://go-zh.org/doc/

Go 1.17 is released
Matt Pearring and Alex Rakoczy
16 August 2021

```GO
GOOS：程序构建环境的目标操作系统。
GOARCH：程序构建环境的目标计算架构。
GOHOSTOS：程序运行环境的目标操作系统。
GOHOSTARCH：程序运行环境的目标计算架构。
GOROOT：Golang 安装根目录。
GOPATH：Golang 工作区目录，可以包含多个目录，每一个工作区目录之下包含三个子文件夹。

GOPATH && go get
GOPATH 是工作区目录，编译过程中会按照 GOPATH 中路径的顺序寻找对应的依赖包。
go get 会根据包地址将包代码下载到 GOPATH 中首个路径的 src 目录。
这是最初版本的 Golang 包管理，可以通过 GOPATH 管理业务代码与依赖库目录。


0x04 Thirdparty Dependences ？？？

Protobuf

protoc 生成 Go 文件，需要使用 protoc-gen-go 插件。如果需要支持 service 生成，需要使用 grpc 子插件。
Go 语言独立的包依赖，所以需要在 .proto 文件指定 go_package 选项。

Blade 是内部开源项目，部分功能满足公司内部特定场景需求。Bazel 适合类似 Google 统一代码库的超大型工程。两者差异化不大，所以选择了小而美，更适合公司内部使用的 Blade。

```
这里有两个隐藏的环境变量，GOOS 和 GOARCH。这两个环境变量是不用我们设置的，系统就默认的。GOOS 是 Go 所在的操作系统类型，GOARCH 是 Go 所在的计算架构。平台相关目录是以
$GOOS_$GOARCH 命名的，Mac 平台上这个目录名就是 darwin_amd64。

# go env 🔴 good 　初探 Go 的编译命令执行过程
https://halfrost.com/go_command/

《GO 命令教程》　　good
https://github.com/hyper0x/go_command_tutorial

3.《Go 包管理的前世今生》
https://www.infoq.cn/article/history-go-package-management

4.《初窥Go module》
https://tonybai.com/2018/07/15/hello-go-module/

```GO
compiler
go build：compile packages and dependencies
go install：compile and install packages and dependencies、
go clean：remove object files
go run：compile and run Go program
go test：test packages
packager
go get：download and install packages and dependencies
go mod： module maintenance
go list：list packages
analyzer
go vet：run go tool vet on packages
go tool pprof

go run
仅针对 package main 的 Go 文件，且不支持 testing Go 文件。
生成的相关库文件与可执行文件仅保留在临时工作区目录，并且会直接执行目标可执行文件。

go build
针对 package main 的 Go 文件会生成可执行文件，并且将可执行文件复制到当前目录（不是源代码所在目录）。
针对其他 Go 文件只会做检查性的编译，不会链接生成可执行文件，也不会将库文件复制到当前目录。

go install
针对 package main 的 Go 文件会生成可执行文件，并且将相关库文件以包目录结构复制到 $GOPATH/pkg/ 目录，可执行文件将直接复制到 $GOPATH/bin 或 $GOBIN 目录。
针对其他 Go 文件会将相关库文件以包目录结构复制到 $GOPATH/pkg/ 目录。
```

### Go指南，练习一遍
https://go-tour-jp.appspot.com/moretypes/1

### page looking
https://blog.csdn.net/qq_34896199/article/details/107204994

# air + gin + gorm + golang-migrate + mysql + delve + dockerで開発用APIサーバー
https://qiita.com/greenteabiscuit/items/282ae184b3aad7edf92f

# goland setting
https://pleiades.io/help/go/create-a-project-with-go-modules-integration.html#working-with-dependencies

go mod tidy/vendor
