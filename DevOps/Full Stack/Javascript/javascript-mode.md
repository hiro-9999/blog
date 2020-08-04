# コンポーネント
https://ja.reactjs.org/docs/components-and-props.html

# 数字を3桁カンマ区切りにする
https://www.yoheim.net/blog.php?q=20190702
```
var num = 12345;
num.toLocaleString(); // "12,345"

var numString = '12345';
Number(numString).toLocaleString(); // "12,345"

// 3桁カンマ区切りとする.
function comma(num) {
    return String(num).replace( /(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
}

comma(12345);  // "12,345" ただ、上記の処理では小数点以下を上手く扱えないので、小数点以下を含む場合には、下記のように少し変更します。

// 3桁カンマ区切りとする（小数点も考慮）.
function comma(num) {
    var s = String(num).split('.');
    var ret = String(s[0]).replace( /(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
    if (s.length > 1) {
        ret += '.' + s[1];
    }
    return ret;
}

comma(12345.6789);  // "12,345.6789"
```
# generator   * + yield
function* optimisticMagicEightBall() {
while (true) { 1
yield 'Yup, definitely.'; }
}

# mdn
https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Statements/throw

