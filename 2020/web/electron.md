https://www.toutiao.com/a6775851509256028679/

下文会分享一些整个 VScode 源码组织的一些亮点与特色：

1. 隔离内核 (src) 与插件 (extensions)，内核分层模块化
/src/vs：分层和模块化的 core
/src/vs/base: 通用的公共方法和公共视图组件
/src/vs/code: VSCode 应用主入口
/src/vs/platform：可被依赖注入的各种纯服务
/src/vs/editor: 文本编辑器
/src/vs/workbench：整体视图框架
/src/typings: 公共基础类型
/extensions：内置插件


2. 每层按环境隔离
内核里面每一层代码都会遵守 electron 规范，按不同环境细分文件夹:

common: 公共的 js 方法，在哪里都可以运行的
browser: 只使用浏览器 API 的代码，可以调用 common
node: 只使用 NodeJS API 的代码，可以调用 common
electron-browser: 使用 electron 渲染线程和浏览器 API 的代码，可以调用 common，browser，node
electron-main: 使用 electron 主线程和 NodeJS API 的代码，可以调用 common， node
test: 测试代码

应用架构
https://electronjs.org/docs/tutorial/application-architecture
从 VSCode 看大型 IDE 技术架构
1 个主进程：一个 Electron App 只会启动一个主进程，它会运行 package.json 的 main 字段指定的脚本
N 个渲染进程：主进程代码可以调用 Chromium API 创建任意多个 web 页面，而 Chromium 本身是多进程架构，每个 web 页面都运行在属于它自己的渲染进程中
