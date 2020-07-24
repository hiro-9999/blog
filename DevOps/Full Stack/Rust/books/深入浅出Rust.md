# “Rust语言相对重大的设计，必须经过RFC（Request For Comments）”

https://github.com/rust-lang/rfcs

“所有大功能必须先写好设计文档，讲清楚设计的目标、实现方式、优缺点等，让整个社区参与讨论”
# “RFC→Nightly→Beta→Stable”

# Rust的标准库文档
https://doc.rust-lang.org/std/”

“我们可以使用rustup工具管理工具链。

```
// 更新rustup本身
$ rustup self update
// 卸载rust所有程序
$ rustup self uninstall
// 更新工具链
$ rustup update
我们还可以使用它轻松地在stable/beta/nightly渠道中切换，比如：

// 安装nightly版本的编译工具链
$ rustup install nightly
// 设置默认工具链是nightly版本
$ rustup default nightly

“1）使用rustc-h命令查看rustc的基本用法；

2）使用cargo -h命令查看cargo的基本用法；

3）使用rustc -C help命令查看rustc的一些跟代码生成相关的选项；

4）使用rustc -W help命令查看rustc的一些跟代码警告相关的选项；

5）使用rustc -Z help命令查看rustc的一些跟编译器内部实现相关的选项；

6）使用rustc –help-V命令查看rustc的更详细的选项说明。” 
```
# “Rust是静态强类型语言”
crate(木箱)/mod(use)/prelude前奏
“编译器会为用户写的每个crate自动插入一句话：

# use std::prelude::*;”

抜粋:: 范长春  “深入浅出Rust”。 Apple Books  
