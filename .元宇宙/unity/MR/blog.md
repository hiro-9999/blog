https://framesynthesis.jp/tech/unity/xr/

UnityでVR開発する場合、これまではOculus IntegrationやSteamVR Plugin等各ベンダー提供のSDKを使用するのが通例でしたが、2021年7月現在、Unity純正のXRツールキットであるXR Interaction ToolkitとOpenXR Pluginを使用することで、ひとつのプロジェクトでOculus Quest、HTC Vive、Valve Index、Windows Mixed Realityヘッドセット等多数のヘッドセットに対応できるようになってきています。

# 
https://forpro.unity3d.jp/unity_pro_tips/2021/05/20/1957/

#
https://github.com/shiena/OpenXRRuntimeSelector


## Unity＋SteamVR開発メモ（HTC Vive、Valve Index、Oculus Quest対応）
https://framesynthesis.jp/tech/unity/htcvive/

### 
https://docs.google.com/presentation/d/e/2PACX-1vRamEOhM7Zk-mkZRYiUAFZsiOlAt8vRN98x00-e-CZ4C45cVI4MAC_lqmpVfytaAfXi4FyBcX8_4SvO/pub?slide=id.gabdc4143ec_0_35

## HTC Vive か Oculus Rift か判別するには
SteamVR.instance.hmd_TrackingSystemName で、HTC Vive なら “lighthouse”、Oculus Rift なら “oculus” が取得できます。

## webxr-export
https://github.com/De-Panther/unity-webxr-export


## WebGL Browser Compatibility
https://docs.unity3d.com/2019.3/Documentation/Manual/webgl-browsercompatibility.html

https://speakerdeck.com/korinvr/challenge-to-use-unity-webxr-exporter-for-vr-sashimi-tanpopo?slide=24
