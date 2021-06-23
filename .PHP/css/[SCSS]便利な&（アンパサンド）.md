# [SCSS]便利な&（アンパサンド）

https://qiita.com/noqua/items/adc24c28c13e9b74d3ad

# シンプルに.classの直後に&後の文字列がくっつきます。

.class の中でも.parent内の.classにだけ適用したい時に便利です。

@at-root を先頭につけると、階層を無視してコンパイルされます。

# SCSSの基本的な書き方
https://qiita.com/nchhujimiyama/items/8a6aad5abead39d1352a
```
/* 関数宣言の仕方 */
@mixin 関数名(引数１, 引数２, ...) {
  関数の中身
}

/* 関数の呼び出し方 */
@include 関数名(引数１, 引数２, ...);
```
