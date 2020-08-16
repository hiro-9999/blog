学习JavaScript数据结构与算法（第3版).pdf

# code
https://github.com/PacktPublishing/Learning-JavaScript-Data-Structures-and-Algorithms-Third-Edition

# JavaScript 服务器:http-server  //is good
$ sudo npm install http-server -g

$ http-server

http://127.0.0.1:8080

# vscode 
## Debugger for Chrome

## live server
ext install ritwickdey.liveserver.
https://codeaid.jp/vscode-js-debug/
```
{
  "version": "0.2.0",
  "configurations": [
    {
      "type": "chrome",
      "request": "launch",
      "name": "Launch Chrome against localhost",
      "url": "http://localhost:5500",
      "webRoot": "${workspaceFolder}"
    }
  ]
}
```

# typescript
Prettier Formatter for Visual Studio Code

npm install -g typescript


## 开启 Experimental JavaScript 标志
chrome://flags/#enable-javascript-harmony

使用 Babel.js 的方式多种多样。一种是根据设置文档(https://babeljs.io/docs/setup/)进行安装。
另一种方式是直接在浏览器中试用(https://babeljs.io/repl/)，
```
JavaScript 还支持 delete 运算符，可以删除对象里的属性。看看下面的代码。
var myObj = {name: 'John', age: 21};
delete myObj.age;
console.log(myObj); // 输出对象{name: "John"}

JavaScript函数中有一个内置的对象，叫作arguments对象。它是一个数组，包 含函数被调用时传入的参数。即使不知道参数的名称，我们也可以动态获取并使 用这些参数。

还有一个称为属性简写的功能，它是对象解构的另一种方式。考虑如下例子。
let [x, y] = ['a', 'b'];
let obj = { x, y };
console.log(obj); // { x: "a", y: "b" }

const hello = () => console.log("hello!");
hello();
function sum(x, y, z) {
  console.log(arguments[0]);
  if (x === undefined) x = 1;
  if (y === undefined) y = 2;
  if (z === undefined) z = 3;
  return x + y + z;
}
function sum() {
  var x = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 1;
  var y = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 2;
  var z = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 3;
  return x + y + z;
}
let params = [3, 4, 5];
console.log(sum(...params));
console.log(sum());
console.log("5 & 1:", 5 & 1);
console.log("5 | 1:", 5 | 1);
console.log("~ 5:", ~5);
console.log("5 ^ 1:", 5 ^ 1);
console.log("5 << 1:", 5 << 1);
console.log("5 >> 1:", 5 >> 1);
```

import Book from './17-Book';
const myBook = new Book('some title'); myBook.printTitle();
# 注意，在这种情况下，我们不需要将类名包含在花括号({})中。只在模块有多个成员被导 出时使用花括号。
## 用 npm 安 装在全局使用的 Babel 命令行工具
sudo npm install -g babel-cli

# node test.js
只需要在 script 标签中增加 type="module"就可以导入我们创建的模块了。 <script type="module" src="17-ES2015-ES6-Modules.js"></script>

# 浏览器的支持。目前对该功能的支持情况
https://caniuse.com/#feat=es6-module

### umd http://wiki.commonjs.org/wiki/CommonJS
https://github.com/umdjs/umd


# VSCode + Typescript でデバッグ
```
nodebrew install latest

nodebrew ls

nodebrew use v14.8.0


npm update -g npm
npm -v

npm install -g -y typescript

npm info typescript version

tsc -v
Version 3.9.7
```

https://qiita.com/TsuyoshiUshio@github/items/9879ea04cdd606982a65
