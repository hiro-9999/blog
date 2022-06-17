https://aws.amazon.com/jp/ecr/

Amazon Elastic Container Registry (Amazon ECR)
コンテナソフトウェアをどこにでも簡単に保存、共有、デプロイできる


https://qiita.com/miyuki_samitani/items/efe3f8a1bd16b4c0c4f1

https://dev.classmethod.jp/articles/re-introduction-2022-ecr/

```
インフラ運用不要
マネージドサービスであるため、運用やスケーリングが不要
高い耐久性・可用性
ストレージとして、Amazon S3を利用
AWSサービスとの統合
IAMユーザーやIAMロールを使ったポリシーで各リポジトリへのアクセス許可設定が可能
Amazon ECS、Amazon EKS、AWS Lambdaなどと統合されており、ワークフローの簡略化が可能
Code BuildやCode Deproyとも密に連携し、CI/CDパイプライン構築にも利用可能
AWSの他サービスと連携させるのであれば、コンテナレジストリにはECRを使うのがオススメです。
```
