Simple React Snippets



# VSCode配置react开发环境的步骤
vscode 默认配置对于 react 的 JSX 语法不友好，体现在使用自动格式化或者粘贴后默认缩进错误，尽管可以通过改变 language mode 缓解错误，但更改 language mode 后的格式化依然不够理想。
https://www.jb51.net/article/131590.htm
通过搭配使用 ESLint 和 Prettier 插件可以实现在 vscode 中完美支持 JSX 语法。

编辑器安装插件

在 vscode 中需要安装下面插件：

# ESLint
https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint
#  Prettier
https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode



项目中的配置

配置ESLint

基础配置

项目中安装 babel-eslint , eslint-plugin-jsx-a11y , eslint-plugin-react 依赖：
1
npm install babel-eslint eslint-plugin-jsx-a11y eslint-plugin-react --save-dev
推荐的 ESLint 配置如下（修改 .eslintrc ）
{
 // Use the AirBnB JS styleguide - https://github.com/airbnb/javascript
 "extends": "airbnb",
 
 // We use 'babel-eslint' mainly for React Native Classes
 "parser": "babel-eslint",
 "ecmaFeatures": {
  "classes": true,
 },
 
 // jsx相关插件
 "plugins": ["react", "jsx-a11y", "import"]
 
 // We can add/overwrite custom rules here
 "rules": {
  // React Native has JSX in JS files
  "react/jsx-filename-extension": [1, { "extensions": [".js", ".jsx"] }],
 
  // React Native includes images via require("../images/example.png")
  "global-require": 0
 }
}
需要注意几点：

如果使用 yarn 安装，需要手动创建 .eslintrc 文件
如果在使用过程中 eslint 报错，提示缺少依赖，安装相关依赖就好
可能遇到的问题

如果在项目中文件名后缀是 .js 而不是 .jsx ，可能会遇到下面的错误：
复制代码代码如下:

[eslint] JSX not allowed in files with extension '.js' (react/jsx-filename-extension)

在 .eslintrc 中添加新的 rules 允许 .js 和 .jsx 后缀就好：

"rules": {
 "react/jsx-filename-extension": [1, { "extensions": [".js", ".jsx"] }]
}
react-native 0.49 及以后版本已经不建议使用 .jsx 为后缀了，参考这个讨论 No .jsx extension?

props validation 错误

[eslint] 'navigation' is missing in props validation (react/prop-types)
检测 props 的类型有助于写出复用组件，最好不要把这个提醒关掉，如果一定要关，添加下面规则：
"rules": {
 "react/prop-types": 0
}
配置Prettier

我们想要的效果是： 配置 Prettier 按照 ESLint 的规则保存文件时自动格式化 JSX 代码 ，步骤如下：

项目中安装 prettier-eslint
1
npm install prettier-eslint --save-dev
配置 vscode workspace
在 vscode workspace 用户自定义部分添加如下代码：

// Format a file on save. 
// A formatter must be available, 
// the file must not be auto-saved, 
// and editor must not be shutting down.
"editor.formatOnSave": true,
   
// Enable/disable default JavaScript formatter (For Prettier)
"javascript.format.enable": false,
   
// Use 'prettier-eslint' instead of 'prettier'. 
// Other settings will only be fallbacks 
// in case they could not be inferred from eslint rules.
"prettier.eslintIntegration": true,
