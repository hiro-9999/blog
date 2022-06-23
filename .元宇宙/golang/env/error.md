golang.org/x/xerrors

https://qiita.com/sonatard/items/9c9faf79ac03c20f4ae1

import "golang.org/x/xerrors"

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
