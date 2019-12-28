Wowza 字幕情報
https://engineer-world.duckdns.org/page-1245/

Wowza on EC2の前段にCloudFrontを導入した構成でのライブストリーミング配信
https://dev.classmethod.jp/cloud/aws/wowza46-cloudfront-hls-livestreaming/
https://carefree-se.hatenablog.com/entry/2018/11/07/230610

https://www.dpsj.co.jp/2016/08/03/5912.html
保護されたコンテンツの再生に対応する Encrypted Media Extensions （EME）と、アダプティブストリーミングをサポートする Media Source Extensions （MSE）の開発を待っていました。
HTTP アダプティブストリーミングの MPEG-DASH フォーマットと Common Encryption Scheme （CENC ： 一般的な暗号化スキーム）への対応が明確に含まれており、とくに CENC では複数の DRM プラットホームによる復号化が、コンテンツの暗号化のための標準として定義されています。

非常に重要な点は、Google Chrome （現在、市場をリードしているウェブブラウザ）が HTML5 ビデオサポートの向上を力強く牽引しているということです。Google Chrome は MPEG-DASH （H.264 および VP8 / VP9 （WebM 利用）コーデックを含む）による MSE に対応しています。さらに、EME にも対応し、間接的に Google Widevine （メジャーな DRM プラットホーム）への対応を可能にしています。他のウェブブラウザもやっと Google の足跡に追従を始めました。メジャーなブラウザの多くは現在、デスクトップおよびモバイル端末の両方で MSE と EME に対応しています。

HTML5 仕様のリリースがきっかけになり、HTML5 プレイヤーアプリケーションを提供する会社の数も増加してきています。
JW Player に加えて、THEOplayer （OpenTelly 社）や bitdash （bitmovin 社）、dash.js、video.js、Google Shaka Player などが現在は含まれています。これらのプレイヤーアプリケーションはライブやオンデマンドのアダプティブビットレート・ストリーミングのコンテンツを再生できるだけでなく、
多くは字幕や DVR、広告挿入、VR / 360 といった先進的な機能にも対応しています。


Wowza Streaming Engine™ media server software can ingest caption data and convert it 
to the appropriate caption format for streaming using Apple HLS, 
Adobe HDS, and RTMP. Many player technologies, including Apple 
iOS devices, VideoLAN VLC player, and many set-top boxes, can display 
CEA-608 closed captioning data embedded in live streams. Other player technologies, 
such as JW Player and Flowplayer, can only display AMF onTextData captioning data.
https://www.wowza.com/docs/how-to-configure-closed-captioning-for-live-streaming

シーンサーチサムネイル
