```go
s := "Gopherはかわいい"
fmt.Println(s[0:7]) // Gopher�
fmt.Println(string([]rune(s)[0:7])) // Gopherは



byteIdx := strings.IndexRune(s, 'か')      // 9
runeIdx := len([]rune(s[0:byteIdx])) + 1   // 8

```
https://qiita.com/seihmd/items/4a878e7fa340d7963fee
