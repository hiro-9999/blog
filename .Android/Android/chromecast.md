## context.getPlayerManager().setMediaPlaybackInfoHandler
https://developers.google.com/cast/docs/mpl/streaming_protocols

https://developers.google.com/cast/docs/reference/player/cast.player.api.RequestInfo

https://developers.google.com/cast/docs/caf_receiver/core_features#tip-loading-media-using-contentid-contenturl-and-entity

>
https://github.com/flowplayer

https://medium.com/@stlin813/how-to-let-chromecast-support-hls-aes-128-encryption-for-android-platform-b2aad9b41647
## Cross-Origin Resource Sharing
Google Cast fully supports Cross-Origin Resource Sharing (CORS). 
Streaming protocols, unlike most file-based protocols, 
access content in an asynchronous way using XMLHttpRequest . 
If you are running the HLS AES-128 flow, 
You have to let your key deliver server allow your receiver domain.


https://qiita.com/tomo1139/items/fea907958160f77760ef

## Chromecast向けアプリ開発の準備
https://isana.blog/2014/06/chromecast_10-html/

## Chromecast built-in 搭載のテレビやディスプレイ
https://developer.android.com/distribute/best-practices/engage/user-cast

## init
```
mCastContext = CastContext.getSharedInstance(this);
        mCastSession = CastContext.getSharedInstance(this).getSessionManager()
                .getCurrentCastSession();
               ```

```
## cast samsung tv
https://developer.samsung.com/tv/develop/extension-libraries/smart-view-sdk/introduction/
https://developer.android.com/reference/android/support/v7/app/MediaRouteActionProvider

Castメニュー  mediaRouteActionProvider.setRouteSelector(mMediaRouteSelector);
https://www.atmarkit.co.jp/ait/articles/1505/13/news008_3.html

https://stackoverflow.com/questions/37752643/attempt-to-invoke-virtual-method-void-android-support-v7-app-mediarouteactionpr

smart-view
https://www.samsung.com/uk/support/tv-audio-video/what-is-screen-mirroring-and-how-do-i-use-it-with-my-samsung-tv-and-samsung-mobile-device/


>Sender lock screen
https://stackoverflow.com/questions/38752191/chromecast-sender-v2-7-0-lockscreen-image



https://developer.android.com/distribute/best-practices/engage/user-cast
