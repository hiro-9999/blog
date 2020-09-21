# 下面的命令可以查看 FFmpeg 支持的编码格式，视频编码和音频编码都在内。

$ ffmpeg -codecs

//下面的命令查看 FFmpeg 支持的容器。

$ ffmpeg -formats
1.2 编码格式
视频和音频都需要经过编码，才能保存成文件。不同的编码格式（CODEC），有不同的压缩率，会导致文件大小和清晰度的差异。

常用的视频编码格式如下。

•H.262•H.264•H.265
上面的编码格式都是有版权的，但是可以免费使用。此外，还有几种无版权的视频编码格式。

•VP8•VP9•AV1
常用的音频编码格式如下。

•MP3•AAC
编码器
# 编码器（encoders）是实现某种编码格式的库文件。只有安装了某种格式的编码器，才能实现该格式视频/音频的编码和解码。
## 下面的命令可以查看 FFmpeg 已安装的编码器。

$ ffmpeg -encoders
# $ ffmpeg \[全局参数] \[输入文件参数] \-i [输入文件] \[输出文件参数] \[输出文件]

下面是一个例子。

$ ffmpeg \-y \ # 全局参数-c:a libfdk_aac -c:v libx264 \ # 输入文件参数-i input.mp4 \ # 输入文件-c:v libvpx-vp9 -c:a libvorbis \ # 输出文件参数output.webm # 输出文件
上面的命令将 mp4 文件转成 webm 文件，这两个都是容器格式。输入的 mp4 文件的音频编码格式是 aac，视频编码格式是 H.264；输出的 webm 文件的视频编码格式是 VP9，音频格式是 Vorbis。

如果不指明编码格式，FFmpeg 会自己判断输入文件的编码。因此，上面的命令可以简单写成下面的样子。

$ ffmpeg -i input.avi output.mp4
三、常用命令行参数
FFmpeg 常用的命令行参数如下。

•-c：指定编码器•-c copy：直接复制，不经过重新编码（这样比较快）•-c:v：指定视频编码器•-c:a：指定音频编码器•-i：指定输入文件•-an：去除音频流•-vn：去除视频流•-preset：指定输出的视频质量，会影响文件的生成速度，有以下几个可用的值 ultrafast, superfast, veryfast, faster, fast, medium, slow, slower, veryslow。•-y：不经过确认，输出时直接覆盖同名文件。
四、常见用法
下面介绍 FFmpeg 几种常见用法。

4.1 转换编码格式
转换编码格式（transcoding）指的是， 将视频文件从一种编码转成另一种编码。比如转成 H.264 编码，一般使用编码器libx264，所以只需指定输出文件的视频编码器即可。

$ ffmpeg -i [input.file] -c:v libx264 output.mp4
下面是转成 H.265 编码的写法。

$ ffmpeg -i [input.file] -c:v libx265 output.mp4
4.2 转换容器格式
转换容器格式（transmuxing）指的是，将视频文件从一种容器转到另一种容器。下面是 mp4 转 webm 的写法。

$ ffmpeg -i input.mp4 -c copy output.webm
上面例子中，只是转一下容器，内部的编码格式不变，所以使用-c copy指定直接拷贝，不经过转码，这样比较快。

4.3 调整码率
调整码率（transrating）指的是，改变编码的比特率，一般用来将视频文件的体积变小。下面的例子指定码率最小为964K，最大为3856K，缓冲区大小为 2000K。

$ ffmpeg \-i input.mp4 \-minrate 964K -maxrate 3856K -bufsize 2000K \output.mp4
4.4 改变分辨率（transsizing）
下面是改变视频分辨率（transsizing）的例子，从 1080p 转为 480p 。

$ ffmpeg \-i input.mp4 \-vf scale=480:-1 \output.mp4
4.5 提取音频
有时，需要从视频里面提取音频（demuxing），可以像下面这样写。

$ ffmpeg \-i input.mp4 \-vn -c:a copy \output.aac
上面例子中，-vn表示去掉视频，-c:a copy表示不改变音频编码，直接拷贝。

4.6 添加音轨
添加音轨（muxing）指的是，将外部音频加入视频，比如添加背景音乐或旁白。

$ ffmpeg \-i input.aac -i input.mp4 \output.mp4
上面例子中，有音频和视频两个输入文件，FFmpeg 会将它们合成为一个文件。

4.7 截图
下面的例子是从指定时间开始，连续对1秒钟的视频进行截图。

$ ffmpeg \-y \-i input.mp4 \-ss 00:01:24 -t 00:00:01 \output_%3d.jpg
如果只需要截一张图，可以指定只截取一帧。

$ ffmpeg \-ss 01:23:45 \-i input \-vframes 1 -q:v 2 \output.jpg
上面例子中，-vframes 1指定只截取一帧，-q:v 2表示输出的图片质量，一般是1到5之间（1 为质量最高）。

4.8 裁剪
裁剪（cutting）指的是，截取原始视频里面的一个片段，输出为一个新视频。可以指定开始时间（start）和持续时间（duration），也可以指定结束时间（end）。

$ ffmpeg -ss <start> -i <input> -t <duration> -c copy <output>$ ffmpeg -ss <start> -i <input> -to <end> -c copy <output>
下面是实际的例子。

$ ffmpeg -ss 00:01:50 -i [input] -t 10.5 -c copy [output]$ ffmpeg -ss 2.5 -i [input] -to 10 -c copy [output]
上面例子中，-c copy表示不改变音频和视频的编码格式，直接拷贝，这样会快很多。

五、参考链接
•FFmpeg libav tutorial[3]•Digital video introduction[4]•FFmpeg encoding and editing course[5]•Making Slideshows w/FFMpeg[6]

（完）
https://www.toutiao.com/a6781927739948532232/

References
[1]FFmpeg:https://www.ffmpeg.org/

[2]官方文档:https://www.ffmpeg.org/download.html

[3]FFmpeg libav tutorial:https://github.com/leandromoreira/ffmpeg-libav-tutorial#chapter-3---transcoding

[4]Digital video introduction:https://github.com/leandromoreira/digital_video_introduction/blob/master/encoding_pratical_examples.md#split-and-merge-smoothly

[5]FFmpeg encoding and editing course:http://slhck.info/ffmpeg-encoding-course/

[6]Making Slideshows w/FFMpeg:http://dragonquest64.blogspot.com/2019/10/making-slideshows-wffmpeg.html
