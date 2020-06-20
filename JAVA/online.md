# online java
https://www.learnjavaonline.org/en/Abstract_Classes

# [Abstract_Classes](https://www.toutiao.com/a6364714108365455617/)

一.抽象类不能被实例化
因为抽象类表示抽象一个抽象的概念，给他实例化没有太大的实际意义。

再者抽象类中包含抽象方法，类实例化后肯定能调用类中的普通方法，而抽象类中包含的抽象方法没有方法体，无法被调用

因此抽象类不能被实例化
二.抽象类与普通类比较
1.抽象类继承的子类里面会有明确的方法重写要求，而普通类没有

2.抽象类纸币普通类多了一些抽象方法的定义，其余的组成部分与普通类完全一样

3.普通类可以直接被实例化，但是抽象类的对象必须经过上转型后才可以得到实例化对象

要求：

虽然一个子类可以继承任意一个普通类，可是从开发的实际要求来讲，普通类不要去继承一个普通类而是去继承一个抽象类

三.抽象类的相关限制
1.抽象类里面会存在一些属性，所以会存在构造方法

目的：给属性赋值

实例化时在低昂用父类构造器，在调用子类构造

# 2.抽象类能使用final定义：因为抽象类必须有子类，而final修饰的类不能被继承

# 3.外部抽象类不允许使用static声明，而内部的抽象类允许使用static声明，
使用static声明的内部抽象类就相当于是一个外部抽象类，继承的时候使用“外部类.内部类”的形式

# 4.任何情况下，如果要执行类中的static方法时，都可以在没有对象的时候直接调用，对于我们的抽象类也一样

5.有些时候，由于抽象类只需要一个特定的系统子类操作，所以可以忽略掉外部子类
```java
范例：
abstract class A{
  public abstract void fun();
  private static class B extends A{ //内部抽象子类
    public void fun(){ //重写父类抽象方法
      System.out.println("哈哈！！！");
    }
  }
  //这个方法不收实例化对象的控制
  public static A getInstance(){
    return new B();
  }
}
public class TestDemo{
  public static void main(String args[]){
    //此时取得抽象类对象的时候完全不需要知道我们B类这个子类的存在
    A a = A.getInstance();
    a.fun();
  }
}
这样的设计在系统库之中会比较常见，目的：为用户隐藏不需要知道的子类

abstract class abstractClass { 
    abstract void abstractMethod(); 
    static void concreteMethod() { // concrete methods are still allowed in abstract classes 
        System.out.println("This is a concrete method."); 
    } 
    private static class B extends abstractClass{ //内部抽象子类
    public void abstractMethod(){ //重写父类抽象方法
    System.out.println("哈哈！！！");
    }
    }
    //这个方法不收实例化对象的控制
    public static abstractClass getInstance(){
    return new B();
    }
    
}

class B  { 
    void abstractMethod() { 
        System.out.println("B's implementation of abstractMethod."); 
    } 
}

class C extends abstractClass { 
    void abstractMethod() { 
        System.out.println("C's implementation of abstractMethod."); 
    } 
    
}

public class Main { 
    public static void main(String args[]) { 
        B b = new B(); 
        b.abstractMethod(); 
        
        //abstractClass d = new abstractClass(); //抽象类不能被实例化
        abstractClass d =abstractClass.getInstance(); //这个方法不收实例化对象的控制
        d.abstractMethod();
        
        C c = new C(); 
        c.abstractMethod(); 
        c.concreteMethod();
    } 
}
```
# 接口interface的作用
接口是对于行为的抽象，在小项目、小设计中接口带来的好处可能不会特别明显，但是项目一旦庞大起来，接口的优势就很明显会体现出来了：

## 1、对于一个庞大的项目，从设计的角度来说，接口的存在可以帮助理清楚业务，利用接口不仅可以告诉开发人员需要实现哪些业务，而且也将命名规范限制住了，从而防止开发人员随便命名导致项目组别的开发者无法看明白：
## 都按照指定的接口名、接口请求、接口响应来，相当于是定了一个规范。

# 类可以实现多个接口，但却只能继承一个类
# 接口属于一种完全的抽象

# 1、接口和抽象类的概念是不一样的。接口是对动作的抽象，表示的是这个对象能做什么
比如人可以吃东西、狗也可以吃东西，只要有相同的行为；

# 抽象类是对根源的抽象，表示的是这个对象是什么，
比如男人是人、女人也是人

# 接口中只能定义抽象方法，抽象类中可以有普通方法

# 接口中只能有静态的不能被改变的数据成员，抽象类可以有普通的数据成员

## abstract class在Java语言中表示一种继承关系，而继承关系在本质上是"is a"的关系。
[接口和抽象类](https://www.toutiao.com/a6655225820098855428/)
