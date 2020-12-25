```
vscode
nodejs
nmp
yarn init
yarn install

live-sever
live-sever src

bable output file

```

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
