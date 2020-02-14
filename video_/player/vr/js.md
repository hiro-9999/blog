## jQueryでの要素追加メソッド
.append('<li>追加されました</li>');

## jQueryで子要素を取得する
https://www.flatflag.nir87.com/children-996
https://uxmilk.jp/10873
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

```
HTML

<div id="parent">
  <p>テキスト1</p>
  <div id="child"><img class="child-image" src="sample.png" /></div>
</div>
1
2
3
4
<div id="parent">
  <p>テキスト1</p>
  <div id="child"><img class="child-image" src="sample.png" /></div>
</div>
jQuery

$("#parent").find('.child-image');
1
$("#parent").find('.child-image');
```


https://www.willstyle.co.jp/blog/1025/
ID
// jQuery
let hoge = $('#hoge'); // jQuery Object
// Native
let hoge = document.getElementById('hoge'); // element
TagやClassの取得はDocument内に複数存在するので取得はgetElement[s]ByTagName、getElement[s]ByClassNameとなり、取得した値はHTMLCollection（配列）になります。
