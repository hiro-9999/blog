https://qiita.com/yamacraft/items/fd736203c29dfd3c7050
```
 // イベントの送信
        Bundle params = new Bundle();
        params.putString("text_name", "logevent2");
        params.putString("text_data", "Hello Firebase Analytics");
        mFirebaseAnalytics.logEvent("send_text", params);
```

https://firebase.google.com/docs/analytics/android/events?hl=ja

```
adb shell setprop log.tag.FA VERBOSE

adb shell setprop log.tag.FA-SVC VERBOSE

adb logcat -v time -s FA FA-SVC
```
