# page study
https://kotlinlang.org/

https://star-zero.medium.com  🔴


# google dev 🔴
https://www.youtube.com/c/AndroidDevelopers

# Jetpack Composeでレイアウト作成の基本 🔴. 2021年の7月に安定版のバージョン1.0.0が公開
https://logmi.jp/tech/articles/325525

https://engawapg.net/programming/jetpack-compose/

https://www.isoroot.jp/blog/3034/

https://techblog.zozo.com/entry/zozotown-android-jetpack-compose


> 🔴 Android Debugging by Tutorials Learn to Debug Real World Android Apps (raywenderlich Tutorial Team , Vincenzo Guzzi etc.) (z-lib.org)
```kotlin
fun main() = runBlocking { 
	val job: Job = launch {
		while (true) { 
			println("I'm working") 
			Thread.sleep(10L)
		} 
	}
	delay(30)
        job.cancel()
    }


val list: MutableList<Any?> = mutablelistOf(1L, 3.14, "e")
fun forAll() = collection.forEach(::doSomething)

val numbers = listOf(1, 20, 18, 37, 2) 
val groupedNumbers = numbers.groupBy {
when {
it < 20 -> "less than 20"
else -> "greater than or equal to 20"
} }
println(groupedNumbers)
{less than 20=[1, 18, 2], greater than or equal to 20=[20, 37]}

val nums = listOf(10, 20, 100, 5)
val isAny = nums.any() // true 
val isAnyOdd = nums.any { it % 1 > 0 } // true 
val isAnyBig = nums.any { it > 1000} // false

val nums = listOf(10, 20, 100, 5)
val numbers = nums.filterNot { it > 20 }
A beautifully convenient special case of filterNot is the function filterNotNull. It removes all of the nulls from a collection:
val nums = listOf(null, 20, null, 5)
val numbers = nums.filterNotNull() // { 20, 5 }

 class Rectangle(val l: Int, val w: Int) { 
 val area: Int
    get()=l*w
}
val rect = Rectangle(3, 4)
print(rect.area)

 class ExpensiveToHash(_summary: String) {
	var summary: String = _summary 
     set(value) {
	 	field = value
     }

}

val rect = ExpensiveToHash("3, 4")
print(rect.summary)

class MyFragment: Fragment() {
  private lateinit var button: Button // will initialize later
}

class Lightweight {
val heavy by lazy { // Initialization block
          Heavyweight()
      }
}
by  🔴  property delegation
https://kotlinlang.org/docs/delegated-properties.html#translation-rules-when-delegating-to-another-property

val yearMonthDate: String
}
class TimeExtensions {
    // other code
    companion object StdTimeExtension : Formatter { 
    const val TAG = "TIME_EXTENSIONS"
	override val yearMonthDate = "yyyy-MM-d"
	} 
}

val timeExtensionsTag = TimeExtensions.StdTimeExtension.TAG
print(timeExtensionsTag)

data class Point(var x: Int, var y: Int? = 3) 
val p = Point(1) // x = 1, y = 3 
val copy = p.copy(y = 2) // x = 1, y = 2

// enum class を定義する
enum class Color(val rgb: Int) {
  RED(0xFF0000),
  BLUE(0x0000FF),
  GREEN(0x00FF00)
}

fun main() {
  // REDのrgb値を取得する
  val rgb = Color.RED.rgb
  // Int型の値rgbを文字列に変換する
  println(rgb.toString(16))
}

 enum class LENGTH(val value: Int) {
	TEN(10), TWENTY(20), THIRTY(30), SIXTY(60);
}
print(LENGTH.TEN.value)

println((listOf(1, 2) + 3).equals(listOf(1, 2, 3))) // true
println((listOf(1, 2) + listOf(3, 4)) .equals(listOf(1, 2, 3, 4))) // true
```


# Clean Android Architecture 🔴
https://github.com/PacktPublishing/Clean-Android-Architecture



# Programming Android With Kotlin
https://github.com/ProgrammingAndroidWithKotlin


# 存関係インジェクション DI
https://developer.android.com/training/dependency-injection?hl=ja

複数人場合、依存関係インジェクションを使用方がいいい
hilt コードを再利用できる
リファクタリングが容易になる
テストが容易になる



## WorkManager

>フラグメント Fragment 🔴
https://developer.android.com/guide/fragments

>LiveData

> Rxjava
https://github.com/ReactiveX/RxJava/wiki/Creating-Observables

### coroutines  コルーチン 🔴
https://developer.android.com/kotlin/coroutines?hl=ja


## navigation drawer 🔴
How to Build Android Apps with Kotlin A hands-on guide to developing, testing and publishing your first apps with Android (Alex Forrester, Eran Boudjnah etc.) (z-lib.org)
```kotlin
implementation
  'androidx.navigation:navigation-fragment-ktx:2.3.2'
implementation 'androidx.navigation:navigation-ui-ktx:2.3.2'
```
https://github.com/PacktPublishing/How-to-Build-Android-Apps-with-Kotlin/tree/master/Chapter04


>Kotlin实战 by Dmitry Jemerov Svetlana Isakova 覃宇 罗丽 李思阳 蒋扬海 (z-lib.org)

＞Navigation Composeはそのまま使うとコード量が増えたり引数の扱いが面倒だったりします。こういった問題を便利にしてくれる compose-destinations というライブラリを紹介します。
https://github.com/raamcosta/compose-destinations

# HTTP clients
https://square.github.io/retrofit/

# Jetpack Compose 🔴　 🔴　🔴　
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

