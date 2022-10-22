## AWS Lambda で cron みたいに定期実行する 🔴
https://nikaera.com/archives/aws-lambda-cron/

https://dev.classmethod.jp/articles/step-functions-to-lambda/


### Step Functionsをcronで定期的に実行する【CloudWatch Events】
https://dev.classmethod.jp/articles/step-functions-from-cron/



## Amazon EventBridgeルールでAWS Step Functionsステートマシンを定期実行する
https://dev.classmethod.jp/articles/step-functions-from-cron/


処理が複雑でジョブの依存関係を定義したい場合は、AWS Batch 単体で制御するか、より複雑な場合は Step Functions を用いて Lambda、ECS（Fargate）、AWS Batch（Fargate） を組み合わせる。
https://zenn.dev/faycute/articles/fb310e3ccd783f

### スケジューリング実行
CloudWatch Events と連携することでどのサービスでも簡単に定期実行ができる。

複数ジョブの制御
「Step Functions + Lambda、Fargate、AWS Batchの組み合わせ」 vs. 「AWS Batch単体」 という構図になるが、AWSに問い合わせたところ、ジョブの複雑性に応じて使い分けるのがいいとのこと。

AWS Batch よりも Step Functions の方がより細かい要件に対応できるので、開発初期のシンプルな場合は AWS Batch を使い、段々複雑になってきたら Step Functions を導入するのがいいかもしれない。

## Amazon EventBridgeを使ってAWS Batchを起動する
今回はCronのように特定の時間でAWS Batchを起動したいので、スケジュールを選択します。
https://book-reviews.blog/launch-AWS-Batch-using-Amazon-EventBridge/



https://www.fenet.jp/aws/column/tool/1171/
CloudWatch Eventsのターゲットとは、 ルールによって振り分けられたイベントを実施するAWSサービスのことです。

設定できるターゲットは、Amazon EC2、AWS Lambda、Amazon Kinesis Data Streams、Amazon Kinesis Data Firehose、Amazon CloudWatch Logs、Amazon ECS、Systems Manager、AWS Batch、Step Functions、CodePipeline、CodeBuild、Amazon SNS、Amazon SQSです。


# AWS Batchでのスケジュールポリシー
https://dev.classmethod.jp/articles/aws-batch-schedulepolicy-weight/


https://zenn.dev/nameless_gyoza/articles/what-is-aws-batch-20210327


## AWS Batchを使ってcronのような定期的処理を実現する
https://qiita.com/tsukasa1301/items/8bd927eaa928ff981414

## 今日はAWS Batchを文字通りバッチ処理とスケジューラとして使ってみます
https://www.skyarch.net/blog/?p=13659

https://docs.aws.amazon.com/ja_jp/batch/latest/userguide/Batch_GetStarted.html

### AWS Batchを使って5分以上かかる処理を実行してみる
https://dev.classmethod.jp/articles/aws-batch-5min-over/


# AWS EC2 と RDS で 定期実行(CRON)
https://zenn.dev/naoko3in4/articles/22fcf61b61a74e
ワークフロー（workflow）

https://www.yume-tec.co.jp/column/awsengineer/4619

### AWS Batch+CloudWatch Eventsで定期実行
https://confrage.jp/aws-batchcloudwatch-events%E3%81%A7%E5%AE%9A%E6%9C%9F%E5%AE%9F%E8%A1%8C/

# CloudWatch Eventsとは、定義されたルールに従って、AWSのサービスを実行することができるサービスです。AWS Lambdaでの定期実行処理は、CloudWatch Eventsを利用することで実現できます。
CloudWatch Eventsのイベントとは、AWSの環境の変化を指します。Cronのように特定の時刻になった時にイベントを発火させることができます。
https://www.fenet.jp/aws/column/tool/1171/
