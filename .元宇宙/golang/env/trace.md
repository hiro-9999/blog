# go runtime trace
go run -race main.go
https://pkg.go.dev/runtime/trace

https://zenn.dev/hsaki/books/golang-concurrency/viewer/analysis

https://kiririmode.hatenablog.jp/entry/20190506/1557097529

https://hiroyukim.hatenablog.com/entry/2019/01/27/140325

go tool trace trace.out

```go
import (
    "fmt"
    "log"
    _ "net/http/pprof"
    "os"
    "runtime/trace"
    "time"
)

 f, err := os.Create("trace.out")
    if err != nil {
        log.Fatal(err)
    }

    defer f.Close()

    trace.Start(f)
    defer trace.Stop()
    
    
```
