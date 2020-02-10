## トップボトム	ボトムトップ 
https://developer.oculus.com/documentation/native/android/mobile-media-overview/
https://support.oculus.com/1707817122769530/

https://stackoverflow.com/questions/53473529/three-js-project-keeping-camera-centered-on-object-in-top-down-view
3D format https://forum.skybox.xyz/d/157-filename-rules-for-vr-format
3dv, TB, Top + Bottom, OU, Over + Under, HOU, Half + OU, Half + Over + Under
3dh, LR, Left + Right, SBS, Side + By + Side, HSBS, Half + SBS, Half + Side + By + Side

Angles
360, 360°, 180x180, 180°

Fisheye aka Youtube 180
F180, VR180

## TopBottom 左のカメラからは右のカメラ
https://www.kadinche.com/stereoscopic-vr%E5%8B%95%E7%94%BB%E3%81%AE%E4%BD%9C%E6%88%90%E4%BE%8B/
人間の目の間の距離を瞳孔間距離(IPD: Interpupillary distance)
http://greety.sakura.ne.jp/doubt/2017/01/25/ucvr-eye-front-side-vr-video/


https://immersionvr.co.uk/blog/monoscopic-vs-stereoscopic-360-vr/

## top-down

var horizontal_degrees = 0;
var vertical_degrees = 0;

var theta = horizontal_degrees * Math.PI / 180;
var phi = vertical_degrees * Math.PI / 180;

camera.position.x = originX + radius * Math.sin( phi ) * Math.cos( theta );
camera.position.y = originY + radius * Math.cos( phi );
camera.position.z = originZ + radius * Math.sin( phi ) * Math.sin( theta );


## StereoEffect.js → ２画面 ok
https://ara-web.net/blog/three-js/post-3533/


https://embed.plnkr.co/mKyWyMIwgjj89GuSdPgF/

## 3D Top (left) / Bottom (right)
https://inter-stream.jp/interstream_support/docs/05_04.html


## Shade3DでのVRコンテンツの作成
https://blog.shade3d.jp/vr/archives/449
