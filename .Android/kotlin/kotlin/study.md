# Kotlin Playground
https://play.kotlinlang.org/

# kotlin sorce
https://github.com/JetBrains/kotlin/releases

# kotklin doc //2021/11/20 1.6.0
https://kotlinlang.org/docs/operator-overloading.html

# java -> kotlin change
https://developer.android.com/kotlin/get-started

Kotlin 是静 态类型的语言，所以每个表达式的类型在编译时均为己知。编译器可以验证试图访
问的任何属性或方法，或者某个真实存在的特定类实例 。 作为一种静态类型语言， Java 也具有该特征;但与 Java 不同， Kotlin 类型系统更加严格(安全) 。

# 零基础学Kotlin编程 by （美）马尔钦·莫斯卡拉，（美）伊戈尔·沃吉达著；张博译 (z-lib.org).pdf
https://github.com/PacktPublishing/Android-Development-with-Kotlin

https://youtrack.jetbrains.com/issues/KT

读者可访问 https://youtrack.jetbrains.com/issues/KT下载Kotlin错误跟踪器。 读者可访问 http://slack.kotlinlang.org/以了解KotlinSlackChannel。


# バイトコードの逆コンパイル:
IntelliJで行う場合はメニューの「ツール」→「Kotlin」→「Kotlinバイトコードの表示」と選択して、出てきたコードの左上「逆コンパイル」をクリックします。

# inline ??
https://kotlinlang.org/docs/inline-functions.html#restrictions-for-public-api-inline-functions


# lateinit と by lazy
https://qiita.com/u-dai/items/a31c5c2a7d5c7ed2cc47

```kotlin
  val capitols = listOf ("England" to "London", "Poland" to "Warsaw")
    val text = capitols.map { (country,_) -> country.toUpperCase() } 
            .onEach{ println(it) }
            .filter{ it.startsWith('P') }
            .joinToString (prefix = "Countries II Prints : ENGLAND POLAND prefix P:"  )
  		println(text) 
```

## EffectiveJava, 2nd Edition 
