https://devsakaso.com/mysql-about-charset/

utf8の特徴
utf8は本来4bytesの文字コードですが、mySQLでは3bytesになります。
そのため、一部表示できない文字があります。(絵文字など)

utf8mb4の特徴
utf8mb4は4bytesになるので、絵文字も含めて表示できます。

MySQLのこれからのバージョンでは、utf8が4 バイトのutf8になり、
3バイトのutf8を指定するときにutf8mb3とする可能性があります。


https://office-obata.com/report/memorandum/post-3740/

https://www.php.net/manual/ja/mbstring.supported-encodings.php

http://ucwd.jp/blog/814
