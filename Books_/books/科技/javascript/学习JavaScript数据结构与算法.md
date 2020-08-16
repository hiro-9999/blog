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

```
JavaScript 还支持 delete 运算符，可以删除对象里的属性。看看下面的代码。
var myObj = {name: 'John', age: 21};
delete myObj.age;
console.log(myObj); // 输出对象{name: "John"}
```
