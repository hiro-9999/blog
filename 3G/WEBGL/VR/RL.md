A-Frameでステレオ画像をテクスチャとして使う
https://qiita.com/binzume/items/0112efd5ee683d52ed39


とりあえずTHREE.jsのコードを読むと左右のカメラに別のレイヤーが設定されている．ドキュメントには説明見つからなかったので将来も使えるのかはわからない．
左: 0, 1
右: 0, 2
デフォルトではすべてのオブジェクトはレイヤー0なので左右のカメラから見えます．
コンポーネントの実装

もっとスマートなやり方ある気がするけど，とりあえずオブジェクトをコピーしてUVを上書くコンポーネントを作る．
AFRAME.registerComponent('stereo-texture', {
    schema: {
        mode: { default: "side-by-side", oneOf: ["side-by-side", "top-and-bottom"] }
    },
    init: function () {
        this._componentChanged = this._componentChanged.bind(this);
        this._checkVrMode = this._checkVrMode.bind(this);
        this.el.addEventListener('componentchanged', this._componentChanged, false);
        this.el.sceneEl.addEventListener('enter-vr', this._checkVrMode, false);
        this.el.sceneEl.addEventListener('exit-vr', this._checkVrMode, false);
    },
    update: function () {
        this._reset();
        if (this.el.getObject3D("mesh") === null) return;
        let luv = this._makeObj(1, "stereo-left").geometry.getAttribute("uv");
        let ruv = this._makeObj(2, "stereo-right").geometry.getAttribute("uv");
        if (this.data.mode == "side-by-side") {
            luv.setArray(luv.array.map((v, i) => i % 2 == 0 ? v / 2 : v));
            ruv.setArray(ruv.array.map((v, i) => i % 2 == 0 ? v / 2 + 0.5 : v));
        } else if (this.data.mode == "top-and-bottom") {
            luv.setArray(luv.array.map((v, i) => i % 2 == 1 ? v / 2 + 0.5 : v));
            ruv.setArray(ruv.array.map((v, i) => i % 2 == 1 ? v / 2 : v));
        }
        luv.needsUpdate = true;
        ruv.needsUpdate = true;

        this.el.getObject3D("mesh").visible = false;
        this._checkVrMode();
    },
    remove: function () {
        this.el.removeEventListener('componentchanged', this._componentChanged, false);
        this.el.sceneEl.removeEventListener('enter-vr', this._checkVrMode, false);
        this.el.sceneEl.removeEventListener('exit-vr', this._checkVrMode, false);
        this._reset();
    },
    _checkVrMode: function () {
        let leftObj = this.el.getObject3D("stereo-left");
        if (leftObj != null) {
            this.el.sceneEl.is('vr-mode') ? leftObj.layers.disable(0) : leftObj.layers.enable(0);
        }
    },
    _makeObj: function (layer, name) {
        let obj = this.el.getObject3D("mesh").clone();
        obj.geometry = obj.geometry.clone();
        obj.layers.set(layer);
        this.el.setObject3D(name, obj);
        return obj;
    },
    _reset: function () {
        if (this.el.getObject3D("stereo-left") != null) {
            this.el.getObject3D("mesh").visible = true;
            this.el.removeObject3D("stereo-left");
            this.el.removeObject3D("stereo-right");
        }
    },
    _componentChanged: function (ev) {
        if (ev.detail.name === 'geometry' || ev.detail.name === 'material') {
            this.update();
        }
    }
});
使い方

a-skyやa-planeで使えます．VRモードでないときは左目用の絵が使われます．サイドバイサイドとトップアンドボトム形式が使えます．
動画も同じように動きます．
サイドバイサイド形式のステレオ画像をa-planeに設定する．
<a-plane src="images/tex3d.png" width="5" height="5" position="0 1.3 -5" stereo-texture></a-plane>
360°全天球画像をa-skyに貼る．
<a-sky src="3d360.jpg" stereo-texture="mode:top-and-bottom"></a-sky>
他

コードはMITライセンスとしますが，コピーライトとか特に表示しなくて良いです．
WebGL Multiview extensionとかと相性悪そうなので，シェーダで実現したほうが良さそうな気もする．
