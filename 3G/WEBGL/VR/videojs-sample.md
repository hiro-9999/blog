//Hiding and Showing Video Player Controls
https://blog.videojs.com/hiding-and-showing-video-player-controls/


//VideoJS-VR ok https://github.com/videojs/videojs-vr 
https://codepen.io/arilaen/pen/wGyOaW

//threejs
https://threejs.org/examples/?q=webvr#webvr_video

//ok::::
https://github.com/mrdoob/three.js/blob/master/examples/webvr_video.html

https://github.com/akiyoko/videojs-sample/tree/master/videojs-sample
Video.jsのvideojs-contrib-hlsを使ってHLS形式のライブ配信を再生する


//
https://stackoverflow.com/questions/28909327/javascript-jquery-toggle-vjs-fade-out-when-useractive-value-changes-video-js

myPlayer.on("useractive", function() {
  $(".menu-btn").removeClass("vjs-fade-out");
});

myPlayer.on("userinactive", function() {
  $(".menu-btn").addClass("vjs-fade-out");
});
