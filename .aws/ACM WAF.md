## AWS Certificate Manager (ACM) の証明書を使用して

https://docs.aws.amazon.com/ja_jp/AmazonCloudFront/latest/DeveloperGuide/cnames-and-https-requirements.html
[
](https://www.blog.danishi.net/2021/02/19/post-4573/)
AWS Certificate Manager (ACM) の証明書を使用して、ビューワーと CloudFront との間で HTTPS を必須にする場合は、米国東部 (バージニア北部) リージョン (us-east-1) の証明書をリクエスト (またはインポート) していることを確認します。

# AWS WAFでCloudFrontにIP制限をかける
https://www.blog.danishi.net/2021/02/19/post-4573/

CloudFront は全公開になってしまうので STG は IP での WAF を入れる。 STG のみに適用したいが、
CloudFront 側の設定項目になってしまっており、 WorkSpace で作成する関係で、手動で設定を行う。



## 有効にするとS3→Lambda→Datadog(Log)の順で送信されます。Datadogの課金対象（転送量課金）なので無効にしてあります。
