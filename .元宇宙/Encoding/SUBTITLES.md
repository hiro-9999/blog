## HTTP Live Streaming good

http://hlsbook.net/sample-chapter/


# Amazon Transcribeで作る字幕データ
https://qiita.com/chibiegg/items/f02ea9c688b51ef0bfeb
```
映像データから音声のみを抽出する (ffmpeg)
音声データから文字起こしをする (Amazon Transcribe)
文字起こし結果をSubRip字幕データにする (Python)
映像データに字幕データを埋め込む (mkvmerge)
```

## 音声→テキストに変換するAWSの「Amazon Transcribe」がついに日本語対応しました！ good
音声ファイルからテキストに文字起こし！【Amazon Transcribe】
https://apnari-san.com/entry/amazontranscribe

## Amazon Transcribe を使用すると
https://aws.amazon.com/jp/transcribe/

## ffmpeg
https://jp.videoproc.com/edit-convert/ffmpeg-guide-for-beginners.htm

## ffmpegを使用してビデオから字幕を抽出する方法は？ good
https://kujirahand.com/blog/index.php?%E5%8B%95%E7%94%BB%E3%81%8B%E3%82%89%E5%AD%97%E5%B9%95%E3%82%92%E6%8A%BD%E5%87%BA%E3%81%99%E3%82%8B%E6%96%B9%E6%B3%95

FFMPEG -i mytestmovie.mkv -vn -an -codec:s:0.1 srt sub.srt
https://www.fixes.pub/program/541216.html

## MP4ファイルから字幕データの抽出
https://digita-l-ocal.tech/?p=641



# mp4 字幕 抽出 【字幕抽出】動画字幕の抽出方法
https://www.aiseesoft.jp/tutorials/how-to-extract-subtitles-from-video.html


## How to Add subtitles to HLS Videos
https://www.youtube.com/watch?v=HwedFvcu5fY


## aws
https://github.com/awslabs/live-streaming-with-automated-multi-language-subtitling

https://aws.amazon.com/jp/blogs/news/get-started-with-the-aws-live-streaming-with-automated-multi-language-subtitling-solution/
AWS Elemental MediaLive チャネルは、ソースを取り込むときに字幕を抽出し、同じ形式または異なる形式で出力に含めるように設定できます。出力には複数の字幕を含めることができます。たとえば、複数の言語の字幕を含めることができます。ソース字幕アセットを取り込んで、1 つの出力で 1 つの形式に、別の出力で別の形式に変換できます。

## HLS マニフェスト (埋め込みキャプション)
https://docs.aws.amazon.com/ja_jp/medialive/latest/ug/set-up-the-hls-manifest.html



## AWS MediaPackage

https://docs.aws.amazon.com/ja_jp/medialive/latest/ug/use-case-one-input-format-different-format-for-each-output.html

https://github.com/awslabs/live-streaming-with-automated-multi-language-subtitling


### Adding Subtitles to Videos
https://www.veed.io/

https://www.youtube.com/watch?v=8wZARTDbNmc


## variantplaylistcreator good
https://dev.classmethod.jp/articles/htp-live-streaming2/

### 動画を配信
https://dev.classmethod.jp/articles/http-live-streaming/

## 多字幕
https://blog.csdn.net/weixin_43970890/article/details/86158311

## 如何进行HLS打包
https://help.aliyun.com/document_detail/68617.html?spm=a2c4g.11186623.6.597.4dce75e8dWNn5r

### mediasubtitlesegmenter
https://developer.apple.com/documentation/http_live_streaming/about_apple_s_http_live_streaming_tools

https://qiita.com/makotok7/items/bbcd24ab7b00adf8cc92

https://www.yaz.co.jp/tec-blog/web%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9/212
