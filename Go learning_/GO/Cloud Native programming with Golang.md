# online
https://play.golang.org/

Creating IAM Users

“f you are running your application from your own local machine, the recommended way to create access keys is to create a user that has specific permissions to access the AWS services that you would like your code to utilize. This is done by creating a user in the AWS identity and access management (IAM).

”

# “To get started with GRPC, visit https://grpc.io/. Similar to protocol buffers, GRPC is supported by a wide range of programming languages.”

抜粋:: Mina Andrawos  “Cloud Native programming with Golang”。 Apple Books  


# “short declaration operator ( : = ) . Using this method, ”

# “An important thing to note here is that a pointer can store the memory address of a variable of the same data type. ”
```go
“var <pointer variable> *<data type>”

“var x int = 90
var ptr *int = &x
/*Dereference ptr to access the value of x and assign it to y*/
y := *ptr”

var x int = 1050
var xptr *int = &x
var x_ptr_ptr **int = &xptr
**x_ptr_ptr = 7000
fmt.Println(x)
fmt.Println(*x_ptr_ptr) // 0xc0000b6020

“variable x_ptr_ptr is used to hold the value of x_ptr . Single dereferencing of xptr_ptr as *x_ptr_ptr will give us the value of x_ptr which would be the address of x . Double dereferencing of x_ptr_ptr as **x_ptr_ptr will give us the value of x . The statement **x_ptr_ptr = 7000 will change the value of x to 7000 .”

抜粋:: Metzler, Nathan  “Go Programming for Beginners: An Introduction to Learn the Go Programming Language with Tutorials and Hands-On Examples”。 Apple Books  
```

# “web frameworks such as Gin, Web.Go, Martini, Revel , etc. to develop web applications”

抜粋:: Metzler, Nathan  “Go Programming for Beginners: An Introduction to Learn the Go Programming Language with Tutorials and Hands-On Examples”。 Apple Books 

```
https://herp.careers/v1/layerx/J2bHk72RoeRB
▼本ポジションの業務内容
・自社プロダクトを活用した、民間企業・行政との共同プロジェクトにおける開発面の推進
・民間企業・行政向けのシステム開発におけるアプリケーション・バックエンド・インフラの仕様策定、設計、実装、テスト
・秘匿化技術・ブロックチェーンを使った自社プロダクトの企画・設計・実装・テスト並びに各技術選定
・暗号、分散システムの先端技術のリサーチ
・自社技術に関する論文執筆や知財取得
・カンファレンス及びイベント等への登壇・寄稿（行動指針『徳』を体現する行動やアウトプット）

===開発環境===
開発言語：Rust, JavaScript (TypeScript, Vue.js, React, etc.)
クラウド: Azure
インフラ：Terraform, Docker
Trusted Execution Environment：Intel SGX (Azure Confidential Computing)
ブロックチェーン: Ethereum (Quorum, Hyperledger BESU, etc.)
ソースコード管理：GitHub
CI/CD：GitHub Actions, Azure Pipelines

フロントエンド、バックエンド、インフラ含め各チームメンバーが一気通貫で開発しています。
```
