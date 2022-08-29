# ONLINE
https://play.kotlinlang.org/ 
 
 # Atomic Kotlin (Bruce Eckel, Svetlana Isakova) (z-lib.org)
 
 ### tailrec ???
 ```
 open class
 abstract class
 by
 Sealed
  .map(::travel)
  
  sealed vs. abstract
  inner class
  Companion Objects
  by lazy/lazyInit
  infix
  
  let/also  -> it
  with, run/apply -> this
  
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
