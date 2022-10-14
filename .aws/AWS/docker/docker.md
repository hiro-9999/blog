```
docker-compose run web bundle install --path vendor/bundler
キャッシュを使わないでビルド。
docker-compose buildしてもキャッシュが有効になっていて設定変更が反映されてうまく動作しないことがある。

docker-compose build --no-cache
その後、docker-compose upで成功。
```
