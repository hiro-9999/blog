# validator.v9(v10) で条件付き

https://qiita.com/ayatothos/items/064ce18f4260b2503249

https://pkg.go.dev/gopkg.in/go-playground/validator.v10

Goのバリデーション用パッケージのvalidator.v9を使って、条件付き必須のバリデーションを実装したかったのですが、これまでrequired, min, maxくらいしか使っていなかったので、勉強しなおしました。

```go
import (
    "fmt"

    "github.com/go-playground/validator/v9"
)

type User struct {
    Name           string     `validate:"required"`
    Age            uint8      `validate:"gte=0,lte=130"`
}

var validate *validator.Validate

func main() {

    validate = validator.New()

    user := &User{
        Name:      "Badger",
        Age:       135,
    }

    err := validate.Struct(user)
    if err != nil {
        if _, ok := err.(*validator.InvalidValidationError); ok {
            fmt.Println(err)
            return
        }

        for _, err := range err.(validator.ValidationErrors) {

            fmt.Println(err.Namespace())
            fmt.Println(err.Field())
            fmt.Println(err.StructNamespace())
            fmt.Println(err.StructField())
            fmt.Println(err.Tag())
            fmt.Println(err.ActualTag())
            fmt.Println(err.Kind())
            fmt.Println(err.Type())
            fmt.Println(err.Value())
            fmt.Println(err.Param())
            fmt.Println()
        }
        // バリデーションエラーの場合の処理
        return
    }
    ```
