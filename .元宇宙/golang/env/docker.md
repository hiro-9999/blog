docker-compose up -d


https://docs.docker.com/compose/compose-file/#restart

services:
  production:
    hostname: production
   ## restart: unless-stopped
 
 docker-compose.yml
 
 Dockerfile


コンテナを起動してみます。

> docker-compose up --build

https://qiita.com/kai_kou/items/eaafa3cb15e1496f50ec


Dockerfile
これができると（Dockerfile を書けるようになると）自分の好きなようにカスタマイズした Docker Image をコマンド1行で作成できるようになります。

docker-compose
これができると（コンテナ管理を docker-compose による管理で行うと）複数のコンテナで構成されるアプリケーションについて、Docker Image のビルドや各コンテナの起動・停止、ネットワーク接続をコマンド1行で実行できるようになります。

