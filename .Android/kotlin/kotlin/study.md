# maproad
https://roadmap.sh/android

# google devlop
https://developer.android.com/guide

### RxJava, RxKotlin workmanager
Reactive Programming with Kotlin (First Edition) Learn Rx with RxJava, RxKotlin, and RXAndroid by Alex Sullivan, Marin Todorov, Scott Gardner, Florent Pillet, Junior Bontognali (z-lib.org).pdf

https://developer.android.com/topic/libraries/architecture/workmanager/basics



## Atomic Kotlin by Bruce Eckel and Svetlana Isakova (z-lib.org).mobi
https://github.com/BruceEckel/AtomicKotlinExamples


# Kotlin Playground
https://play.kotlinlang.org/

# Head First Android Development, 3rd Edition by Dawn Griffiths  David Griffiths (z-lib.org).pdf  learning -->not good for develop source was NG
https://github.com/dogriffiths/HeadFirstAndroid3rdEd

# java to kotlin 💮
https://java-to-kotlin.dev

# plus apply also -->ok
https://www.cnblogs.com/qianduanpiaoge/p/15348263.html

### test book
“Test-Driven Development By Example by Kent Beck (Addison-Wesley) and Growing Object-Oriented Software Guided By Tests by Steve Freeman and Nat Pryce (Addison-Wesley). ”

抜粋:: Duncan  McGregor  “Java to Kotlin”。 Apple Books  

# android studio preview
https://developer.android.com/studio/preview

```kotlin
https://developer.android.com/studio/preview/features?hl=ja
android {
    compileSdkVersion(30)

    compileOptions {
      sourceCompatibility(JavaVersion.VERSION_11)
      targetCompatibility(JavaVersion.VERSION_11)
    }

    kotlinOptions {
      jvmTarget = "11"
    }
}
```



# rxjava 🔴 抜粋:: By Alex Sullivan & Marin Todorov  “Reactive Programming with Kotlin”。 Apple Books  
```kotlin
rxjava
“viewModel.listItemsLiveData
  .observe(this, Observer(adapter::submitList))”
  ```

# google example 🔴
https://github.com/android/compose-samples

https://developer.android.com/codelabs/jetpack-compose-advanced-state-side-effects#1

# Reactive Programming with Kotlin 🔴
https://github.com/raywenderlich/rxa-materials/tree/editions/2.0

# RxKotlin 🔴
https://github.com/ReactiveX/RxKotlin

## “To build a debug release of the project suitable for device or emulator testing, use the assembleDebug option:
./gradlew assembleDebug

# room Elements of Android Room, Version 0.9 by Mark L. Murphy (z-lib.org).pdf
https://developer.android.com/topic/libraries/architecture/paging.html

# Android Studio Arctic Fox Essentials - Kotlin Edition by Smyth, Neil (z-lib.org).pdf  🔴
### .import <reverse domain>.<project name>.databinding.<binding name>
 ```kotlin
 onSaveInstanceState && onRestoreInstanceState
 outState.putCharSequence("savedText", userText)
 
 val userText = savedInstanceState.getCharSequence("savedText")
 binding.editText.setText(userText)
 
 Snackbar.make(view, "Apply Changes is Amazing!", Snackbar.LENGTH_LONG)
        .setAction("Action", null).show()
 ```
 
抜粋:: Smyth, Neil;  “Android Studio 4. 2 Development Essentials - Kotlin Edition”。 Apple Books  

# ./gradlew tasks
./gradlew installDebug

## “Kotlin编程权威指南” 抜粋:: [美] 克莉丝汀•马西卡诺布赖恩•加德纳比尔•菲利普斯克里斯•斯图尔特  “Android编程权威指南第4版”。 Apple Books  
### @JvmField 注解还能用来以静态方式提供伴生对象里定义的值。 ->can be use in java 
@JvmOverloads
 @file:JvmName("Hero")
 @Throws(IOException::class)
 
 ### “使用ViewModel来处理设备旋转的UI状态持久化问题，使用Room和LiveData来实现数据库及其数据查询，使用WorkManager来调度后台工作，”

 
 ### 挂起函数 ??? launch 与 async/await
 看代码可知，挂起函数都带 suspend 关键字。以下是 await 函数的函数签名: public suspend fun await(): T
 
 
 ## 闭包(closure)
Kotlin 匿名函数的又一种叫法。这种匿名函数能引用匿名函 数体外的局部变量。(另参见匿名函数。)

代理(delegate) 为属性初始化定义模板的一种办法.

遍历(iteration)
对 range 或集合里的每一个元素进行重复性操作。

表达式(expression) 值、运算符以及函数的组合，能够产生新的结果值。

### 泛型 out in 生产者(producer) 可读而不可写的泛型参数。
 
 ### study page ??
 https://exercism.org/docs/using/getting-started

# kotlin sample
https://developer.android.com/samples?language=kotlin

### REPL 是英文单词 read(读取)、evaluate(求值)、print(输出)和 loop(循环)的首字母缩写。
Kotlin 并未局限于 JVM。本书撰写之际，Kotlin 已能编译成 JavaScript，甚至能脱离 虚拟机层，直接编译成可以在 Windows、Linux 和 macOS 平台上运行的原生二进制代码。

## “使用Jetpack库（又称AndroidX）代替了原来的支持库”

# JetBrains 的编码约定:
https://kotlinlang.org/docs/coding-conventions.html#wrap-chained-calls
# Google 的代码指南，包括 Android 代码和互操作的编码约定:
https://developer.android.com/kotlin/style-guide

# test ??
Android Test-Driven Development by Tutorials

## Kotlin in Action
## Kotlin从零到精通 欧阳燊 清华
https://pan.baidu.com/s/1ceRZzDK4_zT-uQHqy2WFHw 

# start
https://www.raywenderlich.com/paths#android

https://b-ok.asia/book/16845732/046c4b?dsource=recommend

# video retrofit
https://learning.oreilly.com/videos/the-complete-kotlin/9781839214578/9781839214578-video9_4/


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
Integer.toBinaryString(42)
101010
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
https://kotlinlang.org/api/latest/jvm/stdlib/kotlin.math/

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
