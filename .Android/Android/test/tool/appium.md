https://appium.io/docs/en/writing-running-appium/caps/

https://qiita.com/k5n/items/899cf40a0021a6a92efd
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
```
