https://zenn.dev/hokawa/scraps/d44ed92d75adb4

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
