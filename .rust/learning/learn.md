# Beginning Rust, Second Edition
https://github.com/apress/beginning-rust-2e

## Rust编程：入门、实战与进阶 (朱春雷) (z-lib.org) 🟡
https://github.com/inrust/Rust-Programming-in-Action
```
% rustc --version
rustc 1.63.0 (4b91a6ea7 2022-08-08)

rustup update

$ cargo help <command> 🟡
 % cargo -V
cargo 1.63.0 (fd9c4297c 2022-07-01)

$ cargo new project_name
cargo new project_name --lib

编译项目，在终端运行以下命令:
$ cargo build

$ cargo run

最终准备发布时，可以使用cargo build -- release来优化编译项目，这时会在target/release目录下生成一个在 生产环境中使用的可执行文件。
```

https://www.rust-lang.org

### Rust 開発環境の構築
次に、2つのVS Code拡張をインストールします。
https://plugins.jetbrains.com/plugin/8182-rust


## CodeLLDB (デバッグに必要） 🔴　rust-analyzer　（コード補完、定義の表示等）
https://qiita.com/akira_kawahara/items/b122551c5b46ba52f898

# remote debug
https://chigusa-web.com/blog/vs-code-rust-remote/

https://zenn.dev/hidenori3/articles/be1f287562fe0e

https://zenn.dev/23prime/articles/74cda5a096a3b3
```
$ sw_vers
ProductName:	macOS
ProductVersion:	12.5.1
BuildVersion:	21G83
```
### EC2でビルド & Remote SSHで接続
https://dev.classmethod.jp/articles/rust-crosscompile/

“Diesel
Diesel is both an ORM and a query builder with a focus on compile time safety, performance, and productivity. It has quickly becoming the standard tool for interacting with databases in Rust.”

抜粋:: Nate Murray  “Fullstack Rust”。 Apple Books  
