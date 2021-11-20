Kotlin 是静 态类型的语言，所以每个表达式的类型在编译时均为己知。编译器可以验证试图访
问的任何属性或方法，或者某个真实存在的特定类实例 。 作为一种静态类型语言， Java 也具有该特征;但与 Java 不同， Kotlin 类型系统更加严格(安全) 。

# 零基础学Kotlin编程 by （美）马尔钦·莫斯卡拉，（美）伊戈尔·沃吉达著；张博译 (z-lib.org).pdf
https://github.com/PacktPublishing/Android-Development-with-Kotlin

https://youtrack.jetbrains.com/issues/KT

读者可访问 https://youtrack.jetbrains.com/issues/KT下载Kotlin错误跟踪器。 读者可访问 http://slack.kotlinlang.org/以了解KotlinSlackChannel。


```kotlin
  val capitols = listOf ("England" to "London", "Poland" to "Warsaw")
    val text = capitols.map { (country,_) -> country.toUpperCase() } 
            .onEach{ println(it) }
            .filter{ it.startsWith('P') }
            .joinToString (prefix = "Countries II Prints : ENGLAND POLAND prefix P:"  )
  		println(text) 
```

## EffectiveJava, 2nd Edition 
