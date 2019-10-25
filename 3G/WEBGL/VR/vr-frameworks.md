https://medevel.com/16-virtual-reality-vr-frameworks/

view-source:https://curious-electric.com/w/experiments/aframe/link-traversal/a.html
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>link traversal</title>


  <link rel="icon" href="data:;base64,iVBORw0KGgo=">

  <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>

  <script src="//cdn.rawgit.com/donmccurdy/aframe-extras/v6.0.0/dist/aframe-extras.min.js"></script>

</head>

<body>

  <a-scene>

    <a-sphere position="0 1.25 -5" radius="1.25" color="#ff0000"></a-sphere>
    <a-plane position="0 0 -4" rotation="-90 0 0" width="40" height="40" color="#7BC8A4"></a-plane>
    <a-sky color="#ECECEC"></a-sky>

    <a-link class="collidable" href="b.html" title="Goto B" position="-2 2 -5"></a-link>

    <a-entity position="0 1 0" id="cameraRig">
      <a-entity id="head" camera wasd-controls="acceleration:1000;" look-controls position="0 1.6 0">
      </a-entity>
      <a-entity id="ctlL" raycaster="objects: .collidable; far:10;" laser-controls="hand: left">
      </a-entity>
      <a-entity id="ctlR" raycaster="objects: .collidable; far:40.2;" laser-controls="hand: right">
      </a-entity>

      <a-entity id="mouseCursor" cursor="rayOrigin: mouse" raycaster="objects: .collidable">
      </a-entity>


    </a-entity>


  </a-scene>
