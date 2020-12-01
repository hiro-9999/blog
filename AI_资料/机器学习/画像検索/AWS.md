# AWS SDKs and tools that use the shared config and credentials files
https://docs.aws.amazon.com/credref/latest/refdocs/supported-sdks-tools.html

# Identity and Access Management (IAM)
https://console.aws.amazon.com/iam/home?#/home

# CLI DL
https://aws.amazon.com/jp/cli/

# aws configure
https://qiita.com/miwato/items/291c7a8c557908de5833

AWS Access Key ID [None]: 
AWS Secret Access Key [None]: 
Default region name [None]: 
Default output format [None]: 


https://blog.denet.co.jp/find-yourself-using-amazon-rekognition/

Source = './PICTURE/source.png'  -> # 検索対象となる画像を定義 //比对的元对象 ---登录的很多原image 用于ML

Target = './PICTURE/target.png'   -> # 検索対象を探す画像を定義 //要检查对象  ---upload image


# 必要なIAM ポリシー 設定する

AmazonRekognitionFullAccess

# 見つかった対象の類似度を表示する
    print("関連する部分が見つかりました\n詳しくは、生成された画像を確認してください")
    
    print("類似度:" + str(round(float(response['FaceMatches'][0]['Similarity']), 10)) + "%")
    
    

    
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
