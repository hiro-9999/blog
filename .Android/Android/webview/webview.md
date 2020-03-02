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
