AR and VR Using the WebXR API Learn to Create Immersive Content with WebGL, Three.js, and A-Frame by Rakesh Baruah (z-lib.org).pdf

https://developer.mozilla.org/zh-CN/docs/Web/API/WebXR_Device_API

### VRデバイスが接続されていればENTER VRボタンを押すことでVRモードに移行することができるのサンプル
https://immersive-web.github.io/webxr-samples/stereo-video.html

# xr doc
https://developer.mozilla.org/en-US/docs/Web/API/WebXR_Device_API/Inputs

### GLTF format
https://www.codegrid.net/articles/2018-gltf-1/

https://github.com/KhronosGroup/glTF

### aframe:
https://aframe.io/docs/1.2.0/introduction/vr-headsets-and-webvr-browsers.html

VRDisplay.displayName

```js
  if (navigator.getVRDisplays) {
    navigator.getVRDisplays().then(function (displays) {
      var sceneEl = document.querySelector('a-scene');
      vrDisplay = displays.length && displays[0];
      if (sceneEl) { sceneEl.emit('displayconnected', {vrDisplay: vrDisplay}); }
    });
  }
}

function getVRDisplay () { return vrDisplay; }
module.exports.getVRDisplay = getVRDisplay;
```

### get device
There are several utility functions in A-Frame we can use to detect compatibility: https://aframe.io/docs/master/core/utils.html

The mobile-related utils look at navigator.userAgent. The VR-related utils check to see if the pose data returned from the headset/polyfill is not 0,0,0.

Given the current API:

https://github.com/aframevr/aframe/blob/master/src/utils/device.js

Desktop: !AFRAME.utils.checkHeadsetConnected()
Mobile: AFRAME.utils.isMobile()
GearVR: AFRAME.utils.isGearVR()
Oculus Rift: !AFRAME.utils.isMobile() && AFRAME.utils.checkHeadsetConnected()
HTC Vive: !AFRAME.utils.isMobile() && AFRAME.utils.checkHeadsetConnected()
To differentiate Rift vs. Vive, try using WebVR API Stage Parameters https://w3c.github.io/webvr/#interface-vrstageparameters


https://stackoverflow.com/questions/38984951/how-to-detect-desktop-vs-mobile-vs-gearvr-vs-oculus-rift-vs-vive-in-a-frame
