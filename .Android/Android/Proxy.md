## エミュレータでプロキシを使用する
https://developer.android.com/studio/run/emulator-networking?hl=ja

https://developer.android.com/studio/command-line/adb?hl=ja

# emulator
```
~/.bashrcにラップするfunctionを追加で無事エミュレーター起動しました。
# $HOME/.bashrc
function emulator { cd "$(dirname "$(which emulator)")" && ./emulator "$@"; }

export PATH=$PATH:/Users/username/Library/Android/sdk/platform-tools

Library/Android/sdk/emulator/emulator
emulator @Nexus_5X_API_23 -http-proxy http://username:password@server:port
http://username:password@server:port
https://developer.android.com/studio/run/emulator-commandline
```

## android emulator manual proxy configuration
```
Go to App or Android App (as default settings)
tap on Debugger
Tap on LLDB startup command
Tap +
Add you command -http-proxy http://168.192.1.2:3300
https://stackoverflow.com/questions/1570627/how-to-set-up-android-emulator-proxy-settings


emulator -avd myavd -http-proxy 168.192.1.2:3300

On Run Configuration> Android Application > App > Target > Additional Emulator Command Line Options: -http-proxy http://xx.xxx.xx.xx:8080
https://stackoverflow.com/questions/1570627/how-to-set-up-android-emulator-proxy-settings
telnet localhost 5554

https://developer.android.com/studio/run/emulator-networking

```

https://stackoverflow.com/questions/18441823/manual-proxy-configuration-not-working-on-android-2-3

$ export PATH=$PATH:/Users/<自分のユーザー名のフォルダ>/Library/Android/sdk/platform-tools
$ adb kill-server                                                               
$ adb start-server  

adb shell netstat


adb shell settings put global http_proxy <ip>:<port>
  
  https://5hyn3.github.io/posts/use-mitm-proxy-with-android-emulator/
  Androidエミュレータを起動する

OSのバージョンは5.1で動作を確認できました。
