https://groovy-lang.org/install.html

```groovy

brew install groovy

groovysh

Math.sqrt(16)


groovyConsole

for(i in 0..2) { print 'ho ' }

println 'Merry Groovy!'

0.upto(2) { print "$it "}

class Car {
  def miles = 0
  final year

  Car(theYear) { year = theYear }
}

Car car = new Car(2008)

println "Year: $car.year"
println "Miles: $car.miles"
println 'Setting miles'
car.miles = 25
println "Miles: $car.miles"

抜粋:
Groovy程序设计 (图灵程序设计丛书)
Venkat Subramaniam
この素材は著作権で保護されている可能性があります。

```
# “JVM上的动态类型语言说明，动态类型并不意味着弱类型。”

## “元编程
 （metaprogramming）意味着编写能够操作程序的程序，包括操作程序自身。像Groovy这样的动态语言通过元对象协议（MetaObject Protocol，MOP）提供了这种能力。利用Groovy的MOP，创建类、编写单元测试和引入模拟对象都很容易。
”
```groovy
“我们在Integer
 的MetaClass
 上添加的invokeMethod()
 ，拦截了5
 这个Integer
 实例上的方法调用。要拦截任何Object
 上的方法调用，而不是仅限于Integer
 ，应该将拦截器添加到Object
 的MetaClass
 上。”

“Groovy的MOP支持以下3种技术注入行为中的任何一种：

分类（category）

ExpandoMetaClass

Mixin”
```

抜粋:
Groovy程序设计 (图灵程序设计丛书)
Venkat Subramaniam
この素材は著作権で保護されている可能性があります。
