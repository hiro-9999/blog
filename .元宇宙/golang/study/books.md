# Hands-On-Restful-Web-services-with-Go
https://github.com/PacktPublishing/Hands-On-Restful-Web-services-with-Go

:::note info
インフォメーション
infoは省略可能です。
:::

:::note warn
警告
○○に注意してください。
:::

:::note alert
より強い警告
○○しないでください。
:::
https://qiita.com/Qiita/items/c686397e4a0f4f11683d


https://www.naka-sys.okinawa/golang-gin-parameter/
```go
例えば、http[s]://[ホスト]/hoge?test=aaaにある？以降で指定されたパラメータがクエリーストリングになります。

Ginでクエリストリングを取得するには、コンテキストにあるQueryを使って取得します。


router.GET("/hoge", Hoge) 
func Hoge(c *gin.Context) {
 id := c.Query("test") 
}


router.POST("/hoge", Hoge) 
func Hoge(c *gin.Context) {
 id := c.PostForm("test") 
}


URIの中で指定したIDなどのパラメータを取得します。

取得するには、Paramを使って取得します。


router.GET("/:id", Hoge) 
func Hoge(c *gin.Context) {
 id := c.Param("id") 
}
```
