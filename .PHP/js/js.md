### attr(‘class’, <value>) で class 属性を設定しましょう。
https://techacademy.jp/magazine/26775

```js
$('div').attr('class', 'my_container');

// ↑ を実行すると <div class="my_container"> に変更される

続いて id 属性を title から my_title に変更してみましょう。

変更する場合は attr(<target>, <value>) のように、第2引数に設定したい値を入力します。

 

$('h1').attr('id', 'my_title');

// ↑ を実行すると <h1 id="my_title"> に変更される

attr({

  id: 'my_id',

  class: 'my_class',

  name: 'my_name',

  ...

});
```

### JSON.stringify
https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/JSON/stringify

```js
console.log(JSON.stringify({ x: 5, y: 6 }));
// expected output: "{"x":5,"y":6}"
```


