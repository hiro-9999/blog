https://github.com/PacktPublishing/Building-Distributed-Applications-in-Gin
## gin
https://gin-gonic.com/docs/

# blog
https://asong.cloud/

## gin exa example
https://zenn.dev/a_ichi1/articles/67b51de22475f9

https://qiita.com/Syoitu/items/8e7e3215fb7ac9dabc3a

go 1.17
github.com/gin-gonic/gin v1.7.7
github.com/go-sql-driver/mysql v1.4.1
github.com/go-xorm/xorm v0.7.9
前提
DBはDockerで立てたMySQLを使います。
ORMはXormです。
Ginの概要などは、既にたくさんの記事で紹介されていますし、日本語訳の公式がある為、ここでは書かないです。
Ginについて詳しく知りたい方は公式をご参考ください。


https://www.cloudtogo.cn/product-TitanIDE?B

# [TitanIDE] 上使用自定义模板来配置
https://www.bilibili.com/video/BV1yg411R7hc?spm_id_from=333.337.search-card.all.click

# channel
https://segmentfault.com/a/1190000017958702


## Methods
https://go.dev/tour/methods/1

type Vertex struct {
	X, Y float64
}

func (v Vertex) Abs() float64 {
	return math.Sqrt(v.X*v.X + v.Y*v.Y)
}

Go does not have classes. However, you can define methods on types.

A method is a function with a special receiver argument.

The receiver appears in its own argument list between the func keyword and the method name.

In this example, the Abs method has a receiver of type Vertex named v.
