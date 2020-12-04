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
```
Copyright 2018 Amazon.com, Inc. or its affiliates. All Rights Reserved. PDX-License-Identifier: MIT-0 (For details, see https://github.com/awsdocs/amazon- rekognition-developer-guide/blob/master/LICENSE-SAMPLECODE.)
-->
<!DOCTYPE html>
<html>
<head>
<script src="aws-cognito-sdk.min.js"></script>
<script src="amazon-cognito-identity.min.js"></script>
<script src="https://sdk.amazonaws.com/js/aws-sdk-2.16.0.min.js"></script> <script src="./app.js"></script>
<meta charset="UTF-8">
<title>Rekognition</title>
</head>
<body>
<H1>Age Estimator</H1>
<input type="file" name="fileToUpload" id="fileToUpload" accept="image/*"> <p id="opResult"></p>
</body>
<script>
document.getElementById("fileToUpload").addEventListener("change", function (event) { ProcessImage();
}, false);
  //Calls DetectFaces API and shows estimated ages of detected faces
  function DetectFaces(imageData) {
AWS.region = "RegionToUse";
var rekognition = new AWS.Rekognition(); var params = {
Image: {
Bytes: imageData },
      Attributes: [
'ALL', ]
};
rekognition.detectFaces(params, function (err, data) {
if (err) console.log(err, err.stack); // an error occurred else {
var table = "<table><tr><th>Low</th><th>High</th></tr>"; // show each face and build out estimated age table for (var i = 0; i < data.FaceDetails.length; i++) {
table += '<tr><td>' + data.FaceDetails[i].AgeRange.Low + '</td><td>' + data.FaceDetails[i].AgeRange.High + '</td></tr>';
}
table += "</table>"; document.getElementById("opResult").innerHTML = table;
} });
  }
  //Loads selected image and unencodes image bytes for Rekognition DetectFaces API
  function ProcessImage() {
AnonLog();
var control = document.getElementById("fileToUpload"); var file = control.files[0];
// Load base64 encoded image
var reader = new FileReader(); reader.onload = (function (theFile) {
return function (e) {
var img = document.createElement('img'); var image = null;
img.src = e.target.result;
var jpg = true;
        38
Amazon Rekognition 開発者ガイド ローカルファイルシステムの使用
try {
image = atob(e.target.result.split("data:image/jpeg;base64,")[1]);
} catch (e) {
jpg = false; }
if (jpg == false) { try {
image = atob(e.target.result.split("data:image/png;base64,")[1]); } catch (e) {
alert("Not an image file Rekognition can process");
return; }
}
//unencode image bytes for Rekognition DetectFaces API var length = image.length;
imageBytes = new ArrayBuffer(length);
var ua = new Uint8Array(imageBytes);
for (var i = 0; i < length; i++) {
ua[i] = image.charCodeAt(i); }
        //Call Rekognition
        DetectFaces(imageBytes);
      };
})(file);
reader.readAsDataURL(file); }
  //Provides anonymous log on to AWS services
  function AnonLog() {
// Configure the credentials provider to use your identity pool AWS.config.region = 'RegionToUse'; // Region AWS.config.credentials = new AWS.CognitoIdentityCredentials({
IdentityPoolId: 'IdentityPoolIdToUse', });
// Make the call to obtain credentials AWS.config.credentials.get(function () {
// Credentials will be available when this function is called. var accessKeyId = AWS.config.credentials.accessKeyId;
var secretAccessKey = AWS.config.credentials.secretAccessKey; var sessionToken = AWS.config.credentials.sessionToken;
}); }
</script>
</html>
```
```
InvalidImageFormatException
メッセージ: リクエストに無効なイメージ形式があります。
指定されたイメージ形式はサポートされていません。サポートされているイメージ形式 (.JPEG および .PNG) を使用します。詳細については、を参照してください Amazon Rekognition での制 限 (p. 596)。
再試行してもいいですか。なし
InvalidPaginationTokenException
メッセージ
• トークンが無効です
• ページ分割トークンが無効です
リクエストのページ分割トークンが有効ではありません。トークンの有効期限が切れている可能性が あります。
再試行してもいいですか。なし
InvalidParameterException
メッセージ: リクエストに無効なパラメータがあります
入力パラメータが制約に違反しています。API オペレーションを再度呼び出す前にパラメータを検証 します。
再試行してもいいですか。なし
```
```

• 各画像に 1 つの顔のみを含む画像で IndexFaces (p. 431) を呼び出し、返された顔 ID を画像の被写体 の識別子と関連付けます。
• インデックス作成の前に DetectFaces (p. 371) を使用して、画像内の顔が 1 つのみであることを確認 できます。複数の顔が検出された場合は、確認後、顔が 1 つだけの状態で画像を再送信してください。 これにより、誤って複数の顔にインデックスを作成し、それらを同じ人物に関連付けることを防ぎま す。
```

 # SearchFaces と SearchFacesByImage では、顔 (FaceId または入力イメージのいずれかで識別) と 特定の顔コレクション内のすべての顔を比較します。したがって、この検索の範囲はずっと広くなりま す。また、顔コレクション内に保存した顔の特徴情報は保持されるため、一致する顔を何回でも検索で きます。
 
 # SearchFaces と SearchFacesByImage の類似度しきい値の入力属性 FaceMatchThreshold は、マッ チングされる顔の類似度に基づいて返される結果の数を制御します (この属性は SimilarityThreshold 用CompareFacesです。) Similarityレスポンス属性値がしきい値より小さいレスポンスは返されませ ん。このしきい値は、ユースケースに合わせて調整することが重要です。この値により、一致結果に含ま れる誤認識の数が変わるためです。これにより、検索結果のリコールが制御されます。しきい値が低いほ ど、リコールが高くなります。
