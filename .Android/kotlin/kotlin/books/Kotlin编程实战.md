http://www.pragprog.com/titles/vskotlin

https://pragprog.com/titles/vskotlin/programming-kotlin/


# kotlinc-jvm -version
info: kotlinc-jvm 1.7.0 (JRE 18.0.1.1+0)

“把许多不同语言（C++、C#、Erlang、Groovy、Java、JavaScript、Python、Ruby、Scala、Smalltalk）的精华结合在一起，得到的就是Kotlin。Kotlin的优势在于其多样性。”

 https://developer.android.com/kotlin
 
 ### “静态方法时。@JvmStatic注释有助于解决这个问题。”

 
 ```kotlin
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
                                       ```
 
###  “当一个函数同时接受多个参数时，你可以使用vararg。但是只有一个参数可以注释为vararg。”

“在参数被注释为vararg的地方，你可以通过在它前面加上spread运算符*来传递一个数组（当然类型是正确的）。”
## “一旦从indices属性中得到了index值，我们就可以得到列表中该位置的值。 
“我们可以使用withIndex()函数以及在3.4节中介绍的解构应用程序来一次性获得索引和位置，如下所示：”

抜粋:
Kotlin编程实战：创建优雅、富于表现力和高性能的JVM与Android应用程序
【美】文卡特·苏布拉马尼亚姆（Venkat Subramaniam）
この素材は著作権で保護されている可能性があります。

