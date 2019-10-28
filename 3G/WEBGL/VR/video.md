//ok
https://blog.videojs.com/videojs-vr-now-under-the-video-js-org/

//Canvasをテクスチャにするとパフォーマンスが落ちる
https://qiita.com/binzume/items/80793e18578306d019db

//ok
https://codepen.io/TKinmin/pen/RdZLrp


https://github.com/videojs/video.js/blob/master/docs/guides/player-workflows.md
buffered will give you a timeRange object representing the current ranges of time that are ready to be played at a future time.

var myPlayer = videojs('some-player-id');

myPlayer.src({type: 'video/mp4', src: 'http://www.example.com/path/to/video.mp4'});
myPlayer.ready(function() {
  var bufferedTimeRange = myPlayer.buffered();

  // number of different ranges of time have been buffered.
  // Usually 1
  var numberOfRanges = bufferedTimeRange.length,

  // Time in seconds when the first range starts.
  // Usually 0
  var firstRangeStart = bufferedTimeRange.start(0),

  // Time in seconds when the first range ends
  var firstRangeEnd = bufferedTimeRange.end(0),

  // Length in seconds of the first time range
  var firstRangeLength = firstRangeEnd - firstRangeStart;
});
bufferedPercent will give you the the current percentage of the video that is buffered.


//ok
https://qiita.com/t114/items/c7fdffaa2e7fdf406a7b
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Video.js Sample</title>
  <link href="static/css/video-js.min.css" rel="stylesheet">
  <script src="static/js/video.min.js"></script>
  <script src="static/js/videojs-contrib-media-sources.min.js"></script>
  <script src="static/js/videojs-contrib-hls.min.js"></script>
</head>
<body>
<video id="test" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto"
 width="640" height="360" data-setup="{}">
  <source src="output.m3u8" type="application/x-mpegURL">
</video>
</body>
</html>


//its ok for hls aes
https://dev.classmethod.jp/client-side/javascript/videojs-contrib-hls-livestreaming-minimum-setting/
https://github.com/streamroot/videojs-hlsjs-plugin

<html>
  <head>
    <title>HLS livestreaming</title>
    <link href="https://vjs.zencdn.net/7.4.1/video-js.css" rel="stylesheet">
  </head>
  <body>
    <video id=example-video width=1280 height=720
       class="video-js vjs-default-skin" controls>
      <source
         src="m3u8"
         type="application/x-mpegURL">
    </video>
    <script src="https://vjs.zencdn.net/7.4.1/video.js"></script>
    <script src="./videojs-contrib-hls.js"></script>
    <script>
      var player = videojs('example-video');
      player.play();
    </script>
  </body>
</html>

videojs-vr.min.js
https://github.com/videojs/videojs-vr
https://support.brightcove.com/360degvr-video-plugin
 var player = videojs('example-video');
 player.vr({projection: '360'});

https://github.com/facebook/react-360/issues/124

Here is an example of a HLS video being rendered in a ThreeJS scene using
VideoJS - https://jsfiddle.net/vm4detdy/

I assume inorder to use this in ReactVR, I'll need to follow this - 
https://facebook.github.io/react-vr/docs/native-modules.html



http-streaming
https://unpkg.com/browse/@videojs/http-streaming@1.10.6/dist/
https://github.com/videojs/http-streaming


https://github.com/videojs/http-streaming

https://dev.classmethod.jp/client-side/javascript/videojs-http-streaming-vhs-hls-streaming-minimum-setting/
<html>
  <head>
    <title>VHS de HLS</title>
    <link href="https://vjs.zencdn.net/7.4.1/video-js.css" rel="stylesheet">
  </head>
  <body>
    <video-js id=example-video width=1280 height=720
              class="vjs-default-skin" controls>
      <source
         src="https://example.com/streaming/hls.m3u8"
         type="application/x-mpegURL">
    </video-js>
    <script src="https://vjs.zencdn.net/7.4.1/video.js"></script>
    <script>
      var player = videojs('example-video');
    </script>
  </body>
</html>

https://github.com/emliri/hlsjs-videojs-plugin

three.js
https://cdnjs.com/libraries/three.js/

Three.jsで360°パノラマ動画を表示する
https://sterfield.co.jp/designer/three-js%E3%81%A7360%E3%83%91%E3%83%8E%E3%83%A9%E3%83%9E%E5%8B%95%E7%94%BB%E3%82%92%E8%A1%A8%E7%A4%BA%E3%81%99%E3%82%8B/

other hls js
https://cloudpack.media/41250
