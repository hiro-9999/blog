https://www.slideshare.net/KatsuyaENDOH/arcana-study16
https://muffinman.io/html-canvas-video-player/


https://github.com/aframevr/aframe/issues/1416
HLS m3u8 video stream does not work with a-videosphere 


aframe a-videosphere  m3u8
<meta name="apple-mobile-web-app-capable" content="yes">

//https://stackoverflow.com/questions/19782389/playing-m3u8-files-with-html-video-tag
var videoElement = document.getElementById("myVideo");
if(videoElement.canPlayType('application/vnd.apple.mpegurl') === "probably" || videoElement.canPlayType('application/vnd.apple.mpegurl') === "maybe"){
    //Actions like playing the .m3u8 content
}
else{
    //Actions like playing another video type
}
