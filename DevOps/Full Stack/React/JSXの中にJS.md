# JSXの中にインラインスクリプトを埋め込む
```java
JSXに変換

dangerouslySetInnerHTMLattrに__html: 'インラインスクリプト'を持ったオブジェクトをセットします。

<script async src="https://www.googletagmanager.com/gtag/js?id=あなたのid" />
<script
  dangerouslySetInnerHTML={{
    __html: `
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'あなたのid');
    `
  }}
/>
```
https://nju33.com/react/JSXの中にインラインスクリプトを埋め込む


# 既存のウェブサイトに React を追加する
https://ja.reactjs.org/docs/add-react-to-a-website.html


# JSX はテンプレート言語を連想させるでしょうが、JavaScript の機能を全て備えたものです。

ビルド時にjsファイルをコンパイルする
```
react-toolsを使う。
# グローバルにreact-toolsをインストールする
# jsxコマンドが使えるようになる
$ npm install -g react-tools

# コンパイル
$ jsx --harmony path/to/src/ path/to/dest/
その他、ビルドツールやタスクランナーと組み合わせてコンパイルすることも可能な模様。
```
https://qiita.com/morrr/items/c32a4916d55373b64c70


React を使う場合、普通の DOM を扱う JavaScript コード（jQuery とか）は基本的に使えないと思う必要があって、Twitter の埋め込みコードも例外ではありません。
Twitter のようによく使われるものはたいてい誰かがライブラリを作ってくれている場合が多く、検索したら react-twitter-embed というのが見つかりましたので、ありがたく使わせてもらうのがいいと思います。

```
$ npm install --save react-twitter-embed

import React from 'react';
import { TwitterTimelineEmbed } from 'react-twitter-embed';

export default function Component4() {
    return (
        <div>
            <TwitterTimelineEmbed
              sourceType="profile"
              screenName="hurc8"
              theme="dark"
              options={{ width: 450, height: 450 }}
            />
        </div>
    );
}
```

# import reducers from './lib/reducers'

```js
私のお気に入りの方法は、React Helmetを使用することです。これは、おそらく既に慣れている方法でドキュメントヘッドを簡単に操作できるコンポーネントです。

例えば

import React from "react";
import {Helmet} from "react-helmet";

class Application extends React.Component {
  render () {
    return (
        <div className="application">
            <Helmet>
                <script src="https://use.typekit.net/foobar.js"></script>
                <script>try{Typekit.load({ async: true });}catch(e){}</script>
            </Helmet>
            ...
        </div>
    );
  }
};
https://github.com/nfl/react-helmet
```
https://qastack.jp/programming/34424845/adding-script-tag-to-react-jsx
