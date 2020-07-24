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

# ！ “它代表这是一个宏”

“fn main() {
    println!("{}", 1);            // 默认用法,打印Display
    println!("{:o}", 9);          // 八进制
    println!("{:x}", 255);        // 十六进制 小写
    println!("{:X}", 255);        // 十六进制 大写
    println!("{:p}", &0);         // 指针
    println!("{:b}", 15);         // 二进制
    println!("{:e}", 10000f32);   // 科学计数(小写)
    println!("{:E}", 10000f32);   // 科学计数(大写)

    println!("{:?}", "test");     // 打印Debug
    println!("{:#?}", ("test1", "test2"));        // 带换行和缩进的Debug打印

    println!("{a} {b} {b}", a = "x", b = "y");   // 命名参数
}
”

# “用static声明的变量的生命周期是整个程序，从启动到退出。static变量的生命周期永远是'static，它占用的内存空间也不会在执行过程中回收。这也是Rust中唯一的声明全局变量的方法。”

# “编译器就默认把x当成i32类型处理。”
// “更精细地自主控制整数溢出的行为，可以调用标准库中的checked_*、saturating_*和wrapping_*系列函数。
```
fn main() {
    let i = 127_i8;
    println!("checked {:?}", i.checked_add(i));
    println!("saturating {:?}", i.saturating_add(i));
    println!("wrapping {:?}", i.wrapping_add(i));
}
```


抜粋:: 范长春  “深入浅出Rust”。 Apple Books   
