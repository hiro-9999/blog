https://moneyforward.com/engineers_blog/2021/10/20/go-api-swagger/

```
利用するツール
swaggo
https://github.com/swaggo/swag
基本的なコマンド
install
go install github.com/swaggo/swag/cmd/swag@latest
build
swag init -g internal/route/route.go
導入
router.go の import に下記の記載を入れる
_ "app/docs"

swaggerfiles "github.com/swaggo/files"
ginSwagger "github.com/swaggo/gin-swagger"
router.go に preview 用の path を設定
router.GET("/swagger/*any", ginSwagger.WrapHandler(swaggerfiles.Handler))
Swagger API Document を開く
go run cmd/app/app.go
そして、下記の URL にアクセスする
localhost:8088/swagger/index.html
```
