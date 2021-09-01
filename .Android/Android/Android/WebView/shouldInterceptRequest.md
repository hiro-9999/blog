# shouldInterceptRequest
https://www.tabnine.com/code/java/methods/android.webkit.WebResourceRequest/getRequestHeaders

https://codehero.jp/java/7610790/add-custom-headers-to-webview-resource-requests-android

# Android中Cookie获取、保存以及同步 ok
https://www.jianshu.com/p/582e22671e4e

// javascript get pass
https://stackoverflow.com/questions/13954049/intercept-post-requests-in-a-webview

https://qiita.com/masaki_shoji/items/c3d57f210d58d4ae6ca2

https://blog.csdn.net/spinchao/article/details/104769061

https://www.it-mure.jp.net/ja/android/インターセプトpost-webviewでのリクエスト/1070112301/


http://www.androidchina.net/9116.html
```
 @Override
        public WebResourceResponse shouldInterceptRequest(WebView view,
                                                          WebResourceRequest request) {
            String url = request.getUrl().toString();
            Log.d("cookie====url", "  " + url);

            if (url.contains("https://www.)) {
                
//                WebResourceResponse response =
//                        mDataHelper.getReplacedWebResourceResponse(getApplicationContext(),
//                                url);
//                if (response != null) {
//                    return response;
//                }
            }
            return super.shouldInterceptRequest(view, request);
        }
```
