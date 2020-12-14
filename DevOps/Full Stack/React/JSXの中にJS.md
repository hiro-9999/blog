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
