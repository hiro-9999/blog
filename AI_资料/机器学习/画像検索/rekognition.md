# Amazon Rekognition 開発者ガイド
https://docs.aws.amazon.com/zh_cn/rekognition/latest/dg/rekognition-dg.pdf

https://docs.aws.amazon.com/ja_jp/rekognition/latest/dg/rekognition-dg.pdf

https://docs.aws.amazon.com/zh_zh/rekognition/latest/dg/rekognition-dg.pdf

# Amazon Rekognition Custom Labels Feedback
https://github.com/aws-samples/amazon-rekognition-custom-labels-feedback-solution

## Amazon Rekognition Custom Labels builds off of Amazon Rekognition’s existing capabilities, which are already trained on tens of millions of images across many categories. Instead of thousands of images, you can upload a small set of training images (typically a few hundred images or less) that are specific to your use case. You can do this by using the easy-to-use console. If your images are already labeled, Amazon Rekognition Custom Labels can begin training a model in a short time. If not, you can label the images directly within the labeling interface, or you can use Amazon SageMaker Ground Truth to label them for you.
https://docs.aws.amazon.com/rekognition/latest/customlabels-dg/what-is.html

顔検索 – Amazon Rekognition では、コンテナ (顔コレクションとも呼ばれる) に保存されているものと
一致する顔がないか、イメージ、保存済みビデオ、ストリーミングビデオを検索できます。顔コレク
ションはお客様が所有および管理する顔のインデックスです。Amazon Rekognition を使用して顔で人を
検索するには、以下の 2 つの主要ステップが必要です。
1. 顔のインデックスを作成する。
2. 顔を検索する。

＃ Rekognition Custom Labels
https://docs.aws.amazon.com/zh_cn/rekognition/latest/customlabels-dg/what-is.html


Amazon Rekognition Image 操作
Amazon Rekognition 图像操作是同步的。输入和响应采用 JSON 格式。Amazon Rekognition图像操作分
析 .jpg 或 .png 图像格式的输入图像。传递到 Amazon Rekognition Image 操作的图像可存储在 Amazon S3
存储桶中。如果您未使用 AWS CLI，则还可以将 Base64 编码图像字节直接传递到 Amazon Rekognition 操
作。有关更多信息，请参阅使用图像 (p. 24)。

# 基于非存储的操作和基于存储的操作
Amazon Rekognition 操作分为以下类别。
• 非存储 API 操作 – 在这些操作中，Amazon Rekognition 不保存任何信息。您提供输入图像和视频，操作

# 使用图像字节调用 Amazon Rekognition Image 操作快于将图像上传到 Amazon S3 存储桶之后在 Amazon
Rekognition Image 操作中引用上传的图像。如果您将图像上传到 Amazon Rekognition Image 以进行实时
处理，请考虑此方法。例如，从 IP 摄像机上传的图像和通过 Web 门户上传的图像。
执行分析，然后返回结果，但 Amazon Rekognition 不会保存任何信息。有关更多信息，请参阅非存储操
作 (p. 7)。
• 基于存储的 API 操作 – Amazon Rekognition 服务器可将检测到的人脸信息存储在称为集合的容器
中。Amazon Rekognition 提供其他 API 操作，这些操作可用


# 关人脸比较输入图像的建议
用于人脸比较操作的模型适用于各种姿势、面部表情、年龄范围、旋转、照明条件和大小。我们建议您在
为 CompareFaces (p. 304) 添加参考照片时或使用 IndexFaces (p. 412) 将人脸添加到集合时遵循以下准
则。
• 使用人脸处于建议的角度范围内的图像。俯仰角在朝下时应小于 30 度，在朝上时应小于 45 度。偏航角在
任一方向应小于 45 度。翻滚角没有限制。
• 使用双眼睁开并且可见的人脸的图像。
• 在使用 IndexFaces 创建集合时，使用具有不同的俯仰角和偏航角（位于建议的角度范围内）的个人的
多个人脸图像。我们建议至少索引一个人的 5 张图像 — 直立、脸向左（偏航角为 45 度或更小）、脸向
右（偏航角为 45 度或更小、脸向下（俯仰角为 30 度或更小）、脸向上（俯仰角为 45 度或更小）。如果
您要跟踪属于同一人的这些人脸实例，请考虑使用外部图像 ID 属性，前提是图像中只有一个人脸正在被
索引。例如
