https://github.com/kelseyhightower/envconfig

```go
    "github.com/kelseyhightower/envconfig"
)

type Specification struct {
    Debug       bool
    Port        int
    User        string
    Users       []string
    Rate        float32
    Timeout     time.Duration
    ColorCodes  map[string]int
}

func main() {
    var s Specification
    err := envconfig.Process("myapp", &s)

```
