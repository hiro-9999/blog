# go tool pprof
 
 ### go tool pprof -png main out > out.png
 https://christina04.hatenablog.com/entry/golang-pprof-basic

https://zenn.dev/muroon/articles/adf577f563c806

pprofとは
Goのプロファイリングツールで添付のようにCPU負荷や処理時間、メモリ使用量などをブラウザで表示してくれます。

 "net/http/pprof" // 追加(importしているだけ)
 
 r.PathPrefix("/debug/pprof/").Handler(http.DefaultServeMux) // 追加

https://qiita.com/momotaro98/items/bd24a5d4603e378cc357

```
プロファイリング方法として1. go testのベンチマークで取る方法と、2. コードに追記する方法がある。
2. コードに追記する方法の中に以下の2つがある。
2-1. "runtime/pprof" (バッチプログラムやCLIツールを計測)
2-2. "net/http/pprof"(HTTPサーバプログラムを計測)

```
