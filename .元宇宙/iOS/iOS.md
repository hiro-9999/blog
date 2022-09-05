“https://github.com/PacktPublishing/iOS-15-Programming-for-Beginners-Sixth-Edition. ”

### 存プロジェクトをUIKitからSwiftUIに移行するまでにやったこと
https://dev.classmethod.jp/articles/first-step-uikit-to-swiftui/

# iOSアプリにSwiftUI化されたい
https://yutaabe200.hatenablog.com/entry/2021/03/31/%E6%97%A2%E5%AD%98%E3%83%97%E3%83%AD%E3%82%B8%E3%82%A7%E3%82%AF%E3%83%88%E3%81%B8SwiftUI%E3%81%AE%E5%B0%8E%E5%85%A5%E3%81%99%E3%82%8B%E6%99%82%E3%81%AE%E8%A9%B1
それを解決するのが後述するCombineフレームワークや@Stateや@ObservedObjectを含むProperty Wrapperです。

これらを使用することでViewの状態を管理するオブジェクトや変数が見やすくなる恩恵があります。

# dynamic-links
https://firebase.google.com/docs/dynamic-links/ios/create?hl=ja

# swift doc 🟡
https://docs.swift.org/swift-book/

https://developer.apple.com/xcode/swiftui/

# api
https://developer.apple.com/documentation/

	
# Beginning iOS Programming with Swift and SwiftUI🟡
```swift
var totalPriceMessage = "The price of the book is $ \(totalPrice)"
VStack is a vertical stack view for laying out views vertically. 

HStack - arranges the views horizontally 
VStack - arranges the views vertically 
ZStack - overlays one view on top of another

プロトタイプ（英: prototype）は、デモンストレーション目的や新技術・新機構の検証、試験、量産前での問題点の洗い出しのために設計・仮組み・製造された原型機
プロトタイピング（Prototyping）とは、実働するモデル（プロトタイプ）を早期に製作する手法およびその過程を意味する。
Figma (https://www.figma.com)

https://www.adobe.com/products/xd.html

Invision (https://www.invisionapp.com/)

Flinto (https://www.flinto.com) 

Sketch (https://www.sketchapp.com)
https://designcode.io
https://www.sketch.com/docs/prototyping/

https://sneakpeekit.com
https://marvelapp.com/prototype/10c52gg6/screen/33520749

struct ContentView: View {
    var body: some View {
        List(1...4, id: \.self) {
            Text("Item \($0)")
} }
}

var body: some View {
        List {
            ForEach(1...4, id: \.self) {
	     Text("Item \($0)")
	} 
}

 List {
        ForEach(0...restaurantNames.count-1, id: \.self) { index in
            Text(restaurantNames[index])
} }

ForEach(restaurantNames.indices, id: \.self) { index in

RestaurantListView()
RestaurantListView()
    .preferredColorScheme(.dark)
    
   Settings > Developer. Turn the switch of the Dark

@Environment(\.verticalSizeClass) var verticalSizeClass 🟡
if verticalSizeClass == .compact {
    HSignUpButtonGroup()
} else {
    VSignUpButtonGroup()
}

.background {
    Image("background")
}
.resizable()
.ignoresSafeArea()

struct ContentView_Previews: PreviewProvider {
    static var previews: some View {
	    ContentView()
		    .previewDevice(PreviewDevice(rawValue: "iPhone 12 Pro"))
		    .previewDisplayName("iPhone 12 Pro")
	}
	// or
  static var previews: some View {
    Group {
    ContentView()
        .previewDevice(PreviewDevice(rawValue: "iPhone 12 Pro"))
        .previewDisplayName("iPhone 12 Pro")
    ContentView()
        .previewDevice(PreviewDevice(rawValue: "iPhone 12 Pro"))
        .previewDisplayName("iPhone 12 Pro")
        .previewInterfaceOrientation(.landscapeLeft)
    ContentView()
        .previewDevice(PreviewDevice(rawValue: "iPhone 12 Pro Max"
        .previewDisplayName("iPhone 12 Pro Max")
    ContentView()
        .previewDevice(PreviewDevice(rawValue: "iPad Air (4th gene")
        .previewDisplayName("iPad Air")
    }
   }
}
```

https://qiita.com/shtnkgm/items/8b7979fc84a3cc065238
```
Swiftの型（クラス、構造体、列挙体）とイニシャライザの関係を整理します。
以下のキーワードがモヤっとしている方におすすめです。
Failable Initilizer｜失敗可能イニシャライザ
Default Initializer｜既定イニシャライザ
Memberwise Initilaizer｜全項目イニシャライザ
Designated Initializer｜指定イニシャライザ
Convenience Initializer｜簡易イニシャライザ
Required Initializer｜必須イニシャライザ
```

抜粋:
iOS 15 Programming for Beginners, Sixth Edition
Ahmad Sahar and Craig Clayton
この素材は著作権で保護されている可能性があります。

# Apple セキュリティアップデート
https://support.apple.com/ja-jp/HT201222

ios16ではiPhone8のiOSのアップデートはいつまで対応するのでしょうか？あくまでも予想ではありますが2024年です。
https://crusie-n-more.com/iphone7-8itumade/

> 移动App测试实战：顶级互联网企业软件测试和质量提升最佳实践


# Firebase CrashlyticsからのクラッシュをSlackに通知する
https://qiita.com/superman9387/items/7fa69562f282267dcffd


https://www.youtube.com/playlist?list=PLeLcvrwLe18497zpDN912nAY-G0nNXg1s

```swift
https://home.unicode.org
//use unicode in swift
let dogString = "\u{1F436}" 🟠
print(dogString)
for scalar in dogString.unicodeScalars {
    print("\(scalar) ")
}
var jobTitle :String?
if let jobTitleWithValue = jobTitle {
    var message = "Your job title is " + jobTitleWithValue
}
if jobTitle != nil {
    var message = "Your job title is " + jobTitle!
}

//Swift Apprentice (Seventh Edition) (Eli Ganim, Cosmin Pupaza, Matt Galloway) (z-lib.org)

 var switchState = true  🟠 toggle()
switchState.toggle() // switchState = false
switchState.toggle() // switchState = true

while Int.random(in: 1...6) != 6 {
 print("Not a six")
    print(Int.random(in: 1...6))
}

var sum = 1
let count = 10
var lastSum = 0
for _ in 0..<count {
  let temp = sum
  sum = sum + lastSum
  lastSum = temp
}

```

