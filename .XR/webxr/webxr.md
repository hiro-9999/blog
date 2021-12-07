AR and VR Using the WebXR API Learn to Create Immersive Content with WebGL, Three.js, and A-Frame by Rakesh Baruah (z-lib.org).pdf

### aframe:
https://aframe.io/docs/1.2.0/introduction/vr-headsets-and-webvr-browsers.html

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
