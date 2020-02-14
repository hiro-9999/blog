## 全ての子孫要素から取得する.find()
https://uxmilk.jp/10873




https://www.willstyle.co.jp/blog/1025/
ID
// jQuery
let hoge = $('#hoge'); // jQuery Object
// Native
let hoge = document.getElementById('hoge'); // element
TagやClassの取得はDocument内に複数存在するので取得はgetElement[s]ByTagName、getElement[s]ByClassNameとなり、取得した値はHTMLCollection（配列）になります。
