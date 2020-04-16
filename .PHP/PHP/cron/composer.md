composer 是 PHP5.3以上 的一个依赖管理工具。它允许你声明项目所依赖的代码库，它会在你的项目中为你安装他们。Composer 不是一个包管理器。是的，它涉及 "packages" 和 "libraries"，但它在每个项目的基础上进行管理，在你项目的某个目录中（例如 vendor）进行安装。默认情况下它不会在全局安装任何东西。

https://www.toutiao.com/a6624344472354292232/

# 安装 Composer，你只需要下载 composer.phar 可执行文件。

curl -sS https://getcomposer.org/installer | php

# 要检查 Composer 是否正常工作，只需要通过 php 来执行 PHAR：

php composer.phar

# 获取定义的依赖到你的本地项目，只需要调用 composer.phar 运行 install 命令。

php composer.phar install

php composer.phar update
