https://stackoverflow.com/questions/53473529/three-js-project-keeping-camera-centered-on-object-in-top-down-view

## top-down

var horizontal_degrees = 0;
var vertical_degrees = 0;

var theta = horizontal_degrees * Math.PI / 180;
var phi = vertical_degrees * Math.PI / 180;

camera.position.x = originX + radius * Math.sin( phi ) * Math.cos( theta );
camera.position.y = originY + radius * Math.cos( phi );
camera.position.z = originZ + radius * Math.sin( phi ) * Math.sin( theta );


## StereoEffect.js → ２画面
https://ara-web.net/blog/three-js/post-3533/
