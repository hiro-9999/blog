```php

private function encrypt($text)
{
  $key = \Config::get('always_load.secret_code_for_dynamic_link');
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
# rijndael-128	aes-256
https://qiita.com/sapi_kawahara/items/bbfbc57fd12ff348f216

# [PHP]OpenSSLを使った文字列の暗号化と復号
https://php-archive.net/php/openssl-encrypt/

https://tech.mktime.com/entry/451
