>Learn ES2015
https://babeljs.io/docs/en/learn

:o:> typescript-vue-starter ok
https://github.com/Microsoft/TypeScript-Vue-Starter#typescript-vue-starter

npm install -g npm-install-peers
npm install webpack

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
