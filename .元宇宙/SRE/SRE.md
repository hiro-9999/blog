# page 🔴
https://github.com/dastergon/awesome-sre

DevOps in Python Infrastructure as Python (Moshe Zadka) (z-lib.org).pdf

Practical Linux Infrastructure (Ali, Syed) (z-lib.org)

Continuous Delivery with Docker and Jenkins: Create secure applications by building complete CI/CD pipelines, 3rd Edition 

### MTBFとMTTR 平均故障時間であるMTTF（Mean Time To Failure）
MTBFは、Mean Time Between Failuresの略。平均故障間隔のことを指します。
```
MTTRがあります。MTTRは、Mean Time To Repairの略で、平均復旧時間のこと。システムが継続的に稼働できるかの可用性を図るものです。
MTBFは、いかにシステムの故障が少なく稼働が高いかの信頼性、MTTRはいかに短い時間でシステムの復旧が可能かの可用性を示すもので、どちらもシステム設計の上で重要なものになります。
https://www.dospara.co.jp/5info/cts_str_pc_mtbf

稼働率は、「MTBF÷（MTBF＋MTTR）」の計算式を用いて算出します。
稼働率が高いほど、システムの故障にかかる時間が少ないということです。

稼働率99%の場合、年間のシステム停止時間4日、99.99%の場合、年間のシステム停止時間1時間が稼働率の目安です。

以下の似てるようなbot制限サービス
https://www.cloudflare.com/products/bot-management
```
Amazon Rekognition（顔コレクション）

# Docker and Kubernetes

# Ansible

# Terraform
https://github.com/GoogleCloudPlatform/terraformer

https://docs.aws.amazon.com/ja_jp/AWSCloudFormation/latest/UserGuide/resource-import.html
```
terraform-aws-modules/ecs/aws | complete-ecs Example | Terraform Registry
https://registry.terraform.io/modules/terraform-aws-modules/ecs/aws/3.5.0/examples/complete-ecs

CloudFormation については下記にスニペットがございますので、必要な定義に修正してお使い頂けるかと思います。
Amazon Elastic Container Service テンプレートスニペット - AWS CloudFormation
https://docs.aws.amazon.com/ja_jp/AWSCloudFormation/latest/UserGuide/quickref-ecs.html
また、別のアプローチとして AWS Copilot という ECS をより抽象的に扱うためのサービスもございます。内部的には CloudFormation が動き、ご利用のアプリケーションの種類に応じて VPC の作成から ECS クラスターのプロビジョニングまでインタラクティブに行えます (CI/CD 等の機能も有しております)。CloudFormation より定義ファイルはシンプルになります。こちらもご参考までに共有させて頂きます。
https://aws.github.io/copilot-cli/ja/
https://aws.amazon.com/jp/blogs/news/introducing-aws-copilot/

AWSはなぜ、ECSがあるのにKubernetesのサービスを始めたのか、コックロフト氏に聞いた：AWSとオープンソース（1 (itmedia.co.jp)
この場合、ECS が大規模 (1000を超える仮想マシン) でしか使えないという意味ではなく EKS (k8s) に比べてそのような規模でも運用負荷を軽減できるという意味かと思います。一方で、EKS が大規模では使えないという意味ではなく、大規模になった場合 kubernetes ではクラスターを分割するといった選択が出てきますが、ECS だとそうはならないというメッセージと認識しています。
ECS と EKS の選択は規模も要素になりますが、コントロールプレーンの管理を任せたいか (ECS)、k8s のエコシステムを使いたいか (EKS) という部分が大きいかと思います。
https://atmarkit.itmedia.co.jp/ait/articles/1806/11/news029.html

「コンテナ環境としては『Amazon Elastic Container Service（Amazon ECS）』を提供してきたのに、なぜマネージドKubernetesサービスの『Amazon Elastic Container Service for Kubernetes（Amazon EKS）』を始めたのか」などについて聞いた部分をお届けする。
このため、AWSではECSを大規模環境向け、EKSを中小規模環境向けに提供していく。

Translate video captions and subtitles using Amazon Translate
https://aws.amazon.com/jp/blogs/machine-learning/translate-video-captions-and-subtitles-using-amazon-translate/

CloudFront→ELB→EC2構成におけるIPアドレスのアクセス制御 🔴
https://int128.hatenablog.com/entry/2017/09/13/143702

ルーティングポリシーの選択　Route 53 の加重ルーティング
https://docs.aws.amazon.com/ja_jp/Route53/latest/DeveloperGuide/routing-policy.html#routing-policy-weighted

CloudFront の Datadog 連携
https://docs.datadoghq.com/ja/integrations/amazon_cloudfront/?tab=standardlogs

CloudFront で利用できるカスタムヘッダ - Country Code
https://docs.aws.amazon.com/ja_jp/AmazonCloudFront/latest/DeveloperGuide/using-cloudfront-headers.html#cloudfront-headers-viewer-location
```

# Redis と Memcached 
https://aws.amazon.com/jp/elasticache/redis-vs-memcached/


# CircleCI サークルCI
https://agency-star.co.jp/column/circleci

＃＃＃　CircleCIとは？EC2にsshしてデプロイ自動化
https://suwaru.tokyo/%E3%80%90%E4%BD%BF%E3%81%84%E6%96%B9%E3%80%91circleci%E3%81%A8%E3%81%AF%EF%BC%9Fec2%E3%81%ABssh%E3%81%97%E3%81%A6%E3%83%87%E3%83%97%E3%83%AD%E3%82%A4%E8%87%AA%E5%8B%95%E5%8C%96/
