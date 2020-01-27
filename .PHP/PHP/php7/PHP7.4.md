## PHP7.4

https://qiita.com/tags/php7.4


采用的方法是利用 PHPCS和PHPCompatibility 对项目进行PHP7的编码规范检测。

>PHP7.4最大の特徴 2019/11/28にPHP7.4.0がリリースされました。
openssl_x509_verify関数が追加されました。

>FFI  ->PHPからFFIでGoを利用する
https://qiita.com/i4M1k0SU/items/7c0db12e047e0fbf7550

PHP内に他言語を書けるようになりました。
https://qiita.com/rana_kualu/items/50f9f5735321fe995ff5
NULL合体代入演算子??=が導入されました。

mb_str_split関数が追加されました。
$x = mb_str_split('aAａＡ1１!！あ𩸽', 1);
var_export($x);// ['a', 'A', 'ａ', 'Ａ', '1', '１', '!', '！', 'あ', '𩸽']


マジックメソッド__serialize/__unserializeが追加されました。
__sleepおよびSerializableにかわる、新たなシリアライズのメカニズムです。

WeakReferenceクラスが追加されました。

ReflectionReferenceクラスが追加されました。
$ary = [0, 1, 2];
$ref1 =& $ary[1];
unset($ref1);
$ref2 =& $ary[2];

var_dump(ReflectionReference::fromArrayElement($ary, 0)); // null
var_dump(ReflectionReference::fromArrayElement($ary, 1)); // null
var_dump(ReflectionReference::fromArrayElement($ary, 2)); // ReflectionReference

mbstring.regex_retry_limitディレクティブが追加されました。

プロパティに型が指定できるようになりました。
class HOGE{
    public int $i = 0;
    public string $s = '';
    public ?object $obj;
}

$c = new HOGE();
$c->i = 1;
$c->s = 'string';
$c->obj = new stdClass();


アロー関数が使えるようになりました。
$square = fn($x) => $x ** 2;
var_dump($square(2), $square(-5)); // 4, 25

$a = 1;
$hoge = fn() => ++$a;

echo $hoge(); // 2
echo $a; // 1
PHPではアロー関数の外にある変数は汚染されません。
また、アロー関数の実装に伴いfnが予約語になります。
今後function fn(){}といった文は書けなくなります。
