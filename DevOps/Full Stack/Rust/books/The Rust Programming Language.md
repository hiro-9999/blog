# The Rust Programming Language

https://github.com/rust-lang/book/tree/master/src

curl --proto '=https' --tlsv1.2 https://sh.rustup.rs -sSf | sh

# prelude !good!
https://doc.rust-lang.org/std/prelude/index.html

# book
https://doc.rust-lang.org/book/ch01-01-installation.html

```
$ rustc --version
rustc 1.45.0 (5c1f21c3b 2020-07-13)

$ cargo --version
cargo 1.45.0 (744bd1fbb 2020-06-15)
```

# Rust is an ahead-of-time compiled language, meaning you can compile a program and give the executable to someone else, and they can run it even without having Rust installed.

# cargo
https://doc.rust-lang.org/cargo/

```
cargo new hello_cargo
cargo check 
cargo build
cargo run
cargo tree
cargo build --release
```
```
$ cd ~
$ vim .bash_profile
随便找个位置加入:

alias ll='ls -alF'
alias la='ls -A'
alias l='ls -CF'
保存后，执行

$ source .bash_profile

brew install tree
```
# crates.io
https://crates.io
https://doc.rust-lang.org/cargo/guide/dependencies.html


https://doc.rust-lang.org/cargo/reference/profiles.html
# The valid options are:
```
0: no optimizations, also turns on cfg(debug_assertions).
1: basic optimizations
2: some optimizations
3: all optimizations
"s": optimize for binary size
"z": optimize for binary size, but also turn off loop vectorization.
```
