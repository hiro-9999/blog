# PHP并行请求接口
```
function multiRequest($url, $data, $timeout = 30) {
	$chArr = [];
	//创建多个cURL资源
	foreach ($data as $k => $value) {
		$i = $k;
		$chArr[$i] = curl_init();
		curl_setopt($chArr[$i], CURLOPT_URL, $url);
		//数组转为json串
		$value = json_encode($value);
		//post请求
		curl_setopt($chArr[$i], CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($chArr[$i], CURLOPT_POSTFIELDS, $value);
		curl_setopt($chArr[$i], CURLOPT_RETURNTRANSFER, 1);
		//只需要设置一个秒的数量就可以
		curl_setopt($chArr[$i], CURLOPT_TIMEOUT, $timeout);
		//设置请求头
		curl_setopt($chArr[$i], CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($value)));
	}
	//创建批处理cURL句柄
	$mh = curl_multi_init(); 
	//增加句柄
	foreach ($chArr as $k => $ch) {
		curl_multi_add_handle($mh, $ch); 
	}
	$active = null;
	do {
		while (($mrc = curl_multi_exec($mh, $active)) == CURLM_CALL_MULTI_PERFORM);
		if ($mrc != CURLM_OK) {
			break;
		}
		while ($done = curl_multi_info_read($mh)) {
			$info = curl_getinfo($done['handle']);
			$error = curl_error($done['handle']);
			$tmp = curl_multi_getcontent($done['handle']);
			$result[] = $tmp;
			curl_multi_remove_handle($mh, $done['handle']);
			curl_close($done['handle']);
		}
		if ($active > 0) {
			curl_multi_select($mh);
		}
	} while ($active);
	return $result;
}
```



# curl_multi_exec
https://www.toutiao.com/a6691131334137479693/

```
<?php
header("Content-type: text/html; charset=gbk");
$urls=array('http://www.baidu.com','http://www.qq.com/');
$ch=array();
//批处理句柄
$mh=curl_multi_init();
//打开多个curl句柄，并指派给一个批处理句柄
$ch[0]=curl_init($urls[0]);
$ch[1]=curl_init($urls[1]);
for($i=0;$i<2;$i++)
{
curl_setopt($ch[$i],CURLOPT_RETURNTRANSFER,1);
curl_multi_add_handle($mh,$ch[$i]);
}
$running = NULL;
do{
 usleep(10000);
 curl_multi_exec($mh,$running);//实现批处理，可以看做curl多线程，实际是异步范畴
}while($running>0);
$res=array();
for($j=0;$j<2;$j++)
{
 $res[$j]=curl_multi_getcontent($ch[$j]);
}
//关闭句柄
for($k=0;$k<2;$k++)
{
 curl_multi_remove_handle($mh,$ch[$k]);
}
curl_multi_close($mh);
print_r($res);
?>
```
# curl
https://www.toutiao.com/a6726808916807647752/
