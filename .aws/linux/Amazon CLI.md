# Amazon CLI 
https://docs.amazonaws.cn/cli/latest/userguide/cli-chap-welcome.html

# aws iam creat-user --cli-auto-ptompt

# study 🔴
https://engineer-ninaritai.com/aws-lesson-list/
```
STS 認証

ACL intent setting ???

SAM. 
Serverless Application Model  https://dev.classmethod.jp/articles/sam-lambda-with-library/
SAMのメリットは？
Lambda関数実装時の開発の手間を大幅に削減することができます。

Lambdaの関数を実際にAWS上でデプロイしなくても、ローカルの開発マシンでLambdaの動きを再現することが可能です。Lambdaに与えられるパラメータもjson形式で定義しておくことができるので、開発時にわざわざLambdaをデプロイして、テスト実行する、という手間を省くことができるのです。
https://www.fenet.jp/aws/column/technique/437/ 🔴


find -name "*test*" https://engineer-ninaritai.com/linux-file-search/
find [オプション] [検索文字列]
touch test{1..10}.txt
ls -la
apt-get install bind9
sudo su
Debian
Ubuntu
Kali Linux https://engineer-ninaritai.com/linux-install-easy/
apache2.config  vi /etc/apache2/apache2.config

/etc/init.d/apache2 restart https://engineer-ninaritai.com/apache-basic-authentication-config/
service apache2 restart

vi /etc/httpd/httpd.conf

git add .
git commit -m "first commit"
git push --set-upstream origin master


Webサーバー
DNSサーバー
Linuxの基礎コマンド
IPアドレス
ルーティング

IAM https://engineer-ninaritai.com/aws-lesson-list/
vpc (Amazon Virtual Private Cloud)
subset [](https://docs.aws.amazon.com/zh_cn/vpc/latest/userguide/configure-subnets.html)
security group
eni （Elastic Network Interface） AWSのENIは、物理的環境においてのNIC（Network Interface Card）を指します。
route53
acm
NACLs

load balancer　　ELB(ALB)
DynamoDB
redshift
elasticache
aurora

auto scaling
ddb throttle
api gateway
lambda
stepfunction
cloudformation
s3 glacier
sqs
sns

ec2
sqs
sns
cloudwatch
ecs
ecr
code deploy

AWS Certified Solutions Architect -Associate

DX（AWS Direct Connect）
EBS (Amazon Elastic Block Store)

CIDR  「Classless Inter-Domain Routing（クラスレス・インタードメイン・ルーティング）」の略で「CIDR」です。https://engineer-ninaritai.com/what-class-cidr/
クラスA →　10.0.0.1 ~ 10.255.255.254　(ホスト16777214台)
クラスB →　172.16.0.1 ~ 172.31.255.254 （ホスト65534台)
クラスC→　192.168.0.1 ~ 192.168.255.2541　(ホスト254台)
https://engineer-ninaritai.com/subnetmask/
256個のIPアドレスが使用できます。しかし、ネットワークアドレスとブロードキャストアドレスはPCに割り当てることができないので-2してあります。
サブネットマスクと使用できるIPの数の一覧表

CIDR表記	サブネットマスク	使用できるIPの数※
/24	255.255.255.0	254
/25	255.255.255.128	126
```
