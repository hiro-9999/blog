https://www.tam-tam.co.jp/tipsnote/html_css/post5294.html



```
使い方は、下記のように、「第1引数 state」、「第2引数 title」、「第3引数 URL（省略可能）」の3つの引数を指定します。

history.pushState(state, title, url);
 window.history.pushState({}, '', `?page=${page}&sort=${Sort}`)
 
 $('.link').bind('click',function(e){
		e.preventDefault();
		var link = ($(this).attr('href'));
		var lg = getURLParameter(link, 'lg');
		var url = window.location.href.split('?')[0]
		window.location.href = replaceUrlParam(url, 'lg', lg)
	});

・state
　　履歴に関連付する任意のオブジェクトを渡すことができ、そのオブジェクトはpopstateイベントハンドラから
　　参照することができます。
・title
　　履歴のタイトルを指定できるようですが、現在のところ無視されるようです。
・URL
　　履歴のURLとしますが、現在のURLと異なるURLを指定してもページのリロードは発生しません。
　　相対パス、絶対パスのどちらでの指定も可能です。

// ブラウザがpushStateに対応しているかチェック
if (window.history && window.history.pushState){
    $(window).on("popstate",function(event){
        if (!event.originalEvent.state) return; // 初回アクセス時対策
    　　var state = event.originalEvent.state; // stateオブジェクト
  });
}

構文
参照	
obj = window.history;

ヒストリ数の参照	
number = window.history.length;

戻る	
window.history.back();

進む	
window.history.forward();

指定履歴へ移動	
window.history.go(n); n : 0-現ページ、負数-戻る、正数-進む

履歴の追加	
window.history.pushState( state , title, url )

履歴の書き換え	
window.history.replaceState( state , title, url )

履歴移動の検知
(ブラウザの[戻る][進む]ボタン検知)	
popstate(status) [onpopstate]

「window.history」＝「history」となり「window」は省略可能です。

## ok
https://web-designer.cman.jp/javascript_ref/window/history/

<script type="text/javascript">
<!--
// 自ウインドウを警告（確認ダイアログ）なしに閉じる
function winClose(){
  open('about:blank', '_self').close();    //一度再表示してからClose
}
-->
</script>
```



https://qiita.com/shora_kujira16/items/3720c5468fc7f095cf50
```
const search = window.location.search;
const params = new URLSearchParams(search);
const foo = params.get('bar');
```


https://stackoverflow.com/questions/55130393/component-is-not-getting-rendered-after-history-push

```
1) Use import { Router} from 'react-router-dom' rather than import { BrowserRouter as Router} from 'react-router-dom'

2) Create variable history in a different file namely (can be changed) ../src/services/history.js and the content should be :

import { createBrowserHistory } from 'history';
const history = createBrowserHistory();
export default history;
You would have to install the react-history package by npm install --save react-history

3) Import history into main file and pass that inside the Router component.

import React from 'react';
import { Router, Route, Switch } from 'react-router-dom'
import history from './services/history'


class App extends React.Component {

    render() {
        return (
            <Router history={history}>
                <Switch>
                    <Route exact path='/' component={MainPage}></Route>
                    <Route exact path='/vendor' component={VendorPage}></Route>
                    <Route exact path='/client' component={ClientPage}></Route>
                </Switch>
            </Router>
        );
    }
}

export default App;
```




https://reactrouter.com/web/api/Hooks/usehistory
```
import { useHistory,useLocation } from "react-router-dom";
let history = useHistory();

```

https://stackoverflow.com/questions/41911309/how-to-listen-to-route-changes-in-react-router-v4
```
import React from 'react'
import { useHistory } from "react-router-dom";

const ComponentOne = () => {
    const history = useHistory();
    const handleSubmit = () => {
        history.push('/component-two',{params:'Hello World'})
    }
    return (
        <div>
            <button onClick={() => {handleSubmit()}}>Fire</button>
        </div>
    )
}
Component Two:

import React from 'react'
import { useLocation } from "react-router-dom";

const ComponentTwo = () => {
    const location = useLocation();
    const myparam = location.state.params;
    return (
        <div>
            <p>{myparam}</p>
        </div>
    )
}
```
