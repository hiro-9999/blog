https://appium.io/docs/en/writing-running-appium/caps/

https://qiita.com/k5n/items/899cf40a0021a6a92efd

https://www.itmedia.co.jp/fav/articles/2202/27/news066.html
```
const androidCapabilities = [
  {
    "platformName": "Android", // OS 情報
    "deviceName": "Android Emulator", // 任意の値
    "avd": "AndroidEmulator", // 端末を特定するための名前
    "automationName": "Appium", // 端末操作のためのドライバ
    "app": "./app/android-premium-app.apk" // インストールするアプリ
  }
]
adb shell input keyevent ENTER
adb shell input keyevent DPAD_RIGHT
adb shell input keyevent DPAD_LEFT
adb shell input keyevent DPAD_UP
adb shell input keyevent DPAD_DOWN
 
// 1つ前の画面に戻る(Backコマンド
adb shell input keyevent KEYCODE_BACK
 
// AndroidTVのホームに戻る(Homeコマンド)
adb shell input keyevent KEYCODE_HOME

// Force stop
adb shell am force-stop app.androidtv
  
// Clear date & Clear cache
 adb shell pm clear app.androidtv
 
// アプリ起動
adb shell am start -n androidtv/androidtv.SplashActivity
 
// emulatorデータ削除（エミュレータ終了させてから行う必要がある）
emulator -list-avds //エミュレータの名前取得 (対象のエミュレータ名がわかれば不要)
emulator -avd Android_TV_API_30 -wipe-data
 
//エミュレータ起動
emulator -avd Android_TV_API_30
 
// エミュレータ終了
adb -s emulator-5554 emu kill
※エミュレータ名は adb devices で取得できるプロセス名
```
