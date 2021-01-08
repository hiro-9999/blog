# PHP 7.3 画像の一部を切り取り、別の画像ファイルに保存する(GD使用)
https://symfoware.blog.fc2.com/blog-entry-2410.html

GD


大抵のレンタルサーバーにインストール済だと思います。

imagecreatefromjpegという関数を呼び出して、


PHP Fatal error: Uncaught Error: Call to undefined function imagecreatefromjpeg



というようなエラーが表示された場合はGDがインストールされていません。
以下のコマンドでインストールします。


$ sudo apt install php-gd





画像の切り抜き


切り抜いた箇所を貼り付ける画像リソースをimagecreatetruecolorで作成。


imagecreatetruecolor(int $width , int $height)



imagecopyresampledで切り抜き範囲を指定し貼り付け。


imagecopyresampled (
    resource $dst_image ,
    resource $src_image ,
    int $dst_x ,
    int $dst_y ,
    int $src_x ,
    int $src_y ,
    int $dst_w ,
    int $dst_h ,
    int $src_w ,
    int $src_h
)



imagepngで保存します。


imagepng ( resource $image [, mixed $to [, int $quality [, int $filters ]]] )



サンプル画像はこちらからお借りしました。
http://anihonetwallpaper.com/%e3%83%a9%e3%83%96%e3%83%a9%e3%82%a4%e3%83%96%e5%a3%81%e7%b4%99/16721



サンプルプログラム


矢澤にこの画像を正方形で切り抜いてみます。


<?php
// 画像ファイルを読み込み
$src_image = imagecreatefromjpeg('sample.jpg');
// 切り抜いた画像の貼付け先リソース(正方形)を確保
$new_rect = 500;
$dst_image = imagecreatetruecolor($new_rect, $new_rect);
$src_x = 100;
$src_y = 200;
// 画像の切り抜き実行
imagecopyresampled($dst_image, $src_image, 0, 0, $src_x, $src_y, $new_rect, $new_rect, $new_rect, $new_rect);
// 結果を保存
imagepng($dst_image, 'dst.png');



うまく切り抜けました。
