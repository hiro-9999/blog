# Haskell
Haskell Quick Syntax Reference A Pocket Guide to the Language, APIs, and Library by Stefania Loredana Nita, Marius Mihailescu (z-lib.org).pdf


Haskell is a functional programming language, 
named after mathematician Haskell Brooks Curry, who made important contributions to mathematical logic that were used as the basis for functional programming. The first version, Haskell 1.0, was released in 1990, and the latest version is Haskell 2010, released in July 2010.

# code
https://www.apress.com/us/book/9781484245064

```
函数式编程一瞥
你可能想，既然使用循环可轻松地完成任务，为何还要使用递归方式呢?看看函数式编程 你就明白了!诸如Haskell等函数式编程语言没有循环，因此你只能使用递归来编写这样的函数。 如果你对递归有深入的认识，函数式编程语言学习起来将更容易。例如，使用Haskell时，你可 能这样编写函数sum。
sum [] = 0
sum (x:xs) = x + (sum xs)
基线条件 递归条件
  注意，这就像是你有函数的两个定义。符合基线条件时运行第一个定义，符合递归条件时 运行第二个定义。也可以使用Haskell语言中的if语句来编写这个函数。
    sum arr = if arr == []
                then 0
                else (head arr) + (sum (tail arr))
但前一个版本更容易理解。Haskell大量使用了递归，因此它提供了各种方便实现递归的语 法。如果你喜欢递归或想学习一门新语言，可以研究一下Haskell。
```
