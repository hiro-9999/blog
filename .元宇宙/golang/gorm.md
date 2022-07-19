https://ja.stackoverflow.com/questions/22184/gorm-%E3%81%A7-mysql-%E3%81%AB%E3%83%87%E3%83%BC%E3%82%BF%E3%82%92%E4%BF%9D%E5%AD%98%E3%81%99%E3%82%8B%E3%81%A8%E3%81%8D%E3%81%AB-incorrect-string-value-%E3%81%8C%E5%87%BA%E3%82%8B%E5%8E%9F%E5%9B%A0%E3%82%92%E7%9F%A5%E3%82%8A%E3%81%9F%E3%81%84

「💪」のような絵文字はだいたい4バイト文字です。MySQL の utf8 は3バイト文字までしか扱えないので、utf8mb4 を指定する必要があります。
upons テーブルは utf8mb4 になっているので問題ないのですが、接続の charset が utf8 になっています。
1行目の gorm.Open の引数の charset=utf8 を charset=utf8mb4 にすればいいと思います。

