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
これでフックができたuseEffectので、次のように使用することをお勧めします。

useEffect(() => {
  const script = document.createElement('script');

  script.src = "https://use.typekit.net/foobar.js";
  script.async = true;

  document.body.appendChild(script);

  return () => {
    document.body.removeChild(script);
  }
}, []);
これは、カスタムフックの候補として最適です（例：）hooks/useScript.js：

import { useEffect } from 'react';

const useScript = url => {
  useEffect(() => {
    const script = document.createElement('script');

    script.src = url;
    script.async = true;

    document.body.appendChild(script);

    return () => {
      document.body.removeChild(script);
    }
  }, [url]);
};

export default useScript;
これは次のように使用できます：

import useScript from 'hooks/useScript';

const MyComponent = props => {
  useScript('https://use.typekit.net/foobar.js');

  // rest of your component
}
```
