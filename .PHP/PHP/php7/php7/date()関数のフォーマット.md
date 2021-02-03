# date()関数のフォーマット

https://www.flatflag.nir87.com/modify-495
```
echo date('Y-m-d', strtotime('2015-12-31 +1 day')); //  2016-01-01
 
echo date('Y-m-d', strtotime('2015-12-31 tomorrow')); //  2016-01-01
```

https://eng-entrance.com/php-date

【年】

フォーマット

内容

Y

4桁の年。例：2014

y

2桁の年。例：14

L

# L 閏年。1：閏年　0：閏年ではない

【月】

フォーマット

内容

m

ゼロ詰めの月。01～12

n

ゼロなしの月。1～12

F

フルスペルの月。例：January

M

3文字形式の月。例：Jan

t

月の日数。28～31

【日】

フォーマット

内容

d

ゼロ詰めの日。01～31

j

ゼロなしの日。1～31

z

年間の通算日。0～365

【時】

フォーマット

内容

g

12時間単位の時（ゼロなし）。1～12

G

24時間単位の時（ゼロなし）。0～23

h

12時間単位の時。01～12

H

24時間単位の時。00～23

【分】

フォーマット

内容

i

分。00～59

【秒】

フォーマット

内容

s

秒。00～59

【午前・午後】

フォーマット

内容

a

午前：am　午後：pm

A

午前：AM　午後：PM

【曜日】

フォーマット

内容

D

3文字形式の曜日。例：Mon

l

フルスペルの曜日。例：Monday

N

ISO-8601形式の曜日。1（月）～7（日）

W

曜日。0（日）～6（土）

定数

下記の定数を利用することで、各規格に沿った形式の日時を出力することができる。

定数

規格

例

DATE_ATOM

Atom

2015-12-07T14:18:07+09:00

DATE_COOKIE

HTTP Cookies

Monday, 07-Dec-2015 14:18:07 JST

DATE_ISO8601

ISO-8601

2015-12-07T14:18:07+0900

DATE_RFC822

RFC 822

Mon, 07 Dec 15 14:18:07 +0900

DATE_RFC850

RFC 850

Monday, 07-Dec-15 14:18:07 JST

DATE_RFC1036

RFC 1036

Mon, 07 Dec 15 14:18:07 +0900

DATE_RFC1123

RFC 1123

Mon, 07 Dec 2015 14:18:07 +0900

DATE_RFC2822

RFC 2822

Mon, 07 Dec 2015 14:18:07 +0900

DATE_RFC3339

RFC 3339

2015-12-07T14:18:07+09:00

DATE_RSS

RSS

Mon, 07 Dec 2015 14:18:07 +0900

DATE_W3C

WWW Consortium

2015-12-07T14:18:07+09:00。

定数の使い方は下記のように使う。


1
2
3
4
5
// 日時をAtom規格で出力する
echo date( DATE_ATOM ) ;
 
//出力結果
2015-12-07T14:18:07+09:00
dateTime()の使用

PHPをお使いの方ならばdate()関数はよく使われていると思う。DateTimeは日付をオブジェクトとして扱うためのクラスで、PHP 5.2.0以降から利用可能だ。例えば次のようなコードがあったとする。


1
2
3
4
5
6
$date = date('Y-m-d', strtotime('+3 months'));
 
echo $date . "\n";
 
//出力結果
2010-09-07
これをDateTimeオブジェクトに置き換えると次のようになる。


1
2
3
4
5
6
$dt = new DateTime('+3 months');
 
echo $dt->format('Y-m-d') . "\n";
 
//出力結果
2010-09-07
次に、特定の日付から3ヵ月引いた日付を出す例だ。



$date = date('Y-m-d', strtotime('2010-09-18 -3 months'));
 
echo $date . "\n";
 
//出力結果
2010-06-18
