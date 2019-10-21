https://github.com/aframevr/aframe/issues/3614
<!DOCTYPE html>
<html>
  <head>
    <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
  </head>
  <body>
    <a-scene>
      <a-assets>
        <video id="base" loop="true" src="videos/Scene1_Take1.mp4" preload="auto"></video>
      </a-assets>

      <a-videosphere id="videosphere" src="#base" rotation="0 180 0" material="side: back"></a-videosphere>
    </a-scene>
  </body>
</html>
