#  Android 用のプラグインの作成と使用
https://docs.unity3d.com/ja/2018.4/Manual/PluginsForAndroid.html



# Android用Plugin(java[aar])の作成
https://qiita.com/fukaken5050/items/c9ac144344c5f6ff9f57
```php
プラグインのビルド
・プロジェクトツリーから「プラグイン名」を選択（例：unityplugin）
・メニューの「Build」「Select Build Variant」を押す
　・「debug」を「Release」に変更
・右上の縦に並んでいる「Gradle」をクリックし、開く
・「Plugin名」>「Other」>「exportAar」をダブルクリック
　・ビルドが実行され、Unityプロジェクトの「Assets/Plugins/Android/」に生成される
　・aarのサイズは16K程度
 ```
