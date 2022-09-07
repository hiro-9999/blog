# Beginning Rust, Second Edition
https://github.com/apress/beginning-rust-2e

## Rust编程：入门、实战与进阶 (朱春雷) (z-lib.org) 🟡
https://github.com/inrust/Rust-Programming-in-Action

>fault-tolerant

### Zero to Production in Rust An Opinionated Introduction to Backend Development (Luca Palmieri) (z-lib.org)🟡 reading 
3.7 Working With HTML Forms <-2022/09/07 reading

RPC frameworks like gRPC or Apache Avro ???
https://www.lpalmieri.com/posts/2020-06-06-zero-to-production-1-setup-toolchain-ides-ci/#5-2-ready-to-go-ci-pipelines

https://www.lpalmieri.com/posts/2020-07-04-choosing-a-rust-web-framework-2020-edition/

>web actix_web
https://actix.rs

https://docs.rs/actix-web/4.0.1/actix_web/index.html

https://github.com/actix/examples


https://docs.rs 🟡

# ide Rust-analyzer
https://rust-analyzer.github.io

https://github.com/intellij-rust/intellij-rust

# test coverage
http://www.exampler.com/testing-com/writings/coverage.pdf

```
https://rustup.rs
curl --proto '=https' --tlsv1.2 -sSf https://sh.rustup.rs | sh

% rustc --version
rustc 1.63.0 (4b91a6ea7 2022-08-08)

%  rustup update
cargo --version

$ cargo help <command> 🟡
 % cargo -V
cargo 1.63.0 (fd9c4297c 2022-07-01)

cargo install cargo-tarpaulin
cargo tarpaulin --ignore-tests


rustup component add clippy
cargo clippy
cargo clippy -- -D warnings

rustup component add rustfmt
cargo fmt
cargo fmt -- --check

cargo install cargo-audit
cargo audit

cargo install cargo-expand
cargo expand
rustup toolchain install nightly --allow-downgrade

curl -v http://127.0.0.1:8000/health_check


$ cargo new project_name
cargo new project_name --lib

编译项目，在终端运行以下命令 target/test:
cargo install cargo-watch
cargo watch -x check -x test -x run

$ cargo build
$ cargo run

$ cargo build --release
最终准备发布时，可以使用cargo build --release来优化编译项目，这时会在target/release目录下生成一个在 生产环境中使用的可执行文件。

 % cargo clean
 
 变量默认是不可改变的，这是为了让开发者能充 分利用Rust提供的安全性来编写代码🟡
 
  const MAX_NUM: isize = -1024; //有符号
  const MAX_NUM: usize = 1024; //无符号
  Rust默认整 数类型为i32;
 
  使用前缀0b、0o和0x表示二进制、八 进制和十六进制的数字。
  const MAX_NUM1: isize = -0x24; //十六进制
  
   let mut e:f32 = (e + 4) as f32;
   
   Rust的复合数据类 型有元组、数组、结构体、枚举等。
    let tup1: (i8, f32, bool) = (-10, 7.7, false);
    let (x, y, z) = tup1;
    println!("x: {}, y: {}, z: {}", x, y, z);
    
    省略数组类型，为所有元素使用默认值初始化。 
    let arr = [1; 5]; // 等价于:let arr = [1, 1, 1, 1, 1];

动态数组Vec。

&'static str类型的字段
#[derive(Debug)]Debug trait的类型才拥有使用{:?}格式化打印的行为
enum ColorNoParam {
    Yellow,
    Red,
    Blue,
}

  let mut v = vec![10, 20, 30];
    for i in &mut v {
        *i += 50;
        print!("{} ", i);
    }
    
    2.4.2 VecDeque ??? p59 🔴　
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
