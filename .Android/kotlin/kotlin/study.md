# Kotlin Playground
https://play.kotlinlang.org/

## 2021/11/20 
https://developer.android.com/guide/topics/manifest/uses-sdk-element#ApiLevels
```android
android studio arctrc fox  2021/10/1 build
 compileSdkVersion 31
 buildToolsVersion '30.0.2'
 sdk android 12
 ```

# Android Studio Arctic Fox Essentials - Kotlin Edition by Smyth, Neil (z-lib.org).pdf
## Android Studio 4.2 Essentials Kotlin Edition
???

# regex. toregex. ??
https://docs.oracle.com/javase/8/docs/api/java/util/regex/Pattern.html
## matches("""\d+""".toRegex())

# Unicode
https://home.unicode.org
>>> println('\u8DD1')

# DSL ??

## 42.toString(radix =2)
```kotlin
% kotlinc-jvm
Welcome to Kotlin version 1.6.0 (JRE 17.0.1+0)
Type :help for help, :quit for quit
>>> 42.toString(radix =2)
res0: kotlin.String = 101010
>>> 42.toString(radix =10)
res1: kotlin.String = 42
>>> 42.toString(radix =16)
res2: kotlin.String = 2a

import java.util.*
// Main function entry point of program fun main(args: Array<String>) {
val sc = Scanner(System.`in`) println("Enter Number: ")
val num: Int = sc.nextInt()
// for loop to print multiplication table of given number for (i in 1..10) {
val result = num * i
println("$num*$i = $result") }
}
```

```kotlin
brew install kotlin
 % kotlinc-jvm
 “To leave the interactive shell (the REPL) and go back to the console (the system shell), type in: quit.”

“Type Size (bits) Min value Max value
Byte 8 −128 127
Short 16 −32,768 32,767
Int 32 −2,147,483,648 (−2 31) 2,147,483,647 (2 31–1)
Long 64 −9,223,372,036,854,775,808 (−263) 9,223,372,036,854,775,807 (2 63–1)”


>>> Math.pow(2.0,3.0)
res10: kotlin.Double = 8.0

double z = Math.pow(x,1.0/y); //x为被开方的数，1.0/y为要开方的次数
>>> Math.pow(8.0,1.0/3.0)
res20: kotlin.Double = 2.0

>>> Math.sqrt(8.0)
res16: kotlin.Double = 2.8284271247461903

抜粋:: John Hunt  “Beginner’s Guide to Kotlin Programming”。 Apple Books  
 ```
 
 # tailrec
 ・その関数自体の呼び出しが、関数の最後である
・try catchブロックの中ではない
```kotlin
 tailrec fun gcd(a: Int, b: Int): Int =
        if (b == 0) a
        else gcd(b, a % b)
    println(gcd(9,2)) 
    
fun test(i:Int) = i * 2
fun main() {
    val t = ::test 
    println(t(2)) 
}
```

# companion object
https://qiita.com/tkhs0604/items/261e94a42b7097dfd204
## Kotlinにはstatic修飾子がないので、companion objectはstaticなフィールドやメソッドが必要なときの代替手段として利用されることがほとんどだ

# run with apply  use-> this
# let also use-> it

# delegation -->use by class
enum class

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

# RxJava2. ??

```kotlin
  val capitols = listOf ("England" to "London", "Poland" to "Warsaw")
    val text = capitols.map { (country,_) -> country.toUpperCase() } 
            .onEach{ println(it) }
            .filter{ it.startsWith('P') }
            .joinToString (prefix = "Countries II Prints : ENGLAND POLAND prefix P:"  )
  		println(text) 
```

## EffectiveJava, 2nd Edition 
