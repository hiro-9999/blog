# c# dov
https://docs.microsoft.com/ja-jp/dotnet/csharp/language-reference/operators/operator-overloading

### yield return
https://csharp.keicode.com/basic/yield.php

https://qiita.com/mrngsht/items/399a67e42c91978e38d1
### yield または IEnumerable を返す反復子の IEnumerator 型は object です
https://docs.microsoft.com/ja-jp/dotnet/csharp/language-reference/keywords/yield

C#では列挙子と呼ばれ、IEnumeratorによってあらわされます。イテレーターを使用することでコレクションクラスに対し要素を列挙することができるようになります。
C#のイテレーターは簡単にいうと、foreach命令で処理できるコレクションを生成するためのメソッドということになります。

enumerateは「列挙する」という意味で、IEnumerator/IEnumerable型は「コレクションに対する反復処理を可能にする」ための型です。Tには、yield　return命令で返す値の型を指定します。

```c#
戻り値の型は、次のいずれかの型である必要があります。
IAsyncEnumerable<T>
IEnumerable<T>
IEnumerable
IEnumerator<T>
IEnumerator

using System;
using System.Collections.Generic;

class Program
{
  static void Main(string[] args)
  {
    var states = new List();
    states.Add("California");
    states.Add("Hawaii");
    states.Add("Connecticut");
    states.Add("Texas");
    var i = FilterState(states, "C");
    foreach (var m in i)
    {
      Console.WriteLine(m);
    }
  }

  static IEnumerable FilterState(
    List states,
    string filter)
  {
    foreach (var s in states)
    {
      if (s.StartsWith(filter))
      {
        yield return s;
      }
    }
  }
}
```
yield return命令はメソッドをそのまま終了させることができません。
途中でメソッドを終了させたい場合はyield break命令を使用します。
```c#
using System;
using System.Collections;
using System.Collections.Generic;
 
class Test
{
    // イテレーターを定義
    public static IEnumerable GetIterator()
    {
        for(int a = 0; true; a++)
        {
            if(a == 2) yield break;
            yield return a;
        }
    }
}
    static void Main()
    {
        foreach(object b in GetIterator())
        {
            Console.WriteLine(b);
        }
        Console.ReadKey();
    }
}
```


### sample c# is easy
C Programming for Absolute Beginners Learn to Think Like a Programmer and Start Writing Code by Radek Vystavel [Vystavěl, Radek] (z-lib.org).pdf
## Installing Visual Studio
https://visualstudio.microsoft.com/ja/

“.NET desktop development” and click the Install button
