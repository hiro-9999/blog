https://reffect.co.jp/vue/nuxt-js-first-step


npx create-nuxt-app

npm install nuxtでNuxt.jsをインストールする

 # npm run lint:js -- --fix
 
 
 Universal(SSR)を選択するとサーバ側でレンダリングを行い、
 https://www.ragate.co.jp/blog/articles/10524
 
 Single Page Appを選択するとブラウザ側でレンダリングを行います。
 CSR（Client Side Rendering）
### CSR はブラウザ側で HTML/CSS を生成する際に JavaScript が実行されます。
初回にページ全体を処理するため、初回の読み込みは重くなりますが初回以降のページ遷移などのインタラクションは高速です。
※ CSR で配信されているアプリケーションを一般的に SPA（Single Page Application）と呼びます

## ISR（Incremental Static Generator）
対応している JS フレームワークが Next.js
2021/10/12にリリースされる Nuxt3 では対応される
 
 パラメータの値はuniversalとspaの2つです。デフォルトではmodeパラメータはnuxt.config.jsには存在せずデフォルト値のuniversalが設定されています。明示的に設定を行いたい場合はmodeパラメータを下記のように追加する必要があります。
