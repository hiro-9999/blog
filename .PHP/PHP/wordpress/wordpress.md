# wordpress
https://baike.baidu.com/item/WordPress/450615?fr=aladdin

WordPress 不仅仅是一个博客程序，也是一款CMS，很多非博客网站也是用WordPress搭建的

https://zhuanlan.zhihu.com/p/91746059

# wordpress工作原理
![2](https://github.com/hiro-9999/blog/blob/master/.PHP/PHP/wordpress/2.png)
```sql
第一步：加载index.php
该文件有效源码如下：
define('WP_USE_THEMES', true);
# 定义是否加载主题文件，true为加载；
require('./wp-blog-header.php');
# 加载wp-blog-header.php文件，该文件用于启动WordPress环境及模板；

第二部： 加载wp-blog-header.php文件。
if ( !isset($wp_did_header) ) {
     $wp_did_header = true; 
     require_once( dirname(__FILE__) . '/wp-load.php' ); 
     wp(); 
     require_once( ABSPATH . WPINC . '/template-loader.php' ); 
}
解析1：对$wp_did_header进行赋值，这样如果代码块已经执行过，判断就会失败，代码块就不会再执行。这种做法可以确保wp-blog-header.php文件只执行一次（重复执行的话会出现函数名冲突、变量重置等，WordPress会精神分裂的！）；
解析2：加载WP根目录下wp-load.php文件，执行 初始化工作，如初始化常量、环境、加载类库和核心代码等完成WordPress环境启动工作，如加载wp-includes目录下functions.php（函数库）、class-wp.php（类库）、plugin.php（插件）、pomo目录（语言包）、query.php（数据请求）、theme.php（加载主题文件）、post-template.php（文章模板）、comment.php（评论模板）、rewrite.php（URL重写）等等。
解析3：执行wp()函数，执行 内容处理工作，如根据用户的请求调用相关函数获取和处理数据，为前端展示准备数据；
解析4：加载根目录绝对路径下wp-includes目录中template-loader.php文件，执行 主题应用 工作，如根据用户的请求加载主题模板。
WordPress之所以能将用户请求的页面生成出来，都是最后这三行核心代码起的作用。wp-load.php会完成页面生成所需要的所有环境、变量、API等，相当于做了好准备工作；wp()函数根据用户请求的URL从数据库中取出相应的数据内容备用；template-loader.php把已经准备好的内容用主题所设定的样式展现方式给拼接出来。这三项工作完成，就可以将用户请求的页面展现出来了。我们姑且将这三项工作也认定为三个大步骤，以下将重点分析。

第三步：加载wp-load.php文件（初始化）
该文件初始化常量（如：定义绝对路径、设定功能文件及内容文件路径等）并加载wp-config.php文件，
       加载wp-config.php文件：该文件主要用于配置MySQL数据库通信信息、设定数据库表名前缀、设定密钥、设置语言及文件绝对路径等，部分核心代码如下（为省事就直接在代码后加#然后解释含义了）
       wp-config中还加载了一个重要的文件：wp-settings.php。
wp-settings.php: 主要用于创建和定义常见变量、函数和类的库来为WordPress运行做准备，也就是说WordPress运行过程中使用的大多数变量、函数和类等核心代码都是在这个文件中定义的。这个文件相当于一个总控制器，很多常量定义、函数定义等都是在其他文件中完成，而该文件的作用就是执行那些文件或执行在那些文件中已经定义好的函数。

第四步： 执行wp()函数（内容处理）
在这一阶段，调用wp()函数对数据库内容进行查询，并将查询的内容赋值给一些全局变量，方便在模板中使用模板标签获取相应的数据并展示在前端。

第五步：加载template-loader.php文件（主题应用）
```
![1](https://github.com/hiro-9999/blog/blob/master/.PHP/PHP/wordpress/1.png)
