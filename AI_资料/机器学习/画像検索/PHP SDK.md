https://docs.aws.amazon.com/aws-sdk-php/v3/api/api-rekognition-2016-06-27.html#comparefaces

# Getting Started
https://docs.aws.amazon.com/ja_jp/sdk-for-php/v3/developer-guide/getting-started_basic-usage.html

https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/welcome.html#getting-started

# class 
https://docs.aws.amazon.com/aws-sdk-php/v3/api/api-rekognition-2016-06-27.html#createcollection

https://docs.aws.amazon.com/aws-sdk-php/v3/api/class-Aws.Rekognition.RekognitionClient.html

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
