<?php
$bookName="PHP开发";
?>
<html>
<head>
<title><%=$bookName%> 图书简介</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h3>词条名称：<%=$bookName%></h3>
<script language="php">
  echo "<img src='php.png'>";
  echo "<br/><br/>";
</script>
简介：
<%
  echo $bookName."是一本非常畅销的PHP图书，非常适合PHP初学者。<br/>";
  echo "本书编写于：".date('Y-m-d',time());
%>
<?php
echo "<hr/>";
echo "提示：本页面主要用于演示PHP中4种语法标记的使用，需要在PHP配置文件中将asp_tags和short_open_tag选项的值设置为on。";
?>
</body>
</html>
