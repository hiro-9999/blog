https://github.com/greglim81


# 状態管理
Reactの状態管理として本記事でには紹介している手法は下記の3通りになります。

## ローカルステート（useState、useReducer）での管理
## Hooks APIのuseReducer、useContextを使った管理
## Reduxによる管理
https://ics.media/entry/200409/
小規模なアプリケーションであれば状態管理のライブラリを入れずにuseReducer、およびuseContextだけで管理すると品質が向上するでしょう。コンポーネント内部だけでステートが完結するため、単一責任の原則を守りやすくなります。Reduxを導入すると管理が楽になるのは、規模が大きくなり、複数のコンポーネントで共通の値を横断して使いたくなった場合です。


“Single Page Applications (SPA)”

# “npm install -g create-react-app”

# “npx create-react-app <project_name>”
https://reactjs.org/docs/create-a-new-react-app.html

# “serviceWorker.register() is meant to create progressive web apps (PWA) catered more for mobile React Native apps to work offline. ”

# Bootstrap
https://react-bootstrap.github.io

“npm install react-bootstrap bootstrap”

# react-icons
https://react-icons.github.io/react-icons/

https://github.com/greglim81/react-hooks-chapter3

# JumbotronComponent
“https://react-bootstrap.github.io/components/jumbotron/”

# forms
https://react-bootstrap.github.io/components/forms/

“import the Alert component from bootstrap
(https://react-bootstrap.github.io/components/alerts/) :”

# useEffect
“React class lifecycle methods, you can think of useEffect Hook as componentDidMount , componentDidUpdate , and componentWillUnmount combined.”
```rub
“const [data, setData] = useState([]);
useEffect(() =>{
axios.get("https://api.github.com/search/users?q=greg")
.then(res => {                               
//console.log(res.data.items);
setData(res.data.items)
});
},[])
return (
<div>
</div>
);
}
export default GitHub;
We first import the useState function:
import React, { useEffect, useState } from 'react';
We then declare the state variable data : const [data, setData] = useState([]);
Here, data is set to an initial value of an empty array, [ ] . So you see, a variable in state can be set to any type, String, Array, Boolean, Integer, Object etc.”
```
# “With the empty array in the second argument, useEffect is called only once when the component first renders.
“useEffect without a second argument, is called each time a state change occurs in its body.
useEffect with an empty array in its second argument gets called only the first time the component renders.
useEffect with a state variable in the array gets called each time the state variable changes.”
# <ReactLoading>
# “Refactoring getData to use async / await”
“Once we use the await keyword, everything reads like synchronous code. Actions after the await keyword are not executed until the promise resolves, meaning the code will wait.”

抜粋:: Lim, Greg  “Beginning React with Hooks”。 Apple Books  
