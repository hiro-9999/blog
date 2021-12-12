# online
https://go.dev/play/

```go
package main

import (
	"fmt"
	"time"
)

func runLoopSend(n int, ch chan int) {
	for i := 0; i < n; i++ {
		fmt.Println("send value:", i)
		ch <- i
	}
	fmt.Println("send value finished")
	close(ch)
}
func runLoopReceive(ch chan int) {
for i := range ch {
    fmt.Println("Received value:", i)
  }
	/*for {
		i, ok := <-ch
		if !ok {
			fmt.Println("Received error:", ok)
			break
		}
		fmt.Println("Received value:", i)
	}*/
}

func main() {
	myChannel := make(chan int)
	go runLoopSend(10, myChannel)
	go runLoopReceive(myChannel)
	time.Sleep(2 * time.Second)
}




抜粋:: Mina Andrawos  “Hands-On Full Stack Development with Go”。 Apple Books  
```

# 学习中
https://go.dev/tour/methods/10  is good

https://go.dev/tour/concurrency/9

# good book !  need to doing
Building Distributed Applications in Gin A hands-on guide for Go developers to build and deploy distributed web apps with the Gin framework by Mohamed Labouardy (z-lib.org).pdf
https://github.com/PacktPublishing/Building-Distributed-Applications-in-Gin

## interface
https://zetcode.com/golang/interface/

## book
Learning Go Programming Build Scalable Next-Gen Web Application using Golang (English Edition) by Shubhangi Agarwal (z-lib.org).pdf
```go
import "sync"

wg *sync.WaitGroup
wg.Done()

func show_value1(c int, wg *sync.WaitGroup){
for c<110{
fmt.Println(c)
time.Sleep(200 * time.Millisecond)
c = c+1
}
wg.Done()
}

var wg sync.WaitGroup
wg.Add(2)
go show_value(0, &wg)
fmt.Println("We have called a goroutine show_value") go show_value1(100, &wg)
fmt.Println("We have called a goroutine show_value1") wg.Wait()
fmt.Println("Done")
```

### Pipeline as Code: Continuous Delivery with Jenkins, Kubernetes, and Terraform

## Learn Grafana 7.0 book
A comprehensive introduction to help you get up and running with creating interactive dashboards to visualize and monitor time-series data in no time


## Hands-On Infrastructure Monitoring with Prometheus  book
 reliable monitoring and alerting system to sustain infrastructure security and performance
 
 ### Prometheus
 https://knowledge.sakura.ad.jp/27501/
 Prometheusは時系列のデータベースを採用しているPull型のデータモデルを持っていて、Service Discovery（サービスディスカバリ）という機能によって（監視の対象の）ターゲットを自動的に追従してくれます。さらにPromQL（プロムキューエル）という専用のクエリ言語がありまして、これを使うことによってシンプルかつ柔軟なクエリを発行することができます。それから、多種多様なExporter（エクスポータ）というものが用意されています。いわゆる監視エージェントですね。これを使うことによって、サーバだけではなく特定のソフトウェアとかサービスなど、いろいろなものを監視することができます。

## Goの言語仕様
https://go.dev/ref/spec

### Java 17の言語仕様
https://docs.oracle.com/javase/specs/jls/se17/jls17.pdf

### Go Building Web Applications by Nathan Kozyra, Mat Ryer (z-lib.org).pdf is old

https://github.com/PacktPublishing/Go-Building-Web-Applications



# go.dev 
https://go.dev

# Go42
https://github.com/ffhelicopter/Go42/blob/master/SUMMARY.md

# The Way to Go
https://github.com/Unknwon/the-way-to-go_ZH_CN/blob/master/eBook/directory.md


# Go语言实战笔记
https://www.toutiao.com/a6800203047327760900/
