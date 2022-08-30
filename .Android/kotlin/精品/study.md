# ONLINE
https://play.kotlinlang.org/ 

# doc 🔴
https://kotlinlang.org/docs/basic-syntax.html#variables

kotlincn-docs.mobi

# Kotlin 语法的练习 🔴
https://play.kotlinlang.org/byExample/overview

https://play.kotlinlang.org/koans/overview

# study page  🔴
https://hirauchi-genta.com/category/kotlin/
 
 # Atomic Kotlin (Bruce Eckel, Svetlana Isakova) (z-lib.org)
 优先使用不可变（而不是可变）数据。初始化后未修改的局部变量与属性，总是将其声明为  val 
 
### MVPを学んでいくにあたり、GoogleがGitHubに公開しているtodo-mvp-kotlinというサンプル side menu 🔴
 git clone https://github.com/android/architecture-samples.git
 
 https://hirauchi-genta.com/kotlin-mvp-1/
 
 ### tailrec ???
 ```
  by
 Sealed
  .map(::travel)
  tailrec
  
  suspend 🔴suspend 関数とは非同期処理のための仕組みであって、「別の suspend 関数を呼び出すために使用する」のである。
  https://karino2.github.io/kotlin-lesson/suspend_intro.html
 https://android.suzu-sd.com/2022/01/coroutine_suspend/
  
  private fun testCoroutine() {
    viewModel.viewModelScope.launch {
        // ここはメインスレッドで呼び出される

        // asyncTask() は suspend 関数なので、呼び出してもメインスレッドをブロックしない
        val result = asyncTask()

        // asyncTask() が終了したら、メインスレッドでこのブロックが実行される
        viewModel.textValue.value = result
    }
}

private suspend fun asyncTask(): String = withContext(Dispatchers.IO) {
    // ここは DefaultDispatcher-worker-X というバックグラウンドスレッドで呼び出される
    Thread.sleep(1000)
    return@withContext "RESULT"
}
  
  companion

  
 open class //类之间继承由冒号（ : ）声明。默认情况下类都是 final 的；如需让一个类可继承， 请将其标记为  open 。
 abstract class

  
  sealed vs. abstract //  val myObject = object : MyAbstractClass() {
  inner class
  Companion Objects
  class MyClass {
    companion object Factory {
        fun create(): MyClass = MyClass()
    }
}
val instance = MyClass.create() //The name of the companion object can be omitted, in which case the name Companion will be used:

  by lazy/lazyInit
  
  ライブラリの生成と利用方法について解説🔴
  https://hirauchi-genta.com/kotlin-library/
  
  infix //如果一个方法会改动其接收者，那么不要声明为中缀（ infix ）形式
    operator
  
  let/also  -> it 🔴
  with, run/apply -> this
  
  enum class Color(val rgb: Int, val description: String) {
    RED(0xFF0000, "赤です"),
    GREEN(0x00FF00, "緑です"),
    BLUE(0x0000FF, "青です")
   }
val color: Color = Color.RED
println(color.description)
println(color.rgb)
enumにはパラメータを持たせることができる
パラメータにアクセスするには、変数.パラメータ名と実装する
https://hirauchi-genta.com/kotlin-enum/

配列1 contentEquals 配列2とすることで、2つの配列を比較することができます。
また、Arrays.javaに定義されているArrays.equals()関数でも、配列を比較することができます。

val names = arrayOf("佐藤", "鈴木", "井上")
for (name in names) {
   println(name)
}

names.forEach {
   println(it)
}

  
  泛型函数 //fun <T> singletonList(item: T): List<T> {
  
  public / protected / private / internal

expect / actual

final / open / abstract / sealed / const

external

override

lateinit

vararg //Varargs allow you to pass any number of arguments by separating them with commas.

inner

enum / annotation / fun // 在 `fun interface` 中是修饰符

companion

inline/ value

infix // They must be member functions or extension functions. 方法继承  🔴
  infix fun Int.times(str: String) = str.repeat(this)        // 1
  println(2 times "Bye ")                                    // 2

data

 val text = """
    |Tell me and I forget.
    |Teach me and I remember.
    |Involve me and I learn.
    |(Benjamin Franklin)
    """.trimMargin()
    
    
    var number = 10
val hello = "こんにちは"

val result = number.run {
   this + 10
   hello
}

println(result)
println(number)
 ```
 
 
 ```
 val condition = true 
    println("${if (condition) 'a' else 'b'}") // [1] 
    val x = 11
    println("$x + 4 = ${x + 4}")
    
    Placing an expression inside ${} evaluates it. The return value is converted to a
String and inserted into the resulting String:
val s = "value" 
    println("s = \"$s\".") 
    println("""s = "$s".""")
    
    
    println(Long.MAX_VALUE)
    
    println(Int.MAX_VALUE)
    
     val r1 = IntRange(0, 10) 
    val r2 = IntRange(5, 7) 
    println(r1)
println(r2)

 print("abbcc".toSet()) //[a, b, c]
 
  val list = listOf(3, 3, 2, 1, 2) 
    
  print(list.distinct()) //[3, 2, 1]
  
   val m =
    mutableMapOf(5 to "five", 6 to "six")
    m += 4 to "four" //{5=five, 6=six, 4=four}
 
    ```
