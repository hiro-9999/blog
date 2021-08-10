https://gist.github.com/jesty/e934314cae3d2014c6fa46ab64f3904e

# Share cookies between WebView and OkHttpClient 3 / Retrofit 2.
https://www.it-swarm-ja.com/ja/android/okhttp%E3%82%92%E4%BD%BF%E7%94%A8%E3%81%97%E3%81%A6android%E3%81%A7cookie%E5%87%A6%E7%90%86%E3%82%92%E5%AE%9F%E8%A3%85%E3%81%99%E3%82%8B%E6%96%B9%E6%B3%95%E3%81%AF%EF%BC%9F/1046932989/


https://www.it-swarm-ja.com/ja/android/okhttp%E3%82%92%E4%BD%BF%E7%94%A8%E3%81%97%E3%81%A6android%E3%81%A7cookie%E5%87%A6%E7%90%86%E3%82%92%E5%AE%9F%E8%A3%85%E3%81%99%E3%82%8B%E6%96%B9%E6%B3%95%E3%81%AF%EF%BC%9F/1046932989/


https://stackoverflow.com/questions/5574530/how-to-parse-a-cookie-string


https://stackoverflow.com/questions/34663640/okhttpclient-pass-cookies-to-webview

https://stackoverflow.com/questions/35743291/add-cookie-to-client-request-okhttp
```
OkHttpClient client = new OkHttpClient().newBuilder()
    .cookieJar(new CookieJar() {
        @Override
        public void saveFromResponse(HttpUrl url, List<Cookie> cookies) {
        }

        @Override
        public List<Cookie> loadForRequest(HttpUrl url) {
            Arrays.asList(createNonPersistentCookie());
        }
    })
    .build();

// ...
    
public static Cookie createNonPersistentCookie() {
    return new Cookie.Builder()
        .domain("publicobject.com")
        .path("/")
        .name("cookie-name")
        .value("cookie-value")
        .httpOnly()
        .secure()
        .build();
}
 ```
