# page study
https://kotlinlang.org/

https://star-zero.medium.com  🔴


# google dev 🔴
https://www.youtube.com/c/AndroidDevelopers


>Kotlin实战 by Dmitry Jemerov Svetlana Isakova 覃宇 罗丽 李思阳 蒋扬海 (z-lib.org)

＞Navigation Composeはそのまま使うとコード量が増えたり引数の扱いが面倒だったりします。こういった問題を便利にしてくれる compose-destinations というライブラリを紹介します。
https://github.com/raamcosta/compose-destinations

# HTTP clients
https://square.github.io/retrofit/

# Jetpack Compose 🔴　 🔴　
https://github.com/android/compose-samples

https://www.youtube.com/watch?v=PjQdFmiDgwk&ab_channel=AndroidDevelopers

https://github.com/chrisbanes/tivi

### Composable
Compose for existing apps
https://www.youtube.com/watch?v=PjQdFmiDgwk&ab_channel=AndroidDevelopers

## kapt
KotlinでOrmaを使うために
https://blog.mokelab.com/50/android_todo6.html

https://qiita.com/uhooi/items/836902cdd322f9accded

## Supported Databases Orma Database access
https://github.com/jetbrains/Exposed

# Web applications
https://github.com/ktorio/ktor

# Dagger　Hilt 🔴　
https://www.youtube.com/channel/UCT_d1VMe2Jx0wW_b-oQ71XQ
外部からインスタンスを受け取る形になっています。インスタンスを組み立てる際に依存するインスタンスを(何らかの方法で)持ってきて渡す(Injectする)ことから、DI(Dependency Injection)と呼びます。自動インジェクションライブラリです。
https://www.youtube.com/watch?v=2-B-X0NwrEM&ab_channel=%E3%83%A2%E3%82%B1%E3%83%A9%E3%83%9C

https://blog.mokelab.com/53/android_todo9.html

https://www.youtube.com/watch?v=EfN8wHhc8Nw&ab_channel=DroidKaigi

Dagger Hiltは1つのSubcomponentが作られる
Dagger AndroidはActivityごとに専用のSubcomponentが作られる
https://tech.mokelab.com/android/compose/app/hilt/viewModel.html

https://www.geeksforgeeks.org/dagger-hilt-in-android-with-example/

https://aakira.app/blog/2020/05/dagger-hilt/

https://speakerdeck.com/kkagurazaka/yuan-li-karawan-quan-li-jie-surudagger-hilt-migration?slide=3 🔴

https://techblog.recochoku.jp/7924
```kotlin
buildscript {
    dependencies {
        classpath("com.google.dagger:hilt-android-gradle-plugin:2.40.2")
    }
}

appフォルダ配下のGradle
plugins {
    id('dagger.hilt.android.plugin')
}
dependencies {
    implementation("com.google.dagger:hilt-android:2.40.2")
    kapt("com.google.dagger:hilt-android-compiler:2.40.2")
}
```
https://developer.android.com/training/dependency-injection/hilt-android?hl=ja
Dagger を利用してアプリの依存関係注入（DI）を自動化する方法について説明しました。
https://developer.android.com/training/dependency-injection/dagger-android?hl=ja

https://kaleidot.net/%E8%A9%B1%E9%A1%8C%E3%81%AE-dagger-hilt-%E3%82%92%E4%BD%BF%E3%81%A3%E3%81%A6%E3%81%BF%E3%81%9F-13acab8163e0

https://developer.android.com/training/dependency-injection/dagger-basics?hl=ja


# Spotless
https://github.com/diffplug/spotless

https://medium.com/@int_32/android-project-code-style-using-spotless-and-ktlint-5422fd90976c 🔴

正規表現や単純なフォーマットのチェックも出来るので 簡単なファイルフォーマットであれば Spotlessをフォーマッタとして便利に使うことが出来るでしょう。
https://progret.hatenadiary.com/entry/2019/12/09/165048


## KtLint + Spotless + GitHub ActionsでPRにsuggested changeさせる
https://qiita.com/takahirom/items/2a3d2912e74107748765

https://qiita.com/tfandkusu/items/0dff21c046de7ff0cdbe

# Gradle/Kotlinで開発する私的ベストプラクティス2022
https://blog.kengo-toda.jp/entry/2022/02/06/122835

