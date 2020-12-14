# room
JetpackまたはAAC(Android Architecture Component)のRoomはSQLiteを抽象化したオブジェクトであり、ORM(Object Relational Mapping)です。 そのため、オブジェクトを使用するようにデータベースを使用することができます。 しかし、Roomの知識を習得する必要があります。

ルームは3つの主要なComponentで構成されています。

Entity：データベース内のテーブルを表現します
Database：データベースを意味します
DAODataAccessObject：データベースにアクセスするメソッドがあります。そのメソッドのSQLiteのクエリは、直接作成しなければします。
Entityは、データベーステーブルの情報を表現し、DatabaseはDAOオブジェクトを提供して、データベースを利用することができるAccess pointです。 DAOは、データベースにアクセスするメソッドが定義されており、そのメソッドが使用するSQLiteクエリは、直接作成する必要があります。

下の図は、ルームの構造を図に表現したものです。 開発者は、3つの主要な部屋のオブジェクトを作成し、定義してくれれば、残りは、ライブラリで世話をします。

https://codechacha.com/ja/android-jetpack-room/



https://qiita.com/iTakahiro/items/7e0d63140ae4dac10d18

https://github.com/iTakahiro/ArchitectureFootball


https://hirauchi-genta.com/kotlin-room/


https://developer.android.com/training/data-storage/room?hl=ja

https://medium.com/kaleidot725/android-room-を使ったサンプルと解説-a3f2ed978af4

