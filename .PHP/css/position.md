# 実際にコードを書いて指定してみましょう。要素をposition: relativeにしたうえでtopとleftをそれぞれに10pxに指定してみます。分かりやすくするために指定なしの要素も作ることにします。

https://saruwakakun.com/html-css/basic/relative-absolute-fixed

# CSSの最新規格であるCSS3では疑似要素はコロン2つを書く決まりとなっています。以前のCSS2ではコロンの数が1つでした。
::beforeを使うと要素の直前に要素もどきが挿入されます。一方で::afterを使うと要素の直後に要素もどきが挿入されます。
https://saruwakakun.com/html-css/basic/before-after

# nth-child
https://techacademy.jp/magazine/8651
```
p:nth-child(5)　･･･　5番目の要素に適用
p:nth-child(odd)　･･･　奇数番目の要素に適用
p:nth-child(2n+1)　･･･　奇数番目の要素に適用
p:nth-child(even)　･･･　偶数番目の要素に適用
p:nth-child(2n)　･･･　偶数番目の要素に適用
p:nth-child(3n)　･･･　3,6,9,12…番目の要素に適用
p:nth-child(3n+1)　･･･　1,4,7,10…番目の要素に適用
```
