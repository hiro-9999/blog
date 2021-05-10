# Programming in Scala

Scala程序设计Java虚拟机多核编程实战 (图灵程序设计丛书) by 苏帕拉马尼亚姆(Venkat Subramaniam) (z-lib.org)

Scala编程思想（原书第2版） by Bruce Eckel Dianne Marsh (z-lib.org)

“Apache Spark and Apache Kafka, where written in Scala and offered elegant Scala APIs, along with APIs in other languages.”
# アジア最大級のScalaカンファレンス「ScalaMatsuri」も日本で開催されているなど
https://career.levtech.jp/guide/knowhow/article/499/
前提として、フロントエンドの開発はScala.jsで行い、バックエンドの開発はScalaで行います。
Scalaファーストでフロントエンドとバックエンドをつなぐためのキーは「Airframe」というツールです。AirframeはOSSのフレームワークで、Scalaの特徴である「オブジェクト指向言語」と「関数型言語」を最大限活用できます。実際にトレジャーデータ社でもAirframeが用いられており、例えば、同社が提供するApache SparkをサポートするためのサービスはScalaとAirframeが採用されています。斉藤氏が所属しているチームで使用している、Prestoのクエリ監視ツールもScala.jsで開発されており、フロントエンドでもScalaがフル活用されていました。

# Scala.jsとは、ScalaをJavaScriptに変換するツールです。
```
「簡単に使える」「短く書ける」「安全」「動作が速い」などが代表的なメリットです。
Javaとの互換性が高いことも大きなメリットといえます。以下、Javaとの互換性の例です。

・ScalaからJavaのメソッドを呼び出す
・JavaからScalaのメソッドを呼び出す
・Javaで書かれたクラスを継承する
・Scalaで書かれたクラスをJavaが継承する
```

# 抜粋:: Dean Wampler  “Programming Scala, 3rd Edition”。 Apple Books 
https://github.com/deanwampler/programming-scala-book-code-examples

# SBT scala build tools
https://www.scala-sbt.org/release/docs/zh-cn/Task-Graph.html

# ver 12.3.5 Scala 3
https://www.scala-lang.org

https://dotty.epfl.ch/docs/

# online scala
https://scastie.scala-lang.org/g990YzF4TCy8mrJGJsIjNg


# Apache Spark
Apache Spark是一个开源的、强大的分布式查询和处理引擎
https://spark.apache.org

Spark Core
核心组件，分布式计算引擎
Spark SQL
高性能的基于Hadoop的SQL解决方案
Spark Streaming
可以实现高吞吐量、具备容错机制的准实时流处理系统
Spark GraphX
分布式图处理框架
Spark MLlib
构建在Spark上的分布式机器学习库
————————————————
版权声明：本文为CSDN博主「Helltaker」的原创文章，遵循CC 4.0 BY-SA版权协议，转载请附上原文出处链接及本声明。
原文链接：https://blog.csdn.net/Helltaker/article/details/109764065


