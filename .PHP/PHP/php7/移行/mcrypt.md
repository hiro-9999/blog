
# mcrypt
https://blog.ohgaki.net/encrypt-decrypt-using-openssl

# PHP7.2で非推奨になったmcryptの代わりにopensslにやってみた
https://qiita.com/Uchikoba/items/7784e1f1eb7bae3b1593

https://qiita.com/terra_yucco/items/6fa12af04c86f74089b4

# tools:
https://whattheserver.com/how-to-install-mcrypt-for-php-7-2-and-php-7-3-on-centos-7cpanel/

```
private function encrypt($text)
	{
		$key = random_bytes(32);
		$method = 'aes-256-cbc';
		$ivSize = openssl_cipher_iv_length($method);
        $iv = $key;
        $size = strlen(openssl_encrypt('', $method, '', OPENSSL_RAW_DATA, $iv));
        $pad = $size - ( strlen( $text ) % $size );
        $padtext = $text . str_repeat( chr( $pad ), $pad );
        $encrypted = openssl_encrypt($padtext, $method, base64_decode( $key ), OPENSSL_RAW_DATA, $iv);

        $encrypted = base64_encode($encrypted);

        return $encrypted;
	}
```
