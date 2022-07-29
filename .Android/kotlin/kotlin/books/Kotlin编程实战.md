http://www.pragprog.com/titles/vskotlin

https://pragprog.com/titles/vskotlin/programming-kotlin/


# kotlinc-jvm -version
info: kotlinc-jvm 1.7.0 (JRE 18.0.1.1+0)

“把许多不同语言（C++、C#、Erlang、Groovy、Java、JavaScript、Python、Ruby、Scala、Smalltalk）的精华结合在一起，得到的就是Kotlin。Kotlin的优势在于其多样性。”

 https://developer.android.com/kotlin
 
 ### “静态方法时。@JvmStatic注释有助于解决这个问题。”

https://developer.android.com/kotlin

 operator
 
 # lazy
 遅延 (lazy)
lazy() はラムダをとり、遅延プロパティを実装するためのデリゲートとして機能する Lazy<T> のインスタンスを返す関数です。get() の最初の呼び出しは lazy() に渡されたラムダを実行し、結果を保持します。 それ以降、get() を呼び出すと、単に記憶された結果が返されます。


 https://dogwood008.github.io/kotlin-web-site-ja/docs/reference/delegated-properties.html
 ```kotlin
 val lazyValue: String by lazy {
    println("computed!")
    "Hello"
}

fun main(args: Array<String>) {
    println(lazyValue) // "computed!"  "Hello"
    println(lazyValue)// "Hello"
}
	
   val l = lazy {
     println("lazyObj")
    "hello"
  }
  println(l::class)

  val lazyObj by l
  println(lazyObj)
  println(lazyObj)	
	
 ```
 https://qiita.com/u-dai/items/a31c5c2a7d5c7ed2cc47
 
 https://star-zero.medium.com/kotlin-lazy%E6%8B%A1%E5%BC%B5%E9%96%A2%E6%95%B0-16f7c5da84a8
 
 infix
 
 “tailrec优化只适用于可以表示为尾递归的递归。要使用tailrec”
 
 JvmStatic类
 
 “ https://github.com/kotlintest/kotlintest”
### “我们将使用KotlinTest来运行测试，并使用Mockk来模拟依赖项。我们还将使用Jacoco测量代码覆盖率。”
https://mockk.io

./gradlew
https://gradle.org/

# “好的测试是FAIR——快速的（fast）、自动化的（automated）、独立的（independent）和可重复的（repeatable）。”

## “Spring主要支持三种不同的语言：Java、Groovy和Kotlin。”
https://start.spring.io/


