# Openssl equivalent to mcrypt_get_block_size
https://stackoverflow.com/questions/42350165/openssl-equivalent-to-mcrypt-get-block-size


https://stackoverflow.com/questions/41272257/mcrypt-is-deprecated-what-is-the-alternative/41272680

Use Libsodium - A PHP extension
If you can't use Libsodium, use defuse/php-encryption - Straight PHP code
If you can't use Libsodium or defuse/php-encryption, use OpenSSL - A lot of servers will already have this installed. If not, it can be compiled with --with-openssl[=DIR]
