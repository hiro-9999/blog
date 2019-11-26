https://qiita.com/yukidoke/items/2c8a595b9e42463b04c9


http://vr.mice-soft.com



<!DOCTYPE html>
<!-- saved from url=(0045)https://threejs.org/examples/webvr_video.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>three.js webvr - video</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<style>
			body {
				font-family: Monospace;
				background-color: #f0f0f0;
				margin: 0px;
				overflow: hidden;
			}
			#info {
				position: absolute;
				top: 10px;
				width: 100%;
				color: #fff;
				text-align: center;
			}
			a {
				color: #ff0
			}
		</style>
	</head>
	<body>
		<div id="container"></div>
		<div id="info">
			<a href="http://threejs.org/" target="_blank">three.js</a> webgl - vr video<br>
			Demo of video artifacts in VR video
		</div>

		<script src="./index_files/three.js"></script>

		<script src="./index_files/VRControls.js"></script>
		<script src="./index_files/VREffect.js"></script>
		<script src="./index_files/WebVR.js"></script>

		<script>

			if ( WEBVR.isAvailable() === false ) {

				document.body.appendChild( WEBVR.getMessage() );

			}

			//

			var camera, scene, renderer;
			var video, texture;

			var controls, effect;

			init();
			animate();

			function init() {

				var container = document.getElementById( 'container' );
				container.addEventListener( 'click', function () {

					video.play();

				} );

				camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 1, 2000 );
				camera.layers.enable( 1 ); // render left view when no stereo available

				// video

				video = document.createElement( 'video' );
				video.loop = true;
				video.muted = true;
				video.src = 'test.mp4';
				video.setAttribute( 'webkit-playsinline', 'webkit-playsinline' );
				video.play();

				texture = new THREE.VideoTexture( video );
				texture.minFilter = THREE.NearestFilter;
				texture.maxFilter = THREE.NearestFilter;
				texture.format = THREE.RGBFormat;
				texture.generateMipmaps = false;

				scene = new THREE.Scene();

				// screen

				var geometry = new THREE.PlaneGeometry( 3.63, 2.04 );
				
				var material = new THREE.MeshBasicMaterial( { map: texture } );

				var mesh = new THREE.Mesh( geometry, material );
				mesh.position.z = -3;
				//mesh.rotation.y = - Math.PI / 2;
				//mesh.layers.set( 1 ); // display in left eye only
				scene.add( mesh );

				//

				renderer = new THREE.WebGLRenderer({ antialias: true });
				renderer.setClearColor( 0x101010 );
				renderer.setPixelRatio( window.devicePixelRatio );
				renderer.setSize( window.innerWidth, window.innerHeight );
				container.appendChild( renderer.domElement );

				//

				controls = new THREE.VRControls( camera );

				effect = new THREE.VREffect( renderer );
				effect.scale = 0; // video doesn't need eye separation
				effect.setSize( window.innerWidth, window.innerHeight );

				if ( WEBVR.isAvailable() === true ) {

					document.body.appendChild( WEBVR.getButton( effect ) );

				}


				//

				window.addEventListener( 'resize', onWindowResize, false );

			}

			function onWindowResize() {

				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();

				effect.setSize( window.innerWidth, window.innerHeight );

			}

			function animate() {

				effect.requestAnimationFrame( animate );
				render();

			}

			function render() {

				controls.update();

				effect.render( scene, camera );

			}

		</script>
	

</body></html>

