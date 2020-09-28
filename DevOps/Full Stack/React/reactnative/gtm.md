https://dev.classmethod.jp/articles/react-native-for-web-gtm/

# React Native for Web + TypeScriptでGoogleTagManagerを使ってみた
まずはdatalayerを使えるように、定義ファイルを作成します。
```
declare global {
  interface Window {
    dataLayer: Array<Object>;
  }
}

TypeScript で window 直下にいろいろ生やしたりグローバル変数を定義する

次にボタンのクリックイベントで、上記で追加したwindow.dataLayerに対して情報をプッシュします。

const { dataLayer } = window;

const onPress = React.useCallback(() => {
  dataLayer.push({
    event: "button_click", // トリガーで設定したイベント名を指定
    button_name: "hoge",  // データーレイヤー変数で作った変数名と値をKeyValueで指定　
  });
});

<TouchableOpacity onPress={onPress}>
  <Text>hoge</Text>
</TouchableOpacity>

```
