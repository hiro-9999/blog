# ONLINE
https://play.kotlinlang.org/ 

# doc 🔴
https://kotlinlang.org/docs/basic-syntax.html#variables

# Kotlin 语法的练习 🔴
https://play.kotlinlang.org/byExample/overview

https://play.kotlinlang.org/koans/overview
 
 # Atomic Kotlin (Bruce Eckel, Svetlana Isakova) (z-lib.org)
 优先使用不可变（而不是可变）数据。初始化后未修改的局部变量与属性，总是将其声明为  val 
 
 ### tailrec ???
 ```
  by
 Sealed
  .map(::travel)
  tailrec
  suspend ?

  
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
  
  infix //如果一个方法会改动其接收者，那么不要声明为中缀（ infix ）形式
    operator
  
  let/also  -> it
  with, run/apply -> this
  
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
