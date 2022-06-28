https://github.com/xxjwxc/uber_go_guide_cn
```go
静的ソースコードチェック
golangci-lint run cmd/... internal/...
 
Unitテスト
cd internal
go test -v -race ./...
 
Postmanテスト
環境ごとにPostmanテストファイルを用意する


docker-compose.ymlを起動
$ docker-compose up -d --build

ブラウザから以下のURLにアクセス
http://localhost:8000

サーバー中身の確認
$ docker-compose exec mysql bash

エラーログなどの確認
$ docker-compose logs -f

require github.com/stretchr/testify v1.7.0
テスト実行
$ go test -race ./internal/...

gomock
https://github.com/golang/mock
go install github.com/golang/mock/mockgen@latest
staticcheck（or golangci-lint）
Getting started | Staticcheck
go install honnef.co/go/tools/cmd/staticcheck@latest
Delve
GitHub - go-delve/delve: Delve is a debugger for the Go programming language.
go install github.com/go-delve/delve/cmd/dlv@latest

Oauth2
https://github.com/zalando/gin-oauth2

```
