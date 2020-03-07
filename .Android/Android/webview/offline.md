webView.loadData("");
webView.loadUrl("about:blank")
https://stackoverflow.com/questions/14300664/android-webview-displaying-blank-page

Android オフライン時にWebViewキャッシュを参照する
```
val webView = findViewById<WebView>(R.id.webView)
webView.settings.setAppCachePath(applicationContext.cacheDir.absolutePath)
webView.settings.allowFileAccess = true
webView.settings.setAppCacheEnabled(true)
webView.settings.javaScriptEnabled = true
//基本はネットワークから参照する
webView.settings.cacheMode = WebSettings.LOAD_DEFAULT
//オフライン時はキャッシュ取得を試みる
if ( isNetworkAvailable(context) ) { // when offline
    webView.settings.cacheMode = WebSettings.LOAD_CACHE_ELSE_NETWORK
}
webView.loadUrl( url )
```
```
val webView = WebView(context)
//...中略
//キャッシュがある場合は通信しない
webView.settings.cacheMode = WebSettings.LOAD_CACHE_ELSE_NETWORK
webView.loadUrl( url)
```

```
<uses-permission android:name="android.permission.ACCESS_NETWORK_STATE"/>
<uses-permission android:name="android.permission.ACCESS_WIFI_STATE"/>
```

```
ネットワーク状態のオンオフ判定

fun isNetworkAvailable(context: Context): Boolean {
    val connectivityManager = context.getSystemService(Context.CONNECTIVITY_SERVICE) as ConnectivityManager?
    if(connectivityManager == null ){ return false }
    if(connectivityManager.activeNetworkInfo == null ){ return false }
    return connectivityManager.activeNetworkInfo.isConnected
}
```
