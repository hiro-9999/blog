Go言語にはルーン（rune）という型があります。

一言で言えばルーンはUnicodeコードポイントのことなのですが、「文字コードとは？」、「Unicodeコードポイントとは？」ってところから整理していきます。
https://free-engineer.life/golang-string-rune/

```go
str := "Hello, Go言語"
fmt.Printf("len: %d\n", len(str))                           // => len: 15
fmt.Printf("rune count: %d\n", utf8.RuneCountInString(str)) // => rune count: 11

s := "Gopherはかわいい"
fmt.Println(s[0:7]) // Gopher�
fmt.Println(string([]rune(s)[0:7])) // Gopherは



byteIdx := strings.IndexRune(s, 'か')      // 9
runeIdx := len([]rune(s[0:byteIdx])) + 1   // 8

```
https://qiita.com/seihmd/items/4a878e7fa340d7963fee
