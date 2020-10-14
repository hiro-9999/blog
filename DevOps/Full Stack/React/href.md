"top.location.href"是最外层的页面跳转

"window.location.href"、"location.href"是本页面跳转

"parent.location.href"是上一层页面跳转.

window.location是window对象的属性，而window.open是window对象的方法 
  window.location是你对当前浏览器窗口的URL地址对象的参考！   
  window.open是用来打开一个新窗口的函数！ 
  
  https://www.cnblogs.com/Qian123/p/5345298.html
  
  
  
  # react页面之间的跳转及传值
  ```
  React 页面跳转+传递参数+取参数（简单直接）
1传参
//这里可以onClick，实现点击跳转传参
this.props.history.push("/my/index", {
dotData: record //需要传递的参数

});

2.取参，
/my/index页面取参数

const messages = this.props.location.state.dotData
```
```
var data = {id:3,name:sam,age:36};
var path = {
  pathname:'/user',
  query:data,
}

1.<Link to={path}>用户</Link>
1
2.hashHistory.push(path);

获取数据：
var data = this.props.location.query;
var {id,name,age} = data;


<Route path='/user' component={UserPage}></Route>
1
使用：

var data = {id:3,name:sam,age:36};
var path = {
  pathname:'/user',
  state:data,
}

1.<Link to={path}>用户</Link>
1
2.hashHistory.push(path);
1
获取数据：

var data = this.props.location.state;
var {id,name,age} = data;
```
