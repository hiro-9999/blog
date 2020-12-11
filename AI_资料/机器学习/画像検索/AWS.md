# AWS SDKs and tools that use the shared config and credentials files
https://docs.aws.amazon.com/credref/latest/refdocs/supported-sdks-tools.html

# Identity and Access Management (IAM)
https://console.aws.amazon.com/iam/home?#/home

# CLI DL
https://aws.amazon.com/jp/cli/

# aws configure　グループ作成
https://qiita.com/miwato/items/291c7a8c557908de5833

AmazonRekognitionFullAccess
```
AWSマネージメントコンソールに接続します。
IAM コンソールにアクセスします。
左ペインから[グループ]を選択します。
画面上部から[新しいグループの作成]ボタンを押します。
グループ名を入力して、画面下の[次のステップ]ボタンを押します。

AWS Access Key ID [None]: 
AWS Secret Access Key [None]: 
Default region name [None]: 
Default output format [None]: 
```
# AWS SDK for PHP
https://github.com/aws/aws-sdk-php

https://aws.amazon.com/jp/sdk-for-php/
 
composer require aws/aws-sdk-php




# Source = './PICTURE/source.png'  -> # 検索対象となる画像を定義 //比对的元对象 ---登录的很多原image 用于ML

⭕️Target = './PICTURE/target.png'   -> # 検索対象を探す画像を定義 //要检查对象  ---upload image
https://blog.denet.co.jp/find-yourself-using-amazon-rekognition/

```
import urllib.request

opener = urllib.request.build_opener()
opener.addheaders = [('User-agent', 'Mozilla/5.0')]
urllib.request.install_opener(opener)
urllib.request.urlretrieve("type URL here", "path/file_name")
```


https://hacknote.jp/archives/40553/


# Python3でPillowを使ってURLから画像を読み込む
⭕️https://qiita.com/tamanobi/items/e135839bb8115792c185
···
import urllib.request
print('Beginning file download with urllib2...')
url = 'https://akm-img-a-in.tosshub.com/sites/btmt/images/stories/modi_instagram_660_020320092717.jpg'
urllib.request.urlretrieve(url, 'modiji.jpg')

https://docs.python.org/ja/3.7/howto/urllib2.html
```
import urllib.parse
import urllib.request

url = 'http://www.someserver.com/cgi-bin/register.cgi'
user_agent = 'Mozilla/5.0 (Windows NT 6.1; Win64; x64)'
values = {'name': 'Michael Foord',
          'location': 'Northampton',
          'language': 'Python' }
headers = {'User-Agent': user_agent}

data = urllib.parse.urlencode(values)
data = data.encode('ascii')
req = urllib.request.Request(url, data, headers)
with urllib.request.urlopen(req) as response:
   the_page = response.read()
```

# Python3でPillowを使ってURLから画像を読み込む
import io
import urllib.request
from PIL import Image
f = io.BytesIO(urllib.request.urlopen("画像のURL").read())
img = Image.open(f)
···



https://gist.github.com/tamanobi/ed2536a086cfedd64baa54796ac9bf33
```
import matplotlib.pyplot as plt
from PIL import Image
import requests
import io

a_url = 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Mona_Lisa,_by_Leonardo_da_Vinci,_from_C2RMF_retouched.jpg/687px-Mona_Lisa,_by_Leonardo_da_Vinci,_from_C2RMF_retouched.jpg'
b_url = 'https://pixabay.com/static/uploads/photo/2012/11/28/08/56/mona-lisa-67506_960_720.jpg'

# core
a_img = Image.open(io.BytesIO(requests.get(a_url).content))
b_img = Image.open(io.BytesIO(requests.get(b_url).content))

# images scale up
plt.figure(figsize=(20,20))

# display images horizontally
plt.subplot(121)
plt.imshow(a_img)
plt.subplot(122)
plt.imshow(b_img)
```

# 必要なIAM ポリシー 設定する

AmazonRekognitionFullAccess

# 見つかった対象の類似度を表示する
    print("関連する部分が見つかりました\n詳しくは、生成された画像を確認してください")
    
    print("類似度:" + str(round(float(response['FaceMatches'][0]['Similarity']), 10)) + "%")
    
    

# img = Image.open(BytesIO(response.content))    
https://kazusa-pg.com/python-binarydata-picture/    

    
# 5MBまでであれば、S3を使わなくても利用可能なので、SDKに直接流し込みます。
Amazon Rekognitionからは、一致した座標がレスポンスとして返ってくるので、matplotlib.pyplotモジュールを使って編集してみます。
```
import boto3
from matplotlib import pyplot as plt
from PIL import Image

# 画像ファイルを定義する
Source = './PICTURE/source.png'   # 検索対象となる画像を定義
Target = './PICTURE/target.png'   # 検索対象を探す画像を定義
Result = './PICTURE/SEARCH.png'   # 検索対象が見つかればどこで見つかったかを表示する

# boto3でrekognitionを定義する
rekognition = boto3.client('rekognition', region_name='ap-northeast-1')

# 画像ファイルを読み込む(5MBまでであれば、S3を使わずに利用可能)
imageTarget = open(Target,'rb')
imageSource = open(Source,'rb')

# 検索対象をrekognitionで比較させる
response = rekognition.compare_faces(SimilarityThreshold=70, SourceImage={'Bytes': imageSource.read()}, TargetImage={'Bytes': imageTarget.read()})

# 読み込んだ画像は不要なのでクローズ
imageSource.close()
imageTarget.close()

# 検索対象を探す画像を編集のためにオープン
img = Image.open(Target)
img_width = img.size[0]
img_height = img.size[1]

# rekognitionで比較した結果、関連する部分が見つかったか判定
if len(response['FaceMatches'])==1:
    # 検索対象を探す画像で見つかった位置を扱いやすいように変数に定義する
    size_width = response['FaceMatches'][0]['Face']['BoundingBox']['Width']
    size_height = response['FaceMatches'][0]['Face']['BoundingBox']['Height']
    size_left = response['FaceMatches'][0]['Face']['BoundingBox']['Left']
    size_top = response['FaceMatches'][0]['Face']['BoundingBox']['Top']

    # 見つかった対象の類似度を表示する
    print("関連する部分が見つかりました\n詳しくは、生成された画像を確認してください")
    print("類似度:" + str(round(float(response['FaceMatches'][0]['Similarity']), 10)) + "%")

    # 検索対象を探す画像のどの部分に見つかったか画像を修正
    rect = plt.Rectangle(
        (size_left * img_width, size_top * img_height),
        size_width * img_width, size_height * img_height,
        fill=False,
        edgecolor='red')

    plt.gca().add_patch(rect)
    plt.imshow(img)

    # 検索対象が見つかった画像をファイルに出力する
    plt.savefig(Result, dpi=600)

else:
    # 見つからなかったら見つからなかったことを伝える
    print("関連する部分は見つかりませんでした")
    ```
    
    # AWS CLI
    ## AWS Command Line Interface とは 
    https://docs.aws.amazon.com/ja_jp/cli/latest/userguide/cli-chap-welcome.html
   
   または AWS Systems Manager を使用して、Amazon Elastic Compute Cloud (Amazon EC2) インスタンスでコマンドを実行します。
    # Amazon Elastic Compute Cloud (Amazon EC2) 
   
    # ソール上からS3に画像をアップロードし Amazon Rekognition Imageで顔の比較を行い、JSON形式で結果を受け取ることが出来ました。
     https://xp-cloud.jp/blog/2020/09/29/7645/
