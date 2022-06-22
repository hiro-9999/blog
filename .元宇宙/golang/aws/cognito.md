https://aws.amazon.com/jp/cognito/faqs/

Q: Amazon Cognito ではどのプラットフォームがサポートされていますか?
オプションの AWS Mobile SDK を使うと、iOS、Android、Unity、Kindle Fire での Cognito の使用がサポートされます。Cognito は AWS SDK for JavaScript でも使用できます。Cognito Your User Pools は現在、AWS Mobile SDKs for iOS、AWS Mobile SDKs for Android、JavaScript AWS SDK for Cognito でサポートされています。SDK をダウンロードするには、リソースページをご覧ください。

Q: AWS Mobile SDK は必ず使用しなければなりませんか?
いいえ。Cognito では、コントロール API とデータ API をウェブサービスとして公開しています。サーバー側の API を直接呼び出して独自のクライアントライブラリを実装することが可能です。


https://qiita.com/UpAllNight/items/ec522da70a6fe86a1d16

用語	説明	標準化(RFC)
認証	相手の身元を明らかにすること
→ユーザーの認証の仕組み	OpenID Connect 1.0
認可	相手に適切な権限を付与すること
→認証したユーザーに対するデータアクセス制御の仕組み	OAuth 2.0
# これだけ見れば理解できるCognito〜認証機能つきサーバレスアーキテクチャの作成〜
https://qiita.com/UpAllNight/items/ec522da70a6fe86a1d16


# Ory Hydra:
https://www.ory.sh/hydra/ 

https://github.com/ory/hydra

- https://www.ory.sh/docs/hydra/5min-tutorial
- 
- https://www.ory.sh/run-oauth2-server-open-source-api-security/

### go-kratos
https://github.com/go-kratos/kratos

# hydra(ヒュドラ)というパスワードクラッカー
https://qiita.com/shyamahira/items/fdb50f016e0e6c64ed4e

# 認証認可製品いろいろ
https://zenn.dev/inabajunmr/scraps/e6b98c45ba67bd
