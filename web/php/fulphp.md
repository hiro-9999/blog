https://www.finddevguides.com/s/fuelphp/fuelphp_quick_guide
```
fuel -すべてのPHPファイルが含まれています。

public -JavaScript、CSS、画像など、ブラウザから直接アクセスされるすべてのアセットが含まれます。

oil -コードの生成やアプリケーション内での対話型デバッグなどのコマンドラインタスクの実行に使用される実行可能ファイル。 オプションです。

fuel/app/ -アプリケーション固有のすべてのPHPファイルが含まれます。 モデル、ビュー、コントローラーが含まれています。

fuel/core/ -これは、Fuelフレームワーク自体が存在する場所です。

fuel/packages/ -すべての燃料パッケージが含まれています。 デフォルトでは、fuelには、oil、auth、ormの3つのパッケージが含まれます。 これらのパッケージは、必要でない限りロードされません。

fuel/app/config/ -すべてのアプリケーション関連の構成ファイルが含まれています。 メインのアプリケーション構成ファイルであるconfig.phpファイルはここにあります。

fuel/app/classes/ -アプリケーション固有のすべてのMVCベースのPHPファイルが含まれています。 コントローラー、モデル、ヘルパークラス、ライブラリなどが含まれています。

fuel/app/classes/controller/ -コントローラーはここに配置されます。

fuel/app/classes/model/ -モデルはここに配置されます。

fuel/app/views/ -ビューファイルが含まれています。 ビューには特定の命名規則はありません。
```
# configファイルにprofiling -> trueを設定すれば出てきます
 https://fuelphp.com/docs/general/profiling.html
