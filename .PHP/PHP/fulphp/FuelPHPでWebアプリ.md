https://www.qript.co.jp/blog/technique/1467/
```js
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(document).ready(function()
    {
        $("#fileuploader2").uploadFile({
            url:"<?php echo Uri::create('uploadfile.json');?>",
            fileName:"myfile",
            onSuccess:function(files,data,xhr)
            {
                $('#thumbnail').html('<img src="/upload/'+data.saved_as+'" />');
            }
        });
    });
    </script>
```

http://php.o0o0.jp/article/jquery-location
```html
<input type="button" id="location" value="移動">
$(function () {
  // ページ遷移
  $('#location').click(function() {
    window.location.href = '/';
    // target="_top"
    // top.location.href = '/';
    // target="_blank"
    // window.open('/', '_blank');
  });

  // 3秒後にページ遷移
  $('#jump').click(function() {
    setTimeout(function(){
      window.location.href = '/';
    }, 3000);
  });

  // refresh埋め込み
  $('#refresh').click(function() {
    $('head').append('<meta http-equiv="refresh" content="3; URL=/">');
  });

  // Submit
  $('#send').click(function() {
    // action、methodの指定
    // $('#values').attr({
    //   'action':'send.php',
    //   'method':'get'
    // });
    $('#values').submit();
  });
});

viewに直接書いてしまっても問題ありませんが、基本的にはAssetクラスを通して出力します。

(例)
public/assets/jsにhoge.jsを配置

以下view

// ローカルファイル
echo Asset::js('hoge.js');

// <script type="text/javascript" src="http://example.com/fuel/public/js/hoge.js?123456789 (タイムスタンプ)"></script>

// CDN配信でも
echo Asset::js('//cdn.jsdelivr.net/jquery/2.2.4/jquery.min.js');
// <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/2.2.4/jquery.min.js"></script>

全体から利用するようなライブラリはこのような方法で、細かい出し分けやページ固有の
JavaScriptを読み込ませる必要がある場合はAsset::renderを使います（リンク参照） 
```


http://fuelphp.jp/docs/1.7/classes/html.html

```php

Uri クラス
http://fuelphp.jp/docs/1.7/classes/uri.html
echo Uri::base();
// http://localhost/index.php

echo Uri::base(false);
// http://localhost/

https://qiita.com/take10_29/items/e4044320361f46c4f3d4

//返り値 <a href="http://www.domain.com/example">Example</a>
echo Html::anchor('example', 'Example');

//返り値 <a href="http://www.otherdomain.com/example">Example</a>
echo Html::anchor('http://www.otherdomain.com/example', 'Example');

//返り値 <a href="http://www.domain.com/example" id="a1" class="sample" style="color:red;">Example</a>
echo Html::anchor('example', 'Example', array('id' => 'a1', 'class' => 'sample', 'style' => 'color:red'));

//返り値 <a href="https://www.domain.com/example" id="a1" class="sample" style="color:red;">Example</a>
echo Html::anchor('example', 'Example', array('id' => 'a1', 'class' => 'sample', 'style' => 'color:red'), true);
```


https://www.life-trace.net/entry/2019/10/25/015641
```js
//jQueryで記述しています
$(function(){
  //削除ボタン押下処理
  $('#btn-delete').on('click', function(){
    //確認メッセージ
    if(confirm('このデータを削除しますか？'))
    {
      //(※2)「OK」なら削除処理のコントローラへ
      location.href = $(this).attr('next_uri');
    }
  });
})

<?php

class Controller_Delete extends Controller
{
  public function action_index($id = null)
  {
〜省略〜
      Model_Product::delete_product($id);
      
      Response::redirect('list');
〜省略〜
  }
}

<button>タグ

<button type="button" onclick="location.href='[遷移先]">
Copy

<input>タグ

<intput type="button" onclick="location.href='[遷移先]">
Copy

ハマったのは<button>にtypeを設定していない時にsubmitボタンとして機能してしまい、<form>に設定しているactionが実行される、フォームがサブミットされ、期待した遷移が起こらないことがありました。

type="button"とlocation.hrefが今回のハートでした
```
