https://tech-blog.cloud-config.jp/2021-07-30-web-rendering/


Server Side Rendering（SSR）
SSRの特徴は、初回のレンダリングをサーバー側で行うことでCSRよりも読み込みを早くし、複数ページに対応したところです。
仕組みとしては、サーバー側にJavaScriptが実行できるNode.jsサーバーを作り、初回のページを読み込むレンダリングをサーバー側で行います。画面を更新する際は、SPA同様、クライアント側で必要な箇所のみをJavaScriptで再レンダリングしています。

初めはSSRって全てサーバー側でレンダリングしてるのかなって思ってました。サーバー側で全てレンダリングする方法はServer Renderingという名前らしいです。そのServer Renderingの中でもCSRも取り入れてハイブリットにしたのがSSRらしいです。
