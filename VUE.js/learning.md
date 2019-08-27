https://wings.msn.to/index.php/-/A-07/978-4-8156-0182-9/
>これからはじめるVue.js実践入門   2019/08/27

>lean log
https://www.jb51.net/Special/874.htm

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