## “协程是建立在强大的continuation（延续）”
“让我们在task1()和task2()函数中都使用yield()。Kotlin将只允许在带有suspend关键字注释的函数中使用挂起点。但是，使用suspend标记函数并不会自动使函数在协程中运行或并发运行。 
 ”“launch()函数的作用是：返回一个Job对象，该对象用于等待协程的终止或取消。但是无法从使用launch()启动的协程返回结果。如果希望异步执行任务并获得响应，请使用async()而不是launch()。”

 
 ```kotlin
 “asSequence()方法将一个集合包装成一个序列”

“一个自定义注释本身是用@DslMarker注释来注释的。”


 class Counter(val value: Int) {
    operator fun inc() = Counter(value + 1)
    operator fun dec() = Counter(value - 1) 
    override fun toString() = "$value"
}  
fun main() {
   

var counter = Counter(2) 
    println(counter) //2 
    println(++counter) //3 
    println(counter) //3 
    println(counter++) //3 
    println(counter) //4

}


 fun invokeWith(n: Int, action: (Int) -> Unit) { 
    println("enter invokeWith $n")
    action(n)
    println("exit invokeWith $n")
}
fun caller() { 
  (1..3).forEach { i ->
    invokeWith(i) here@ { 
      println("enter for $it")
      if (it == 2) { return@here}
      println("exit for $it")
    }
  }
   println("end of caller")
} 
caller() 
println("after return from caller")



  fun walk1To(n: Int, action: (Int) -> Unit) = (1..n).forEach { action(it) }
 walk1To(5, { i -> print(i) })
  walk1To(5){ i -> print(i) }
  walk1To(5) { print(it) }
  
    object Terminal {
    	fun write(value: Int) = println(value)
    }
fun main() {
   
 // fun isPrime(n: Int) = n > 1 && (2 until n).none { n % it == 0 }
 fun walk1To(n: Int, action: (Int) -> Unit) = (1..n).forEach { action(it) }
  
walk1To(5) { i -> Terminal.write(i) }
walk1To(5, Terminal::write)
}


val names = listOf("Pam", "Pat", "Paul", "Paula") 
    println(names.find {name -> name.length == 5 }) //Paula 
    println(names.find { name -> name.length == 4 }) //Paul
    
    
 val doubleOfEven = (1..10)
        .filter { e -> e % 2 == 0}
        .map { e -> e * 2 }
 	println(doubleOfEven)
	
	
 fun getTemperature(city: String): Double { 
        println("fetch from webservice for $city") 
        return 30.0
	}
    val temperature by lazy { getTemperature("city") }
    if (temperature > 20) //(nothing here) println("Warm")
    	println("30 to report")
    else
    	println("Nothing to report") //Nothing to report
	
import kotlin.properties.Delegates.observable

fun main() {
   
var count by observable(0) { property, oldValue, newValue -> println("Property: $property old: $oldValue: new: $newValue")
}
println("The value of count is: $count") 
count++
println("The value of count is: $count") 
count--
println("The value of count is: $count")

}	
 
sealed class Card(val suit: String)
class Ace(suit: String) : Card(suit)
class King(suit: String) : Card(suit) { override fun toString() = "King of $suit"
}
class Queen(suit: String) : Card(suit) { override fun toString() = "Queen of $suit"
}
class Jack(suit: String) : Card(suit) { override fun toString() = "Jack of $suit"
}
class Pip(suit: String, val number: Int) : Card(suit) { init {
if (number < 2 || number > 10) {
throw RuntimeException("Pip has to be between 2 and 10")
} }
}

 fun process(card: Card) = when (card) {
is Ace -> "${card.javaClass.name} of ${card.suit}" is King, is Queen, is Jack -> "$card"
is Pip -> "${card.number} of ${card.suit}"
}
fun main() {
println(process(Ace("Diamond"))) println(process(Queen("Clubs"))) println(process(Pip("Spades", 2))) println(process(Pip("Hearts", 6))) // 6 of Hearts
}


  var charSet = 'A'..'Z'
    for (value in charSet) {
        println("$value")
    }
    
     val r = ('A'..'Z').map { it.toString() }//.forEach(::println)
     for (letter in r){
       print(letter)
     }
 ```
 ```kotlin
 operator fun ClosedRange<String>.iterator() = object: Iterator<String> {
    private val next = StringBuilder(start) 
    private val last = endInclusive
    override fun hasNext() =
    last >= next.toString() && last.length >= next.length
    override fun next(): String { val result = next.toString()
    val lastCharacter = next.last()
    if (lastCharacter < Char.MAX_VALUE) { next.setCharAt(next.length - 1, lastCharacter + 1)
    } else { next.append(Char.MIN_VALUE)
    }
    return result }
}

fun main() {
	for (word in "hell".."help") { print("$word, ") }
   
}



enum class Suit(val symbol: Char) { 
    CLUBS('\u2663'), 
    DIAMONDS('\u2666'), 
    HEARTS('\u2665') {
    override fun display() = "${super.display()} ${this.symbol}" },
    SPADES('\u2660');
    open fun display() = "$symbol $name"
}
fun main() {
    for (suit in Suit.values()) { println(suit.display())
    }
}
                                       ```
 
###  “当一个函数同时接受多个参数时，你可以使用vararg。但是只有一个参数可以注释为vararg。”

“在参数被注释为vararg的地方，你可以通过在它前面加上spread运算符*来传递一个数组（当然类型是正确的）。”
## “一旦从indices属性中得到了index值，我们就可以得到列表中该位置的值。 
“我们可以使用withIndex()函数以及在3.4节中介绍的解构应用程序来一次性获得索引和位置，如下所示：”

抜粋:
Kotlin编程实战：创建优雅、富于表现力和高性能的JVM与Android应用程序
【美】文卡特·苏布拉马尼亚姆（Venkat Subramaniam）
この素材は著作権で保護されている可能性があります。

