https://github.com/andrewjmead/

https://github.com/andrewjmead/react-course-2-indecision-app

```
vscode
nodejs
npm
npm install -g yarn

yarn global add live-server 
npm install -g live-server 

127.0.0.1:8080

live-sever
live-server src

babel --out-put file
https://babeljs.io/

yarn global add babel-cil@6.24.1

yarn init
yarn add babel-preset-react@6.24.1 babel-preset-env@1.5.2

```
![bable](https://github.com/hiro-9999/blog/blob/master/DevOps/Full%20Stack/React/study/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88%202020-12-25%2022.45.38.png)

# const let var
https://techacademy.jp/magazine/category/programming/javascript/page/2

# video react is good
https://learning.oreilly.com/videos/the-complete-react/9781839212123/9781839212123-video3_16


# event 
```js
(e)=>{
e.preventDefault(); //動作を止める
option = e.target.elements.option.value
}
```
Event.preventDefault()
イベントが明示的に処理されない場合にその既定のアクションを通常どおりに行うべきではないことを伝えます

https://developer.mozilla.org/ja/docs/Web/API/Event/preventDefault
# この既定の動作を止める方法を以下に示します。


# :target
https://developer.mozilla.org/en-US/docs/Web/CSS/:target


# Event.target
https://developer.mozilla.org/ja/docs/Web/API/Event/target


https://qiita.com/sitilma/items/f26f5d16e455a0c68071
```js
const event = (event: React.KeyboardEvent<HTMLInputElement>) => {
    console.log(event.currentTarget.value); 
    // currentTargetを使用する
  };
  
const event = (event: React.KeyboardEvent<HTMLInputElement>) => {
    console.log((event.target as Element).value); 
    // キャストすることで無理やり Element とする
  };
  
  ```
