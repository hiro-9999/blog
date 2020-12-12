
```PHP
<?php
require 'vendor/autoload.php';
use Aws\Rekognition\RekognitionClient;

// https://docs.aws.amazon.com/ja_jp/general/latest/gr/rande.html
// アジアパシフィック (東京)	ap-northeast-1

$regioName = 'ap-northeast-1';
$collectionId = 'Collection';


$options = [
'region' => $regioName,
'version' => 'latest'
];

$client = new RekognitionClient($options);

// $result = $client->deleteCollection([
//     'CollectionId' => $collectionId,
// ]);

// $result = $client->createCollection([
//     'CollectionId' => $collectionId,
// ]);

$url = '/pppd00835p.jpg';
$contentID = 'pppd00828';

// pppd00881, ppbd00186,pppd00860,pppd00841,pppd00818,pppd00828,pppd00850,pppd00835ps

//ヘッダーの設定
$header = array(
        "Content-Type: application/x-www-form-urlencoded",
        "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0",
        "Referer: https://r.com"
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

$result = $client->indexFaces([
    'CollectionId' =>  $collectionId,
    'DetectionAttributes' => ["ALL"],
    'ExternalImageId' => $contentID,
    'Image' => [ 
        'Bytes' => $contents,
    ],
    'MaxFaces' => 1,
    'QualityFilter' => 'HIGH',
]);


// $result = $client->listFaces([
//     'CollectionId' => $collectionId,
//     'MaxResults' => 10,
// ]);

$target = 'hitomi3.jpg';
//コンテンツ取得
$contents = file_get_contents($target, false, stream_context_create($options));

$threshold = 70;
$result = $client->searchFacesByImage([
    'CollectionId' => $collectionId,
    'FaceMatchThreshold' => $threshold,
    'Image' => [ 
        'Bytes' => $contents,
    ],
    'MaxFaces' => 60,
    'QualityFilter' => 'AUTO',
]);

print $result;

?>
```
