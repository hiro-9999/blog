## Revel 
https://michimani.net/post/programming-get-started-revel-go-web-framework/


# Go 语言快速开发脚手架工具
https://mp.weixin.qq.com/s/Eb8tae4az8UHMt1vdnHOVA

https://github.com/mix-go/mix

https://openstr.com/watch/aa328ff33de085aa8fc87301056f3407#%E5%AE%89%E8%A3%85-mixcli

配置环境变量
修改 golang 自己的环境变量
开启 go mod
配置代理
配置库哈希效验网站
go env -w GO111MODULE="on" GOPROXY="https://goproxy.io,direct" GOSUMDB="sum.golang.org"
将 $GOPATH/bin 目录加入到 $PATH
打印 GOPATH

go env GOPATH
编辑 ~/.bashrc or ~/.zshrc 把 $GOPATH/bin 加入到 $PATH

export PATH="$PATH:/Users/**/go/bin"



## docker
[https://jp1lib.org/?signAll=1&ts=1823]

(https://semaphoreci.com/community/tutorials/how-to-deploy-a-go-web-application-with-docker)


## goサーバーを雑にawsのec2にデプロイ
https://aws.amazon.com/jp/ec2/?trk=c95527aa-2c0b-4c61-a33f-4ca98bab4822&sc_channel=ps&sc_campaign=acquisition&sc_medium=ACQ-P|PS-GO|Brand|Desktop|SU|Compute|EC2|JP|JP|Text&s_kwcid=AL!4422!3!591672862796!p!!g!!aws%20ec2サーバー&ef_id=CjwKCAjw7vuUBhBUEiwAEdu2pI_RH5XeABXT2bsd08KrCe8zMXCtalBECOGSWCcqvnxnJwUkR9Z38xoCR08QAvD_BwE:G:s&s_kwcid=AL!4422!3!591672862796!p!!g!!aws%20ec2サーバー&gclid=CjwKCAjw7vuUBhBUEiwAEdu2pI_RH5XeABXT2bsd08KrCe8zMXCtalBECOGSWCcqvnxnJwUkR9Z38xoCR08QAvD_BwE

## Gin 
https://www.bilibili.com/read/cv16474240

https://zenn.dev/ajapa/articles/6471ac0c612fda

https://github.com/gin-gonic/gin


https://www.ory.sh/docs/hydra/sdk/go

# bcrpt
https://pkg.go.dev/golang.org/x/crypto/bcrypt

# cookie
“npm install js-cookie --save”

抜粋:: Mina Andrawos  “Hands-On Full Stack Development with Go”。 Apple Books  

# mysql
https://gorm.io/docs/dbresolver.html

# stripe
https://stripe.com/docs/api/authentication

## vscode
 View | Command Pallete, or use the Ctrl + Shift + P shortcut and type goinstall update/tools:
 
 
### go run main.go
curl -X GET http://localhost:8080

go list -m all

https://github.com/PacktPublishing/Building-Distributed-Applications-in-Gin/tree/main/chapter02

# JWT
https://qiita.com/knaot0/items/8427918564400968bd2b
