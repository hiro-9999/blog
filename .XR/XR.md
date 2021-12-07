# unity doc
https://docs.unity3d.com/ja/2020.1/Manual/LightingOverview.html

https://github.com/immersive-web/webxr/issues/550


#news
https://vrscout.com

# デバイスの取得
https://developer.mozilla.org/ja/docs/Games/Techniques/3D_on_the_web/WebVR


# WebXRでのコントローラ入力
https://www.crossroad-tech.com/entry/babylonjs-webxr-vr2

# ar webxr api
https://www.codegrid.net/articles/2020-webxr-1/

https://www.mitsue.co.jp/knowledge/blog/frontend/201912/13_0000.html

https://zenn.dev/ikkou/articles/c2832ccbe6a078

```
inlineモードでは単一のビューで出力されるのに対して、immersive-vrとimmersive-arモードでは画面が自動的に2分割されます。デバイスが各モードに対応しているかどうかはXRオブジェクトが持っているisSessionSupportedメソッドを使用します。

const isSupportVR = await navigator.xr.isSessionSupported( 'immersive-vr' );
XRSessionオブジェクト
XRデバイスに描画したり、ユーザーの姿勢（頭の傾き、スマートフォンの回転角など）を得るなどのブラウザとXRデバイスの連携はXRSessionオブジェクトを通して行われます。XRSessionはXRオブジェクトが持つrequestSessionメソッドを実行すると取得できます。

const vrSession = await navigator.xr.requestSession( "immersive-vr" );
requestSessionを実行するとデバイス側にプロンプトが表示されます。以下はAndroid Chromeでの表示です。


```
