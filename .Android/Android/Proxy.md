## エミュレータでプロキシを使用する
https://developer.android.com/studio/run/emulator-networking?hl=ja

https://developer.android.com/studio/command-line/adb?hl=ja

$ export PATH=$PATH:/Users/<自分のユーザー名のフォルダ>/Library/Android/sdk/platform-tools
$ adb kill-server                                                               
$ adb start-server  

adb shell netstat


adb shell settings put global http_proxy <ip>:<port>
  
  https://5hyn3.github.io/posts/use-mitm-proxy-with-android-emulator/
  Androidエミュレータを起動する

OSのバージョンは5.1で動作を確認できました。
