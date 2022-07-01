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
println "Miles: $car.miles

抜粋:
Groovy程序设计 (图灵程序设计丛书)
Venkat Subramaniam
この素材は著作権で保護されている可能性があります。

```
