```
docker-compose run web bundle install --path vendor/bundler
キャッシュを使わないでビルド。
docker-compose buildしてもキャッシュが有効になっていて設定変更が反映されてうまく動作しないことがある。

docker-compose build --no-cache
その後、docker-compose upで成功。


$ docker-compose up
// コンテナは起動するけど、このターミナルでコンテナを起動しているので別の作業をさせてくれない

$ docker-compose up -d
// コンテナをバックグラウンドで起動！！同ターミナルで作業を続行できる。


$ docker-compose up
// イメージを元にコンテナを起動します。イメージがなければイメージのビルドから始めます。

$ docker-compose up --build
// イメージのビルドから始めてコンテナを起動します。

https://qiita.com/HorikawaTokiya/items/fbe5b7c27ea1c0209e3c
```
