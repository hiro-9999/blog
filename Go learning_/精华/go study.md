### 官方文档
https://go.dev/doc/

#### Go语言很可能是第一个将代码风格强制统一的语言，例如Go语言要求public的变量必须以大写字母开头，private变量则以小写字母开头

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
```
https://www.toutiao.com/i6710153624028185100/?tt_from=copy_link&utm_campaign=client_share&timestamp=1639708405&app=news_article&utm_source=copy_link&utm_medium=toutiao_android&use_new_style=1&req_id=202112171033240101501702001A6F9198&share_token=ef3391ca-c110-47e7-a62e-623e9b278650&group_id=6710153624028185100&wid=1639708956725
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
