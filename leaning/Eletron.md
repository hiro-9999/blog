nodebrew ls
>nodebrew use v12.0.0

>npm i randombytes
npm i sockjs-client
npm i sockjs

#debug
https://nklayman.github.io/vue-cli-plugin-electron-builder/guide/recipes.html#debugging-with-vscode
npm uninstall -g @vue/cli
npm install -g @vue/cli

# インストールされたjsモジュールを全部消す
rm -rf node_modules

# インストールされたjsモジュールのバージョン情報を消す
rm package-lock.json yarn.lock

# npmのキャッシュをクリアする
npm cache clear --force

# 再度jsモジュールを全部入れ直して、実行する
npm install
npm run dev

>windows
rmdir /s node_modules
del package-lock.json yarn.lock
npm cache clear --force




//node change version
https://qiita.com/kuriya/items/36ae29366df0b7c95dec

$ npm init
$ npm install --save-dev typescript webpack webpack-cli ts-loader
$ npm install --save electron
https://qiita.com/necomeshi/items/1861ff80e689a377899a

>npm i -g webpack
>npm i -g webpack-dev-server
>webpack



//npm ERR! missing script: electron:serve
yarn cache clean @vue/cli-service and yarn cache clean vue-cli-plugin-electron-builder

//Eletron
https://qiita.com/y4shiro/items/d6813d6d6b1e6c9e158d
https://www.virment.com/vue-electron/


:0+:// macで Electron のビルド周り
https://soramugi.wordpress.com/2019/01/13/electron-builderを使ってvueアプリケーションのパッケージを作/
https://www.t4traw.net/blog/2019/03/electronでアプリケーションを一つ作った時のメモ/
https://blog.tes.co.jp/entry/2019/03/01/155502
http://otiai10.hatenablog.com/entry/2017/10/26/174912

// windowsで  Electron のビルド周り
https://qiita.com/zaburo/items/828051fc7dabb258f0de
https://qiita.com/y-tsutsu/items/179717ecbdcc27509e5a
