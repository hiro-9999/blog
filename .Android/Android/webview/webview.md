https://developer.android.com/guide/webapps/webview?hl=ja


https://re-engines.com/2019/03/27/android-webview-tips-2/


https://developer.android.com/reference/android/webkit/WebResourceRequest
getMethod()
getRequestHeaders ()

https://github.com/KonstantinSchubert/request_data_webviewclient

webview_post_data
https://www.lagou.com/lgeduarticle/7395.html

```
  @Override
  public WebResourceResponse shouldInterceptRequest(WebView view, final WebResourceRequest request) {
        final String url = request.getUrl().toString();
    // 这个方式就是在这拦截请求的url，然后通过再次请求该地址来获取数据，相比IOS，android只能在这获取请求的链接
        final WebResourceResponse response = super.shouldInterceptRequest(view, request);
        // 这样获取的response == null，所以要想从这通过response.getData()获取响应结果是不可行的，详情可以看WebViewClient类中这个方法是怎么实现的
        
        return response;
    }
});
https://www.jianshu.com/p/87096afbb829
https://www.wanandroid.com/blog/show/2334
```

```
 @Override
        public WebResourceResponse shouldInterceptRequest(WebView view, WebResourceRequest request) {
            try {
                    String mUrl = request.getUrl().toString();
                    OkHttpClient httpClient = new OkHttpClient();
                    Request mRequest = new Request.Builder()
                            .url(request.getUrl().toString())
                            .addHeader("token", UserHelper.getToken()) //add headers
                            .build();
                    Response response = httpClient.newCall(mRequest).execute();

                    return new WebResourceResponse(
                            getMimeType(request.getUrl().toString()), // set content-type
                            response.header("content-encoding", "utf-8"),
                            response.body().byteStream()
                    );
            } catch (Exception e) {
                return super.shouldInterceptRequest(view, request);
            }
            return super.shouldInterceptRequest(view, request);
        }
        
 ```
