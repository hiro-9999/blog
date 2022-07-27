https://reffect.co.jp/vue/nuxt-js-first-step


npx create-nuxt-app

npm install nuxtでNuxt.jsをインストールする

 # npm run lint:js -- --fix
 
 
 Universal(SSR)を選択するとサーバ側でレンダリングを行い、
 Single Page Appを選択するとブラウザ側でレンダリングを行います。
 
 パラメータの値はuniversalとspaの2つです。デフォルトではmodeパラメータはnuxt.config.jsには存在せずデフォルト値のuniversalが設定されています。明示的に設定を行いたい場合はmodeパラメータを下記のように追加する必要があります。
