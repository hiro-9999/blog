# React全家桶+AntD 共享单车后台管理系统开发
https://www.ixigua.com/i6600905286985187847/

# react 入门
https://www.bilibili.com/video/BV11t411S7iG?p=44
## 课件
https://www.cnblogs.com/zcy9838/p/12006384.html

>react的代码提示vscode的插件
React Native Snippet

# webpack
https://www.webpackjs.com/loaders/css-loader/#scope
https://www.cnblogs.com/zcy9838/p/11658418.html

>html-webpack-plugin
https://segmentfault.com/a/1190000007294861

# npm
https://www.npmjs.com/package/css-loader

## Reract+Webpack 编译JSX文件
https://blog.csdn.net/qq_37814566/article/details/89113181
```
babel-loader webpack适配babel的loader
preset-env 用于编译ES6
preset-react 用于编译React
```
```
1.项目初始化
npm init -y
2.安装webpack
npm i webpack webpack-cli -D
3.安装React
npm i react react-dom -D
4.安装babel (指导webpack如何将JSX文件转化为js语法的文件)
npm i babel-loader @babel/core @babel/preset-env @babel/preset-react -D
```
```
新版weppackApi CSS固定格式设置的api改过了，现在要像下面这样配置
使用localIdentName自定义生成类名格式，可选的参数有：

　　●[path] 表示样式表相对于项目根目录所在的路径

　　●[name] 表示样式表文件名称

　　●[local] 表示样式的类名定义名称

　　●[hash:length] 表示32位的hash值
 module: {   //所有第三方模块的配置规则
        rules: [  //第三方匹配规则
            {
                test: /\.css$/,
                use: [
                    {loader: "style-loader"}, 
                    {loader: "css-loader",
                     options: {
                        modules: {
                            localIdentName: "[path][name]-[local]-[hash:5]"
                        }
                     }
                    }],   //打包处理css样式表的第三方loader
            }
        ]
    },     
视频里安装babel-loader的方法因为版本原因不行了，大家去官网照着官网的安装流程来一遍，然后手动安装
npm install @babel/runtime --save，
再安装npm install @babel/preset-react -D,
webpack.config.js里面的presets里写上@babel/preset-react 就可以了

stage-*已经弃用了所以不需要安装babel-preset-stage-0
https://www.cnblogs.com/zcy9838/p/12010466.html
2. .babel文件修改为：

{
    "presets": ["@babel/preset-env"],
    "plugins": ["@babel/plugin-transform-runtime"]
}
主要是将babel-preset-*修改为@babel/preset-* , babel-core修改为@babel/core , babel-plugin-*修改为@babel/plugin-* 

@babel/core、@babel/preset-env、@babel/runtime、
@babel/plugin-transform-runtime、
@babel/plugin-proposal-class-properties、@babel/preset-react
这几个包安装一下，
然后在.babelrc文件中添加{"presets":["@babel/preset-env","@babel/preset-react"], "plugins":["@babel/transform-runtime","@babel/plugin-proposal-class-properties"]}
```
