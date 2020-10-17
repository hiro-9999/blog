https://developer.mozilla.org/ja/docs/Web/API/Element/getAttribute

https://lab.syncer.jp/Web/API_Interface/Reference/IDL/Document/getElementsByClassName/
```
var content = document.getElementsByClassName('GoTo__StyledInputText-hlcTgx fXHgTR input');
max = content[0].getAttribute('max')
```

 const div2 = document.getElementById("div2");
 const class2 = div2.getElementsByClassName("p2");
 
 
# JavaScript getElementById ID属性で取得/設定する
https://itsakura.com/js-getattribute
```
document.getElementById("text1").getAttribute("type");　→　textを取得 document.getElementById("text1").getAttribute("value");　→　赤を取得 document.getElementById("text1").getAttribute("maxlength");　→　5を取得
setAttributeメソッドの1つめの引数に属性を指定し、2つめの引数に属性値を指定すると、属性値を設定できます。

document.getElementById("text1").setAttribute("type","属性値"); document.getElementById("text1").setAttribute("value","属性値"); document.getElementById("text1").setAttribute("maxlength","属性値");

```
