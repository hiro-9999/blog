# cargo install racer
“Racer代码补全
Racer是Rust代码补全库”

# $ rustup component add rustfmt
info: component 'rustfmt' for target 'x86_64-apple-darwin' is up to date
# $ rustup component add clippy
info: component 'clippy' for target 'x86_64-apple-darwin' is up to date

# $ cargo fix

rust-lldb
debug Adds a code lens to quickly run or debug a single test for your Rust code.
## Rust Test Lens



“https：//github.com/ZhangHanDong/tao-of-rust-codes”

 # “Rust语言遵循了三条设计哲学：
· 内存安全
# · 零成本抽象
· 实用性”

“在编译期会被展开成和手写汇编代码相近的底层代码，所以不存在运行时因为解释这一层抽象而产生的性能开销。”
# “Rust中零成本抽象的基石就是泛型和trait”
“为了保证支持硬实时系统，Rust从C++那里借鉴了确定性析构、RAII和智能指针，用于自动化地、确定性地管理内存，从而避免了GC的引入，因而就不会有“世界暂停”的问题了。这几项虽然借鉴自C++，但是使用起来比C++更加简洁。”

# “· 对于失败的情况，可以使用断言工具。
# · 对于错误，Rust提供了基于返回值的分层错误处理方式，比如Option＜T＞可以用来处理可能存在空值的情况，而 Result＜T＞就专门用来处理可以被合理解决并需要传播的错误。
# · 对于异常，Rust将其看作无法被合理解决的问题，提供了线程恐慌机制，在发生异常的时候，线程可以安全地退出。”

# LLVM
“我们有必要了解一下Rust代码是如何执行的。Rust是跨平台语言，一次编译，到处运行，这得益于LLVM。Rust编译器是一个LLVM编译前端，它将代码编译为LLVM IR，然后经过LLVM编译为相应的平台目标。”
https://ja.wikipedia.org/wiki/LLVM

抜粋:: 张汉东  “Rust编程之道”。 Apple Books  
