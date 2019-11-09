https://qiita.com/nightyknite/items/b2590a69f2e0135756dc
Oculus Go
Mozilla/5.0 (Linux; Android 7.1.1; Pacific Build/N9F27L)
AppleWebKit/537.36 (KHTML, like Gecko)
OculusBrowser/4.0.0.17
SamsungBrowser/4.0
Chrome/61.0.3163.109
Mobile VR
Safari/537.36
UserAgentからMobile、Tablet、PCかどうか判定したいという要望があると思うが、方法として思いつくのは下記のようなパターン。

if (navigator.userAgent.match(/(iPhone|iPod|Android.*Mobile)/i)) {
  // iPhone、iPod、Android(Mobileを含む)
  console.log("Mobile");
} else if (navigator.userAgent.match(/(iPad|(?!(Android.*Mobile)+)Android)/i)) {
  // iPad、Android(Mobileを含まない)
  console.log("Tablet");
} else {
  // それ以外はPC
  console.log("PC");
}
