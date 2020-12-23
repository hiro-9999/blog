PHP Fatal error:  Allowed memory size of 111
あまりおすすめはしませんが、一応、メモリの上限を無くすこともできます。

# ini_set("memory_limit", "-1");

とすれば、OKです。

もし、ph.iniを直接変更する場合には、
「memory_limit = -1;」と変更して下さい。

また、.htaccessで設定する場合には、
「php_value memory_limit -1」と設定して下さい。

# PHPのメモリー不足（Allowed memory size）
