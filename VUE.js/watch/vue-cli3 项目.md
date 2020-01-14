https://www.toutiao.com/i6739867316831388163/?group_id=6739867316831388163

## 从零搭建docker+jenkins+node.js自动化部署环境
https://www.toutiao.com/i6740132922214334979/?group_id=6740132922214334979

路由自动引入

通过node来生成页面组件

通过上面的逻辑代码我们可以通过node来生成组件了，那么也可以举一反三来生成页面组件。只需稍微修改一下生成组件代码的逻辑。 在scripts目录下新建一个generateView.js文件

npm run build后能看到生成 .gz 文件就OK了。如果你的服务器使用nginx的话，nginx也需要配置开启GZIP、下面会讲到如何在nginx中开启GZIP
