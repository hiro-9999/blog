## How to get post response form a webview in Android

https://github.com/henrychuangtw/WebView-Javascript-Inject


https://developer.android.com/guide/webapps/webview?hl=ja

https://helperbyte.com/questions/273313/how-to-load-page-in-webview-cookies

```
https://stackoverflow.com/questions/33370123/how-to-get-webviewclient-shouldinterceptrequest-invoked-asynchronously
  @TargetApi(Build.VERSION_CODES.LOLLIPOP)
        @Override
        public WebResourceResponse shouldInterceptRequest(WebView view, WebResourceRequest request) {
            Log.i(TAG,"shouldInterceptRequest path:"+request.getUrl().getPath());
            WebResourceResponse returnResponse = null;
            if (request.getUrl().getPath().startsWith("/cart")) { // only interested in /cart requests
                returnResponse = super.shouldInterceptRequest(view, request);
                Log.i(TAG,"cart AJAX call - doing okRequest");
                Request okRequest = new Request.Builder()
                        .url(request.getUrl().toString())
                        .post(null)
                        .build();
                try {
                    Response okResponse = app.getOkHttpClient().newCall(okRequest).execute();
                    if (okResponse!=null) {
                        int statusCode = okResponse.code();
                        String encoding = "UTF-8";
                        String mimeType = "application/json";
                        String reasonPhrase = "OK";
                        Map<String,String> responseHeaders = new HashMap<String,String>();
                        if (okResponse.headers()!=null) {
                            if (okResponse.headers().size()>0) {
                                for (int i = 0; i < okResponse.headers().size(); i++) {
                                    String key = okResponse.headers().name(i);
                                    String value = okResponse.headers().value(i);
                                    responseHeaders.put(key, value);
                                    if (key.toLowerCase().contains("x-cart-itemcount")) {
                                        Log.i(TAG,"setting cart item count");
                                        app.setCartItemsCount(Integer.parseInt(value));
                                    }
                                }
                            }
                        }
                        InputStream data = new ByteArrayInputStream(okResponse.body().string().getBytes(StandardCharsets.UTF_8));
                        Log.i(TAG, "okResponse code:" + okResponse.code());
                        returnResponse = new WebResourceResponse(mimeType,encoding,statusCode,reasonPhrase,responseHeaders,data);
                    } else {
                        Log.w(TAG,"okResponse fail");
                    }
                } catch (IOException e) {
                    e.printStackTrace();
                }
            }
            return returnResponse;
```

```
OkHttpClient client = new OkHttpClient();

Request req = new Request.Builder()
.url(url)
.addHeader(HttpHeaders.USER_AGENT, Constants.USER_AGENT_VALUE)
.addHeader(HttpHeaders.COOKIE, cookies)
.build();

Response response = client.newCall(req).execute();

ResponseInputStream InputStream = response.body().byteStream();

return new WebResourceResponse(null, null, responseInputStream);
```

https://www.jianshu.com/p/1e7980c50f13
https://www.jianshu.com/p/ddfecd08a2d0

CookieManager.getInstance().removeAllCookies(null);
CookieManager.getInstance().flush();


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
