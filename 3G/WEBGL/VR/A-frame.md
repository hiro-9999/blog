//chinese infro
https://www.techbrood.com/aframe/core?p=scene
https://www.techbrood.com/aframe/introduction?p=javascript-events-dom-apis

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


https://developer.mozilla.org/ja/docs/Games/Techniques/3D_on_the_web/Building_up_a_basic_demo_with_A-Frame

https://kkblab.com/make/javascript/vr.html ok
VR で頭を動かしたら見える方向が変わるのは、CG 世界の中にある仮想的な「カメラ」が動いているからです。その仮想的なカメラを置いているのが <a-camera> ～ </a-camera> です。通常はこれは書かなくても自動で置かれているのですが、ここでは <a-cursor></a-cursor> というタグを書くために、あえて <a-camera> ～ </a-camera> を置きました。スマホにはマウスカーソルが無いので、カメラの向いている方向（の真ん中）をカーソルに見立てます。<a-camera> ～ </a-camera> の中に <a-cursor></a-cursor> と書くことでこのカーソルを表示させています。
