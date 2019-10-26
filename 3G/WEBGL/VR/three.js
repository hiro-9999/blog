https://github.com/mrdoob/three.js/issues/8216
three.js streaming video materials with videojs for 360 video 

//videojs-vr
https://github.com/videojs/videojs-vr

https://github.com/GoogleChrome/omnitone

//https://github.com/mrdoob/three.js/issues/9754
video.addEventListener("loadeddata", function() {
		         	  video.width = THREE.Math.ceilPowerOfTwo(video.videoWidth);
		              video.height = THREE.Math.ceilPowerOfTwo(video.videoHeight);

		              image.width = video.width;
		              image.height = video.height;
		              //image.width = video.videoWidth;
		              //image.height = video.videoHeight;
		              //imageContext.fillRect( 0, 0, video.videoWidth, video.videoHeight);
		              imageContext.fillRect( 0, 0, image.width, image.height);


		              //console.log(video.videoWidth);
		        });

    // image 
    this.image360 = document.createElement('canvas');
    this.image360.width = this.width;
    this.image360.height = this.height;
    this.imageContext360 = this.image360.getContext('2d');
    this.imageContext360.fillStyle = '#000000';
    this.imageContext360.fillRect(0, 0, this.width, this.height);
    // texture 
    this.texture360 = new THREE.Texture(this.image360);
    this.texture360.format = THREE.RGBFormat;
    this.texture360.minFilter = THREE.LinearFilter;
    this.texture360.magFilter = THREE.LinearFilter;
    this.texture360.generateMipmaps = false;
    this.texture360.wrapS = THREE.ClampToEdgeWrapping;
    this.texture360.wrapT = THREE.ClampToEdgeWrapping;
    this.texture360.flipY = true;
    this.texture360.needsUpdate = true;
    // mesh
    let geometry = new THREE.SphereGeometry(500, 80, 50);
    geometry.scale(-1, 1, 1);
    let material = new THREE.MeshBasicMaterial({ map: this.texture360 });
    this.mesh360 = new THREE.Mesh(geometry, material);
    this.scene360.add(this.mesh360);
    // renderer
    this.renderer360 = new THREE.WebGLRenderer({ antialias: false });
    this.renderer360.setClearColor(0x101010);
    this.renderer360.setPixelRatio(window.devicePixelRatio);
    this.renderer360.setSize(this.width, this.height, true);


https://www.youtube.com/watch?v=mFC8W6ELVJY
https://slides.com/elecash/360-and-vr-video/#/

https://stackoverflow.com/questions/tagged/aframe

aframe-passthrough-component
https://github.com/willwnekowicz/aframe-passthrough

Building an Immersive VR Streaming Solution on AWS
https://aws.amazon.com/jp/blogs/compute/building-an-immersive-vr-streaming-solution-on-aws/

//ng
https://headjack.io/pricing/


ThreeJS 入門
https://qiita.com/tushuhei/items/2509e7e23172ec402110

    ThreeJS
        言わずと知れた 3D グラフィクス描写ライブラリ。歴史も古く、豊富なドキュメントと実装例が強み。WebVR に特化しているわけではありません。
    Aframe
        Mozilla が発表した WebVR 構築ライブラリ。まるで HTML を書くように、要素を追加していくようにして WebVR 体験を記述することができます。
    WebVR starter kit
        Three.JS ベースの WebVR 構築ライブラリ。
    VR View
        Google が提供する WebVR 構築ライブラリ。360 画像や動画に特化している（という理解）。
    GUI で操作できるもの
        http://vizor.io/
        http://spaces.archilogic.com/3d/template/new?mode=edit&view-menu=none


//no
https://qiita.com/kingpanda/items/7969c5248f0d21a99910

//no
https://teratail.com/questions/62070
