# start

https://docs.aws.amazon.com/zh_cn/sdk-for-php/v3/developer-guide/welcome.html#getting-started


https://docs.aws.amazon.com/aws-sdk-php/v3/api/api-rekognition-2016-06-27.html#comparefaces

# Getting Started
https://docs.aws.amazon.com/ja_jp/sdk-for-php/v3/developer-guide/getting-started_basic-usage.html

https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/welcome.html#getting-started

# class 
https://docs.aws.amazon.com/aws-sdk-php/v3/api/api-rekognition-2016-06-27.html#createcollection

https://docs.aws.amazon.com/aws-sdk-php/v3/api/class-Aws.Rekognition.RekognitionClient.html
```php
use Aws\Credentials\CredentialProvider;
use Aws\Route53\Route53Client;

$profile = 'default';
$path = '/var/www/html/.aws/credentials';
$provider = CredentialProvider::ini($profile, $path); 
$provider = CredentialProvider::memoize($provider);

$client = Route53Client::factory(array(
    'region' => 'us-east-1',
    'version' => '2013-04-01',
    'credentials' => $provider
));
```
https://qiita.com/tabimoba/items/9f9fa0e65543f69dcc85

#ヘッダーの設定
https://ysklog.net/php/1134.html
```
<?php
//コンテンツ取得先
$url = "";
 
//ヘッダーの設定
$header = array(
        "Content-Type: application/x-www-form-urlencoded",
        "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0",
        "Referer: https://ysklog.net"
        );
 
//オプション設定
$options =array(
        'http' =>array(
                'method' => "GET",
                'header' => implode("\r\n", $header),
                )
        );
 
//コンテンツ取得
$contents = file_get_contents($url, false, stream_context_create($options));
 
//出力
print_r($contents);
?>
```

# example
https://dev.classmethod.jp/articles/how-to-start-aws-sdk-for-php/

```
早速、ホームディレクトリで試していきます。 はじめにComposerのインストールです。

$ curl -sS https://getcomposer.org/installer | php
AWS SDK for PHPをComposerでインストールします。

$ php composer.phar require aws/aws-sdk-php
実行ディレクトリのvendor以下にSDKがインストールされます。

$ ls vendor/aws/ 
aws-sdk-php

<?php
require 'vendor/autoload.php';
use Aws\Ec2\Ec2Client;

$client = new Ec2Client([
  'region' => 'ap-northeast-1',
  'version' => '2016-09-15'
]);
$result = $client->describeInstances([
  'Filters' => [
        [
            'Name' => 'tag:Name',
            'Values' => ['test1a'],
        ],
  ]
]);
print $result['Reservations'][0]['Instances'][0]['PrivateIpAddress'];
```
