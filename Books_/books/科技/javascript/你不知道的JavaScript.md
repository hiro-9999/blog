>研究我所使用的工具

你不知道的JavaScript（上卷).pdf

分词(tokenizing)和词法分析(Lexing)

解析/语法分析(Parsing)

“抽象语法树”(Abstract Syntax Tree，AST)

将 AST 转换为可执行代码的过程称被称为代码生成。

>任何 JavaScript 代码片段在执行前都要进行编译(通常就在执行前)

 # 引擎
从头到尾负责整个 JavaScript 程序的编译及执行过程。

## • 编译器 
引擎的好朋友之一，负责语法分析及代码生成等脏活累活(详见前一节的内容)。

## • 作用域 
引擎的另一位好朋友，负责收集并维护由所有声明的标识符(变量)组成的一系列查 询，并实施一套非常严格的规则，确定当前执行的代码对这些标识符的访问权限。

### 一个由编译器在编译时处理，另一个则由引擎在运行时处理。

总结:变量的赋值操作会执行两个动作，首先编译器会在当前作用域中声明一个变量(如 果之前没有声明过)，然后在运行时引擎会在作用域中查找该变量，如果能够找到就会对 它赋值。
```
编译器-> 
        作用域 -> 变量
引擎->
```
## LHS 和 RHS 的含义是“赋值操作的左侧或右侧”
在当前作用 域中无法找到某个变量时，引擎就会在外层嵌套的作用域中继续查找，直到找到该变量， 或抵达最外层的作用域(也就是全局作用域)为止。

如果 RHS 查询在所有嵌套的作用域中遍寻不到所需的变量，引擎就会抛出 ReferenceError 异常。值得注意的是，ReferenceError 是非常重要的异常类型。
相较之下，当引擎执行 LHS 查询时，如果在顶层(全局作用域)中也无法找到目标变量，

全局作用域中就会创建一个具有该名称的变量，并将其返还给引擎，前提是程序运行在非 “严格模式”下。

# 全局对象属性的引 用来对其进行访问。
window.a

```
function foo(str, a) { 
eval( str ); // 欺骗! 前面的代码是以动态形式插 入进来，并对词法作用域的环境进行修改的。eval(..) 都可以在运行期修改书写期的词法作用域。
console.log( a, b );
}
var b = 2;
foo( "var b = 3;", 1 ); // 1, 3
```
## "use strict";
在严格模式的程序中，eval(..) 在运行时有其自己的词法作用域，意味着其 中的声明无法修改所在的作用域。

# with 声明实际上是根据你传递给它的对象凭空创建了一个全新的词法作用域。

### 最小特权原则
>区分函数声明和表达式
(function foo(){ // <-- 添加这一行 var a = 3; console.log( a ); // 3 })(); // <-- 以及这一行

(function foo(){ .. })作为函数表达式意味着foo只能在..所代表的位置中 被访问，外部作用域则不行。

# 回调参数了，
比如:
setTimeout( function() { console.log("I waited 1 second!");
}, 1000 );
这叫作匿名函数表达式，因为 function().. 没有名称标识符。

函 数表达式指定一个函数名可以有效解决以上问题。始终给函数表达式命名是一个最佳实践:
setTimeout( function timeoutHandler() { // <-- 快看，我有名字了! console.log( "I waited 1 second!" );
}, 1000 );

# IIFE，代表立即执行函数表达式 (Immediately Invoked Function Expression)
var a = 2;
(function foo() { var a = 3;
console.log( a ); // 3 })();
console.log( a ); // 2
由于函数被包含在一对 ( ) 括号内部，因此成为了一个表达式，通过在末尾加上另外一个 ( ) 可以立即执行这个函数，比如 (function foo(){ .. })()。第一个 ( ) 将函数变成表 达式，第二个 ( ) 执行了这个函数。
这种模式很常见，几年前社区给它规定了一个术语:IIFE，代表立即执行函数表达式 (Immediately Invoked Function Expression);

(function(){ .. }())

var a = 2;
(function IIFE( global ) {
var a = 3;
console.log( a ); // 3 console.log( global.a ); // 2
})( window ); console.log( a ); // 2
我们将 window 对象的引用传递进去，但将参数命名为 global


# 闭包
```
function foo() { var a = 2;
function bar() { console.log( a );
}
return bar; }
var baz = foo();
baz(); // 2 —— 朋友，这就是闭包的效果。
```
bar() 依然持有对该作用域的引用，而这个引用就叫作闭包。

```
for (var i=1; i<=5; i++) {
 (function(j) {
  setTimeout( function timer() { console.log( j );
             }, j*1000 );
         })( i );
}

for (let i=1; i<=5; i++) { setTimeout( function timer() {
console.log( i ); }, i*1000 );
}
很酷是吧?块作用域和闭包联手便可天下无敌。
```
