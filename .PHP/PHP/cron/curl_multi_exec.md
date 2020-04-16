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
