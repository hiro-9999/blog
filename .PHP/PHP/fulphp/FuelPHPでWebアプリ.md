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
