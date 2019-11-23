即时通讯音视频开发（十九）：零基础，史上最通俗视频编码技术入门-实时音视频/专项技术区 - 手机版】
http://www.52im.net/thread-2840-1-1.html?tt_from=copy_link&utm_source=copy_link&utm_medium=toutiao_ios&utm_campaign=client_share


视频编码
I帧：是自带全部信息的独立帧，是最完整的画面（占用的空间最大），无需参考其它图像便可独立进行解码。视频序列中的第一个帧，始终都是I帧。

B帧：“双向预测编码帧”，以前帧后帧作为参考帧。不仅参考前面，还参考后面的帧，所以，它的压缩率最高，可以达到200:1。不过，因为依赖后面的帧，所以不适合实时传输（例如视频会议）。

P帧：“帧间预测编码帧”，需要参考前面的I帧和/或P帧的不同部分，才能进行编码。P帧对前面的P和I参考帧有依赖性。但是，P帧压缩率比较高，占用的空间较小。



webrtc
http://www.52im.net/forum.php?mod=collection&action=view&ctid=5


TCP/IP详解
http://www.52im.net/forum.php?mod=collection&action=view&ctid=3


live：
https://portal.viblast.com/#!/login
