https://zenn.dev/hokawa/scraps/d44ed92d75adb4


```go
https://christina04.hatenablog.com/entry/golang-zap-tips
zap.AddCallerSkipを使います。

var logger *zap.Logger

func init() {
        l, err := zap.NewDevelopment(zap.AddCallerSkip(1))
        if err != nil {
                panic(err)
        }
        logger = l
}
```

# GoのロギングライブラリZap

https://github.com/uber-go/zap

```go
"go.uber.org/zap"

logger, _ := zap.NewProduction()
defer logger.Sync()


logger, err := zap.NewDevelopment()
	if err != nil {
		t.Fatal(err)
	}
  
  logger *zap.Logger,
```
