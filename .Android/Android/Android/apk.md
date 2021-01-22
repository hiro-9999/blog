https://stackoverflow.com/questions/6330200/how-to-quit-android-application-programmatically

```
 Intent browse = new Intent( Intent.ACTION_VIEW , Uri.parse( "https://www." ) );

                startActivity( browse );
                if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.JELLY_BEAN) {
                    finishAffinity();
                } else{
                    finish();
                    System.exit(0);
                }
```


# DOWNLOAD AND INSTALL APP PROGRAMMATICALLY
http://www.wepstech.com/download-and-install-app-programmatically/

https://gist.github.com/emaillenin/9a0fea5a6924ddb23b8dd620392e745f

https://link2me.tistory.com/1506

# .apkのインストール中に「パッケージの解析に問題があります」というエラーが表示された場合は、読み取り/書き込み権限を要求していないか、インストールしようとしているファイルが存在しないか、破損している可能性があります。
https://www.366service.com/jp/qa/f618f2146da7c3fbfe3aa047b70d5e8b

https://androidwave.com/download-and-install-apk-programmatically/


https://stackoverflow.com/questions/59105199/how-to-install-any-android-app-programmatically-in-android-10



https://droidmedium.blogspot.com/2019/11/how-to-download-apk-file-from-url-and.html

https://qiita.com/kazhida/items/d2229e4c329b128c3b58
```
 Intent intent = new Intent(Intent.ACTION_VIEW);
    intent.setDataAndType(uri, "application/vnd.android.package-archive");
    // 呼び出し先で読めるようにフラグを追加
    intent.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK | Intent.FLAG_GRANT_READ_URI_PERMISSION);
    context.startActivity(intent);
}
```

https://www.programmersought.com/article/79293902779/

# google
https://android.googlesource.com/platform/development/+/master/samples/ApiDemos/src/com/example/android/apis/content/InstallApkSessionApi.java


https://stackoverflow.com/questions/58085899/android-10-no-activity-found-to-handle-intent
