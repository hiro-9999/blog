# The Rust Programming Language

https://github.com/rust-lang/book/tree/master/src

curl --proto '=https' --tlsv1.2 https://sh.rustup.rs -sSf | sh

https://doc.rust-lang.org/book/ch01-01-installation.html

```
$ rustc --version
rustc 1.45.0 (5c1f21c3b 2020-07-13)

$ cargo --version
cargo 1.45.0 (744bd1fbb 2020-06-15)
```

# Rust is an ahead-of-time compiled language, meaning you can compile a program and give the executable to someone else, and they can run it even without having Rust installed.

```
cargo new hello_cargo
cargo check 
cargo build
cargo run

cargo build --release
```
