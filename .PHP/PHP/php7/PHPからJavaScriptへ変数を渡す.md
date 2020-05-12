# PHPからJavaScriptへ変数を渡す
jQuery(function(){
	var blockArrstr = $('#blockArrstr').val();
});
・・・・・・・
<html>
	<input id="blockArrstr" type="hidden" value="<?php echo $blockArrstr; ?>">
</html>

https://katurakuno.xsrv.jp/JavaScript/PHPtoJS.html
