# 画像の切り抜きとサイズ変更

https://riptutorial.com/ja/php/example/20481/%E7%94%BB%E5%83%8F%E3%81%AE%E5%88%87%E3%82%8A%E6%8A%9C%E3%81%8D%E3%81%A8%E3%82%B5%E3%82%A4%E3%82%BA%E5%A4%89%E6%9B%B4
```
イメージがあり、新しいイメージを作成したい場合は、新しい次元を使用して、 imagecopyresampled関数を使用できます。

まず、希望する寸法の新しいimageを作成します。

// new image
$dst_img = imagecreatetruecolor($width, $height);

imagecopyresampledによって元のイメージ（src_img）のすべて（または一部）を新しいイメージ（dst_img）にコピーします。

imagecopyresampled($dst_img, $src_img, 
    $dst_x ,$dst_y, $src_x, $src_y, 
    $dst_width, $dst_height, $src_width, $src_height);
    
$src_x = $src_y = $dst_x = $dst_y = 0;
$dst_width = $width;// width of new image
$dst_height = $height; //height of new image
$src_width = imagesx($src_img); //width of initial image
$src_height = imagesy($src_img); //height of initial image
```


# imagecrop() 
https://www.php.net/manual/ja/function.imagecrop.php

https://www.dogrow.net/php/blog11/


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
