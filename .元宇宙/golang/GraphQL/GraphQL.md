# GraphQL
https://reffect.co.jp/html/graphql

スキーマタイプにはオブジェクトタイプの他にQueryタイプ、Mutationタイプ、Subscriptionタイプがあります。
QueryタイプはRead Operation(問い合わせ)を行うクエリーの定義に利用します。MutationタイプはWrite Operations(作成、更新、削除)に利用します。
SubscriptionタイプはChatアプリなどのようなリアルタイムのRead Operationに利用します。

### JSONPlaceHolder
外部データリソースには無料で利用可能なJSONPlaceHolderを利用します。決められたURLにGETリクエストを送信するとJSONでデータを取得することができます。
データを取得するためにaxiosのライブラリを利用するためaxiosライブラリのインストールを行います。fetch関数を利用するためにnode-fetchをインストールすることもできます。
```js
% npm install axios

 % npm install apollo-server graphql
 
 % npm install --save-dev nodemon 
 % npx nodemon index.js
 
 const { ApolloServer, gql } = require('apollo-server');
 
 const { ApolloServer, gql } = require('apollo-server');

const typeDefs = gql`
  type Query{
    hello: String
  }
`

const resolvers = {
  Query: {
    hello: () => 'Hello World',
  },
}

const server = new ApolloServer({ typeDefs, resolvers });

server.listen().then(({ url }) => {
  console.log(`🚀  Server ready at ${url}`);
});
```
ndex.jsファイルの更新を検知でき更新した内容が自動反映できるようにnodemonもインストールを行っておきます。インストール後にnpx nodemon index.jsコマンドを実行するとindex.jsファイルの中身が実行されファイルの変更の監視が開始されます。

https://github.com/graphql/graphiql

https://circleci.com/ja/blog/introduction-to-graphql/

今回取り上げる GraphQL もデータの問い合わせを行うための言語です。
GraphQL は、クライアント-サーバー間のデータ問い合わせに特化した言語です。
GraphQL には、データ問い合わせを行うクエリ言語とは別に、データの構造を定義するスキーマ言語をもち、このスキーマ言語によってデータ構造の型定義を行うことができます。定義された型を用いることにより、型安全なデータ通信が可能になります。
https://qiita.com/jintz/items/c9105dca1725224d36a8

https://zenn.dev/yoshii0110/articles/2233e32d276551


GraphQLモックサーバーでフロントエンドやBFFを非同期に開発
Apollo Serverの機能でスキーマからGraphQLのモックサーバーを構築しています。バックエンドの構築を待たずに、フロントエンドの実装が可能となっています。

# Mocking - Apollo GraphQL Docs
https://www.apollographql.com/docs/apollo-server/testing/mocking/

# 型定義の自動生成でBFFを型安全に開発
GraphQL Code Generatorでスキーマからリゾルバの型定義、openapi-typescriptでOpenAPI定義からデータソース (バックエンドの呼び出し処理) の型定義をそれぞれ生成しています。これらを使ってBFFを実装することで、型安全に開発を進められています。
## TypeScript Resolvers | GraphQL Codegen Plugin Hub
https://www.graphql-code-generator.com/plugins/typescript-resolvers

## drwpow/openapi-typescript: Generate TypeScript types from Swagger OpenAPI specs


https://inside.dmm.com/entry/2022/6/24/dmmgames-bff/
