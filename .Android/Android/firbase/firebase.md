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
analyticsの反映はGA同様、半日〜翌日ぐらいかかる
私の環境では24時間近くかかっている気がします。
## ios 
https://www.apps-gcp.com/introduction-of-firebase-analytics/


## android
https://firebase.google.com/docs/analytics/android/start?hl=ja

## ユーザー プロパティ
https://support.google.com/analytics/answer/7061705?hl=ja

## データの更新頻度
https://support.google.com/analytics/answer/7084038?hl=ja

