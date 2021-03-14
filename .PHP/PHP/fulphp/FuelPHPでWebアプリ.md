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
```
