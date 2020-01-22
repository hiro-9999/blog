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


## init
```
mCastContext = CastContext.getSharedInstance(this);
        mCastSession = CastContext.getSharedInstance(this).getSessionManager()
                .getCurrentCastSession();
               ```


## cast samsung tv
https://developer.samsung.com/tv/develop/extension-libraries/smart-view-sdk/introduction/
https://developer.android.com/reference/android/support/v7/app/MediaRouteActionProvider
