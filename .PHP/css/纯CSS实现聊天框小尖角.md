# 纯CSS实现聊天框小尖角
https://www.jb51.net/css/150389.html

```
<div class="send">
<div class="arrow"></div>
</div>
<style type="text/css">
body {
background:#4D4948;
}

.send {
position:relative;
width:150px;
height:35px;
background:#F8C301;
border-radius:5px; /* 圆角 */
margin:30px auto 0;
}

.send .arrow {
position:absolute;
top:5px;
right:-16px; /* 圆角的位置需要细心调试哦 */
width:0;
height:0;
font-size:0;
border:solid 8px;
border-color:#4D4948 #4D4948 #4D4948 #F8C301;
}
</style>
```
