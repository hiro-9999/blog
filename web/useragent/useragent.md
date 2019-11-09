https://developer.mozilla.org/ja/docs/Web/HTTP/Browser_detection_using_the_user_agent
タッチ対応端末を検出するには "Mobi" や "Tablet" を検索するのではなく、タッチ機能を検出してください。
https://developer.mozilla.org/ja/docs/Web/HTTP/Headers/User-Agent/Firefox

//AFRAME.utils.device.isOculusGo()
https://github.com/aframevr/aframe/issues/4032


User-Agent Switcher
https://news.mynavi.jp/article/20180428-firefox/

//Oculus Goのブラウザ good
OculusBrowser
https://qiita.com/wakufactory/items/98658e8d089386a7b073
追記(2018/11/05)：その後のアップデートで、Chrome66相当になっています)
追記(2019/5/27) : Oculus Questでは、"Pacific" -> "Quest" になっています。
追記(2019/07/17)：その後のアップデートで、Chrome74相当になっています)


//Oculus Go
Mozilla/5.0 (Linux; Android 7.1.1; Pacific Build/N9F27L)
AppleWebKit/537.36 (KHTML, like Gecko)
OculusBrowser/4.0.0.17
SamsungBrowser/4.0
Chrome/61.0.3163.109
Mobile VR
Safari/537.36

https://qiita.com/nightyknite/items/b2590a69f2e0135756dc
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