すべての機械学習システムは確率的です。適切な類似度しきい値の設定には、ユースケースに応じて、お 客様の判断が必要です。たとえば、外見が類似した家族を識別する写真アプリケーションを構築する場合 は、より低いしきい値 (80% など) を選択できます。一方、多くの法律執行のユースケースでは、偶発的な 誤認識を減らすため、99% 以上の高いしきい値を使用することをお勧めします。
FaceMatchThreshold に加えて、偶発的な誤認識を減らすための手段として Similarity レスポンス 属性を使用できます。たとえば、低いしきい値 (80% など) を使用して、より多くの結果が返されるように できます。その後、レスポンス属性 Similarity (類似度) を使用してそれらの結果を絞り込んで、アプリ ケーションで正しいレスポンスが得られるようにフィルタ処理できます。ここでも、高い類似度 (99% 以 上など) を指定すると、誤認識のリスクが軽減されます。

# インデックスが付けられた顔を、顔を検出したイメージに関連付けることができます。たとえば、イ メージのクライアント側のインデックスとイメージ内の顔を保持できます。顔をイメージと関連付けるに は、ExternalImageId リクエストパラメータでイメージ ID を指定します。イメージ ID として、ファイ ル名を使用するか、別に作成した ID を使用できます。


# DetectFaces から同じ情報が返されるため、同じイメージに対して DetectFaces と IndexFaces の両方を呼び出す必要はありません。 
```
MaxFaces 入力パラメーターを使用して IndexFaces によりインデックスが付けられる顔の最大数を指 定することができます。この機能は、イメージ内の最も大きい顔にインデックスを付け、背景に立ってい る人の顔など、小さい顔にインデックスを付けない場合に役立ちます。
デフォルトでは、IndexFaces は顔を除外するために使用する品質基準を選択します。QualityFilter 入力パラメータを使用して、品質基準を明示的に設定できます。値は次のとおりです。
• AUTO — Amazon Rekognition は、顔を除外するために使用する品質基準を選択します (デフォルト値)。 • LOW — 最低品質の顔を除くすべての顔がインデックス化されます。
• MEDIUM
• HIGH — 最高品質の顔のみがインデックス化されます。
• NONE - 品質に基づいて顔が除外されません。
```
