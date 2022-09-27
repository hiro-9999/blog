https://qiita.com/tonishy 🔴

https://qiita.com/tonishy/items/b2c1e6af8d56906f1de3


# AWS Fargate
https://licensecounter.jp/engineer-voice/blog/articles/20220518_aws_fargateprisma_cloudfargate.html
AWS Fargateとは、Amazon Elastic Container Service (ECS) と Amazon Elastic Kubernetes Service (EKS) で動作する、ホストマシンを意識せずにコンテナを実行できる環境です。AWS Fargateを利用すれば、コンテナとコンテナの実行環境の2重管理が不要になります。

https://business.ntt-east.co.jp/content/cloudsolution/column-171.html

FargateはネイティブにCloudWatch Logsへのログ書き出しをサポートしているため、これを利用しましょう！
CloudWatch Logsを使うための注意は２つ。
・タスク実行ロールに
　logs:CreateLogStream
　logs:PutLogStream
　を追加する。
・CloudWatch Logs のロググループは、事前に作成しておくこと。

アプリケーションで発生したエラーや障害の原因特定。
パフォーマンス問題の原因特定
がしやすくなる。

# AWS Fargate の設定とタスク実行
https://qiita.com/tonishy/items/810950dec4f1ae0d761f#aws-fargate-%E3%81%AE%E8%A8%AD%E5%AE%9A%E3%81%A8%E3%82%BF%E3%82%B9%E3%82%AF%E5%AE%9F%E8%A1%8C

# Fargateで起動したコンテナからS3へファイルをアップロードする
https://qiita.com/tonishy/items/ae9cee854b2d253edd2a

＃ AWS CodeCommit に自動的にバックアップ
https://aws.amazon.com/jp/blogs/news/replicate-aws-codecommit-repository-between-regions-using-aws-fargate/
