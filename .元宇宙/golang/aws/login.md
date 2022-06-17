https://www.youtube.com/watch?v=m2xSVJtAk2Q

https://aws.amazon.com/jp/cognito/

https://www.tdi.co.jp/miso/amazon-cognito-sign-up


https://aws.amazon.com/jp/fraud-detector/


https://ops.jig-saw.com/tech-cate/amazon-cognito

具体的な機能について
Amazon Cognitoには、主な2つの機能があります。

ユーザープール
IDプール
Cognito Sync
それぞれにについて、機能を記載していきます。
ユーザープール
ユーザープールは、ユーザー認証機能を提供します。具体的には、Cognito事態にユーザーIDを登録する機能と、外部のIDプロバイダー（GoogleやFacebookなど）と連携する機能が存在します。ユーザー認証が行われると、認証された証として「IDトークン」が発行され、このトークンによって認証されたユーザーがアプリケーションを利用することができるようになります。

IDプール
IDプールは、外部のIDプロバイダーによって認証されたIDに対して、AWSへのアクセス権限を払い出す、認可の機能を持っています。具体的には、認証されたユーザーに、AWS上のアプリケーションに対するアクセス権を持つ「一時クレデンシャル」を発行することができます。また、Webアプリケーションなどを想定し、認証されていないゲストユーザーにも、一部のアクセス権を付与する、といった機能を持っています。

Cognito Sync
Cognito Syncを用いると、認証したデータを共有することができるようになります。Cognitoを使ってログインしたユーザーのデータやアプリケーションデータを複数のデバイス間で共有することができる機能を提供します
