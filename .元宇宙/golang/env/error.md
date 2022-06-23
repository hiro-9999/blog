
https://zenn.dev/nekoshita/articles/097e00c6d3d1c9

https://github.com/golang/xerrors
を見てもらうとわかると思うのですが、もうメンテされないからです。xerrorsはgo v1.13に取り込まれたことで役目を終えたようです。

goの標準errorsで、stacktraceが出せないことや、エラーの判定がしずらいことなどを補うために pkg/errorsがそれらの機能を備えていました。それらの機能をgoの標準errorsに取り込むためにxerrorsが誕生しました。そして、go v1.13がリリースされたタイミングでxerrorsの一部機能が標準errorsに取り込まれました。この時にstacktraceの機能は標準errorsの取り込まれず、errorをラップする機能と判定する機能が標準errorsとfmtに取り込まれることになりました。

https://go.dev/blog/go1.13-errors


golang.org/x/xerrors

https://qiita.com/sonatard/items/9c9faf79ac03c20f4ae1

import "golang.org/x/xerrors"

### sample
https://kazuhira-r.hatenablog.com/entry/2021/02/28/011857

```go
err := xerrors.New("error in main method")
fmt.Printf("%v\n", err)

error in main method
xerrors.Newで作成したエラーは、%+v のときにファイル名やメソッド名を表示します。

err := xerrors.New("error in main method")
fmt.Printf("%+v\n", err)

error in main method:
    main.main
        /Users/sonatard/tmp/xerrors/main.go:9
%#v では以下のようになります。

err := xerrors.New("error in main method")
fmt.Printf("%#v\n", err)

error in main method
```
