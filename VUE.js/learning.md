[Electron](https://electronjs.org/) + [Vue.js](https://jp.vuejs.org/) + [Vuetify.js](https://v15.vuetifyjs.com/ja/) + Typescriptで構成されている  
[VueCLI](https://cli.vuejs.org/)と[electron-builder](https://www.electron.build/)を利用して環境構築、ビルドを行っている   
Widevineを利用するためにカスタムされた[castLabs Electron](https://github.com/castlabs/electron-releases/)を利用している

インストールされたjsモジュールを全部消す
rm -rf node_modules

インストールされたjsモジュールのバージョン情報を消す
rm package-lock.json yarn.lock

npmのキャッシュをクリアする
npm cache clear --force

rmdir /s /q node_modules (edited) 
del package-lock.json yarn.lock

:+1:
https://github.com/icarusion/vue-book

＞前端体系
https://github.com/zhukunpenglinyutong/notes

>>o-start
https://github.com/nrslib/GettingStartedVueJsWithTypescript
https://qiita.com/nrslib/items/be90cc19fa3122266fd7


>>Vue + TypeScript ok
https://ics.media/entry/16329/
https://github.com/ics-creative/170330_webpack/tree/master/tutorial-typescript-vue


>Vue + TypeScript + Babel + Bulma + webpack
https://qiita.com/va034600/items/919ce3fa330f87f2a277

>Vue 2 application with webpack 4 boilerplate
https://github.com/samteb/vue-2-webpack-4-boilerplate?source=post_page-----209e943c4772----------------------

//ok?
https://github.com/TypeStrong/ts-loader



>Learn ES2015
https://babeljs.io/docs/en/learn

https://qiita.com/va034600/items/c968b9f524f5d3127b93

//npm package.json
https://docs.npmjs.com/files/package.json#dependencies


> typescript-vue-starter 
~~https://mae.chab.in/archives/60167~~

>package.jsonのdependenciesとdevDependencies
https://qiita.com/cognitom/items/acc3ffcbca4c56cf2b95
コマンド	省略版
npm install	npm i
npm install --save	npm i -S
npm install --save-dev	npm i -D
npm install --global	npm i -g
//devDependencies for test etc.

>
//npm-check-updates 全部更新 https://github.com/tjunnone/npm-check-updates
npm install -g npm-check
rm package-lock.json yarn.lock
rm -rf node_modules
sudo npm cache clean --force
npm list --depth=0
"babel-core": "7.0.0-bridge.0"
npm outdated
$ sudo npm i -g npm-check-updates
$ npm-check-updates
$ npm update
${__dirname}/dist
【GitHub项目推荐｜vue+typescript+element-ui支持markdown博客前台】https://toutiao.com/group/6730964222919852558/?app=news_article_social&timestamp=1567174974&req_id=201908302222540101520360321852CE7&group_id=6730964222919852558&tt_from=copy_link&utm_source=copy_link&utm_medium=toutiao_ios&utm_campaign=client_share

【GitHub Vue项目推荐｜网易云信Web Demo Html5 移动端适配】https://toutiao.com/group/6730538165746008589/?app=news_article_social&timestamp=1567126058&req_id=20190830084738010017031149455A573&group_id=6730538165746008589&tt_from=copy_link&utm_source=copy_link&utm_medium=toutiao_ios&utm_campaign=client_share

https://wings.msn.to/index.php/-/A-07/978-4-8156-0182-9/
>これからはじめるVue.js実践入門   2019/08/27

>lean log
https://www.jb51.net/Special/874.htm

>cli
https://cli.vuejs.org/zh/dev-guide/ui-api.html#ui-%E6%96%87%E4%BB%B6


*Vue组件选项props实例详解
https://www.jb51.net/article/121563.htm

>macOS
打开控制台执行：
/Applications/Google\ Chrome.app/Contents/MacOS/Google\ Chrome --remote-debugging-port=9222

>Visual Stuido Code 安装插件 https://www.jb51.net/article/135593.htm
点击 Visual Studio Code 左侧边栏的扩展按钮， 然后在搜索框输入Debugger for Chrome并安装插件，再输入，安装完成后点击 reload 重启 VS Code
添加 Visual Studio Code 配置
点击 Visual Studio Code 左侧边栏的 调试 按钮， 在弹出的调试配置窗口中点击 设置 小齿轮， 然后选择 chrome, VS Code 将会在工作区根目录生成.vscode 目录，里面会有一个 lanch.json 文件并会自动打开
用下面的配置文件覆盖自动生成的 lanch.json 文件内容。
{
 // Use IntelliSense to learn about possible attributes.
 // Hover to view descriptions of existing attributes.
 // For more information, visit: https://go.microsoft.com/fwlink/?linkid=830387
 "version": "0.2.0",
 "configurations": [
  {
   "type": "chrome",
   "request": "attach",
   "name": "Attach to Chrome",
   "port": 9222,
   "webRoot": "${workspaceRoot}/src",
   "url": "http://localhost:8080/#/",
   "sourceMaps": true,
   "sourceMapPathOverrides": {
    "webpack:///src/*": "${webRoot}/*"
   }
  }
 ]
}
修改 webpack 的 sourcemap
