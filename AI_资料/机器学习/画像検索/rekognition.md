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

# 置信度得分是人脸检测和比较系统的重要组成部分。这些系统对图像中是否存在人脸进行预测，或与另一张
图像中的人脸匹配，对预测具有相应的置信度。这些系统的用户在设计其应用程序和根据系统输出做出决策
时，应考虑系统提供的置信度得分/相似度阈值。例如，在一个用于识别长相相似的家庭成员的照片应用程序
中，如果置信度阈值设置为 80%，则当预测达到 80% 置信度时，该应用程序将返回匹配项，但不会返回低
于该置信度的匹配项。此阈值可能是可以接受的，因为对于这种类型的使用案例，漏检或误报的风险很低。
但是，对于漏检或误报风险较高的使用案例，系统应使用更高的置信度。在高度精确的面部匹配非常重要
的情况下，应使用 99% 的置信度/相似度阈值。有关建议的置信度阈值的更多信息，请参阅搜索集合中的人
脸 (p. 150)。


# 要存储人脸信息，您必须先在账户的一个 AWS 区域中创建一个 (CreateCollection (p. 310)) 人脸集
合。在调用 IndexFaces 操作时指定此人脸集合。在创建人脸集合并存储所有人脸的人脸特征信息后，
您可以在集合中搜索匹配的人脸。要搜索图像中的人脸，请调用 SearchFacesByImage (p. 436)。要
搜索存储视频中的人脸，请调用 StartFaceSearch (p. 452)。要搜索流式传输视频中的人脸，请调用
CreateStreamProcessor (p. 320

# • the section called “IndexFaces” (p. 412) 操作可检测输入图像 (JPEG 或 PNG) 中的人脸，并将这些人脸
添加到指定的人脸集合。将为在图像中检测到的每个人脸返回一个唯一的人脸 ID。在保留人脸后，您可以
在人脸集合中搜索匹配的人脸。有关更多信息，请参阅将人脸添加到集合 (p. 165)。

# 除了 FaceMatchThreshold，还可以使用 Similarity 响应属性来减少意外错误。例如，您可以选择使用
较低的阈值（如 80%）以返回更多结果。然后，您可以使用响应属性 Similarity（相似性的百分比）来缩
小选择范围以及在应用程序中筛选合适的响应。再次强调，使用越高的相似性（例如 99% 及以上）越能降低
识别出错的风险。

# SearchFaces 操作响应
此操作将返回一组找到的匹配人脸以及您作为输入提供的人脸 ID。
{
"SearchedFaceId": "7ecf8c19-5274-5917-9c91-1db9ae0449e2",
"FaceMatches": [ list of face matches found ]
}
对
