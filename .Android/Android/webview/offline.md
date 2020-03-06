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
