## Unityで学ぶC#入門
https://xr-hub.com/archives/15201

# c# doc
https://docs.microsoft.com/ja-jp/dotnet/csharp/language-reference/operators/operator-overloading

## C# のデリゲート
delegate 戻り値の型 デリゲート名 (関数が引き受ける仮引数);

https://qiita.com/segur/items/d6e790acc269085b8d75
var printA = new Printer(Debug.Log);
            // 実行すると、「Hello World A」とコンソールに表示されます。
            printA("Hello World A");


https://qiita.com/ysn/items/71fe3f332ea9a3114d36

## ラムダ式のパラメータリストの型指定は省略可能ですが、記載することもできます。また、return を明示的に書くこともできます。
 Func<int, int, int> a = (int x, int y) =>
    {
      return x + y;
    };
    
    
  属性	渡される値
CallerMemberName	呼び出し元のメソッド名
CallerFilePath	呼び出し元のファイル名
CallerLineNumber	呼び出し元の行番号


 ## LINQ のクエリ演算子
 ```
 using static System.Console;
using System.Linq;

partial class TestApp
{
  static void Main(string[] args)
  {
    var i = 0;
    var fruits = new string[] { "Apple", "Banana", "Orange" };
    var a = from elm in fruits
            select new
            {
              id = ++i,
              fruit = elm
            };
    foreach (var s in a)
    {
      WriteLine($"{s}");
    }
  }
}
 ```

### out
```
class Program
{
  static void Main(string[] args)
  {
   // string n, t;
   // int a;
    GetEmployee(out string n, out a, out int t);
    Console.WriteLine($"RESULT: {n}, {a}, {t}"); //C# 7.0 では、上記のように事前に宣言する必要はなくなりました。 out パラメータに変数を渡すと同時に、変数を宣言することが可能になりました。
   // GetEmployee(out string n, out int a, out _);
  }

  public static void GetEmployee(
      out string name,
      out int age,
      out string title)
  {
    name = "Hanako Yamada";
    age = 30;
    title = "Manager";
  }
}
```

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
