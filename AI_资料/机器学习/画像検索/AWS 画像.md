https://aws.amazon.com/jp/blogs/news/building-a-visual-search-application-with-amazon-sagemaker-and-amazon-es/
```
このプロセスは、次のようなステップで構成されます。

ユーザーは、Amazon SageMaker ノートブックインスタンスにある Jupyter ノートブックを立ち上げます。
事前トレーニング済みの Resnet50 深層ニューラルネットが Keras からダウンロードされます。この際、最後の分類子レイヤーは削除され、シリアル化された新しいモデルアーティファクトが、Amazon Simple Storage Service (Amazon S3) に保存されます。このモデルを使用して、Amazon SageMaker のリアルタイムエンドポイントにおいて、TensorFlow の Serving API が起動されます。
ファッション画像がエンドポイントにプッシュされます。この画像はニューラルネットワークを通過し、その特徴、もしくは埋め込み要素が抽出されます。
ノートブックのコードが、Amazon ES ドメインにある KNN インデックスに対し、画像の埋め込み要素を書き込みます。

```


# 画像の特徴量としては、MobileNet、テキストの特徴量としては以前はfastTextのdoc vectorを使っていたんですけど、
今はfastTextとSCDVという仕組みに移行しています。近傍探索に関しては、以前はNGTを使っていたんですけど、現在はfaissを使っています。

https://logmi.jp/tech/articles/322876

# Amazon SageMaker と Amazon ES を使用しての画像検索アプリケーションの構築
https://aws.amazon.com/jp/blogs/news/building-a-visual-search-application-with-amazon-sagemaker-and-amazon-es/


# Amazon SageMaker は、すべての開発者やデータサイエンティストが機械学習 (ML) モデルを迅速に構築、トレーニング、デプロイできるようにする完全マネージド型サービスです。SageMaker は高品質モデルの開発を容易にするため、機械学習の各プロセスから負荷の大きな部分を取り除きます。

 ⭕️械学習モデルの作成
 
https://aws.amazon.com/jp/sagemaker/

## Amazon SageMaker は完全マネージド型サービスであり、あらゆる開発者やデータサイエンティストに対し、機械学習 (ML) モデルを迅速に構築、トレーニング、デプロイするための手段を提供します。同じく完全マネージド型サービスである Amazon Elasticsearch Service では、Elasticsearch のデプロイ、保護、実行を、簡単かつ大規模に、コスト効率良く行えます。Amazon ES では、k–近傍 (KNN) 検索が行えます。これは、製品レコメンデーション、不正検出、画像や動画および意味論的なドキュメントの取得など、今回のものと類似性のあるユースケースで検索を強化するためにも使用できます。軽量かつ効率的な非メトリクス空間ライブラリ (NMSLIB) を使用して構築された KNN は、数千のディメンションにわたる数十億のドキュメントに関する、大規模かつ低レイテンシーの近傍検索を、通常の Elasticsearch クエリと同じ手軽さで実行することを可能にします。

# Amazon Elasticsearch Service = Amazon ES
⭕️k–近傍 (KNN) 検索が行えます
 

## 最近傍探索（英: Nearest neighbor search, NNS）は、距離空間における最も近い点を探す最適化問題の一種、あるいはその解法。近接探索（英: proximity search）、類似探索（英: similarity search）、最近点探索（英: closest point search）などとも呼ぶ。問題はすなわち、距離空間 M における点の集合 S があり、クエリ点 q ∈ M があるとき、S の中で q に最も近い点を探す、という問題である。多くの場合、M には d次元のユークリッド空間が採用され、距離はユークリッド距離かマンハッタン距離で測定される。低次元の場合と高次元の場合で異なるアルゴリズムがとられる。

# こちら（faiss）は、Facebookが作っているOSSの高次元近傍探索ツールです。NGTに比べると、圧縮とかの仕組みが用意されていて便利です。ただ圧縮方法によっては、事前の学習が必要になります。圧縮をフル活用したら、NGTに比べてメモリを1/100くらいまで減らせて、とても便利です。
# faiss
https://www.nogawanogawa.com/entry/faiss

https://github.com/facebookresearch/faiss/wiki

https://rest-term.com/archives/3414/

# ai
https://ai.facebook.com


これは先ほどデイリーと言いましたけど、Cloud Watch Rulesのルールで、1日一回イベントが発火しています。
Step Functionsが起動されて、Step FunctionsはまずECS Taskを動かします。これはfaissのインデックスを作成取得するのが目的です。

# ECS Task
Amazon Elastic Container Service (Amazon ECS) は、フルマネージド型のコンテナオーケストレーションサービスです。Duolingo、Samsung、GE、Cookpad などのお客様が ECS を使用して、セキュリティ、信頼性、スケーラビリティを実現するために最も機密性が高くミッションクリティカルなアプリケーションを実行しています。

ECS がコンテナを実行するのに最適な選択肢である理由をいくつかご紹介しましょう。まず、コンテナ用サーバーレスコンピューティングである AWS Fargate を使用して、ECS クラスタを実行することを選択できます。Fargate ではサーバーのプロビジョンと管理が不要で、アプリケーションごとにリソースを指定してその分のみ料金を支払うことができるだけでなく、設計段階からのアプリケーション分離によりセキュリティを強化します。2 つ目に、ECS は Amazon 内で広く使用されており、また Amazon SageMaker、AWS Batch、Amazon Lex、Amazon.com の推奨エンジンなどのサービスを提供しているため、セキュリティ、信頼性、可用性に関して ECS を広範囲でテストしています。

# SNS
Amazon Simple Notification Service (Amazon SNS) は、アプリケーション対アプリケーション（A2A）間と、アプリケーション対個人（A2P）間の両方の通信に使用できる、フルマネージド型メッセージングサービスです。

# SQS
Amazon Simple Queue Service (SQS) は、完全マネージド型のメッセージキューイングサービスで、マイクロサービス、分散システム、およびサーバーレスアプリケーションの切り離しとスケーリングが可能です。SQS では、メッセージ指向ミドルウェアの管理や運用に関連する複雑さやオーバーヘッドを排除できるため、開発者が差別化作業に集中することができます。SQS を使用すると、あらゆる量のソフトウェアコンポーネント間でメッセージを送信、保存、受信できます。メッセージが失われることはなく、他のサービスを利用可能にしておく必要もありません。SQS は任意の AWS コンソール、コマンドラインインターフェイス、SDK を使用して、簡単な 3 つのコマンドで利用を開始できます。
