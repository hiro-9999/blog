# 倒なトレーニングは一切なし

⭕️# Amazon Rekognitionで簡単構築！
https://www.tdi.co.jp/miso/amazon-rekognition-detection-system


⭕️# 为最佳实践，您还应创建一个具有管理员权限的 AWS Identity and Access Management (IAM) 用户，并在不需要根凭证的所有工作中使用该用户。创建密码以用于访问控制台，并创建访问密钥以使用命令行工具。有关说明，请参阅 IAM 用户指南 中的创建您的第一个 IAM 管理员用户和组。

https://docs.aws.amazon.com/zh_cn/lambda/latest/dg/getting-started.html


# Amazon SNS 通知を使用して Lambda 関数を呼び出すには、以下が必要になります。

## Lambda 関数

## Amazon SNS トピック

Amazon SNS で使用する Lambda 関数の作成については、「Amazon SNS で Lambda を使用する」を参照してください。Amazon SNS トピックの作成については、「トピックの作成」を参照してください。
https://docs.aws.amazon.com/ja_jp/sns/latest/dg/sns-lambda-as-subscriber.html

⭕️# 本教程假设您对基本 Lambda 操作和 Lambda 控制台有一定了解。如果尚不了解，请按照AWS Lambda 入门中的说明创建您的第一个 Lambda 函数。

https://docs.aws.amazon.com/zh_cn/lambda/latest/dg/with-sns-example.html


次の共通 base64 でイメージAWSSDKsを自動的にエンコードします。 Amazon Rekognition Image API オ ペレーションを呼び出す前にイメージのバイトをエンコードする必要はありません。
• Java
• JavaScript • Python
• PHP

```
次の AWS SDK for PHP の例では、ローカルファイルシステムからイメージをロード し、DetectFacesAPI オペレーションを呼び出す方法を示します。photo の値は、イメージファ イル (.jpg 形式または .png 形式) のパスとファイル名に変更します。
<?php
//Copyright 2018 Amazon.com, Inc. or its affiliates. All Rights Reserved. //PDX-License-Identifier: MIT-0 (For details, see https://github.com/awsdocs/ amazon-rekognition-developer-guide/blob/master/LICENSE-SAMPLECODE.)
require 'vendor/autoload.php';
use Aws\Rekognition\RekognitionClient; $options = [
'region' => 'us-west-2', 'version' => 'latest'
];
$rekognition = new RekognitionClient($options);
// Get local image
$photo = 'input.jpg';
$fp_image = fopen($photo, 'r');
$image = fread($fp_image, filesize($photo)); fclose($fp_image);
// Call DetectFaces
$result = $rekognition->DetectFaces(array(
'Image' => array(
'Bytes' => $image, ),
'Attributes' => array('ALL') )
);
// Display info for each detected person
print 'People: Image position and estimated age' . PHP_EOL; for ($n=0;$n<sizeof($result['FaceDetails']); $n++){
print 'Position: ' . $result['FaceDetails'][$n]['BoundingBox']['Left'] . " " . $result['FaceDetails'][$n]['BoundingBox']['Top']
. PHP_EOL
. 'Age (low): '.$result['FaceDetails'][$n]['AgeRange']['Low']
. PHP_EOL
. 'Age (high): ' . $result['FaceDetails'][$n]['AgeRange']['High'] . PHP_EOL . PHP_EOL;
} ?>
```
