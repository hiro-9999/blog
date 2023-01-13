https://fyne.io/

GO UI 

### Go言語ハンズオン
https://www.shuwasystem.co.jp/support/7980html/6399.html

```go
package main

import (
        "fyne.io/fyne/app"
        "fyne.io/fyne/widget"
)

func main() {
        a := app.New()

        w := a.NewWindow("Hello")
        w.SetContent(
                widget.NewLabel("Hello Fyne!"),
        )

        w.ShowAndRun()
}


import (
    "fmt"
)

// Data is interface.
type Data interface {
        Initial(name string, data []int)
        PrintData()
}

// Mydata is Struct.
type Mydata struct {
        Name string
        Data []int
}

// Initial is init method.
func (md *Mydata) Initial(name string, data []int) {
        md.Name = name
        md.Data = data
}

// PrintData is println all data.
func (md *Mydata) PrintData() {
        fmt.Println("Name: ", md.Name)
    
func main() {
        var ob Data = new(Mydata)
        ob.Initial("Sachiko", []int{55, 66, 77})
        ob.PrintData()
}

```
