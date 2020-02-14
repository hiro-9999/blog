## 全ての子孫要素から取得する.find()
https://uxmilk.jp/10873

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
