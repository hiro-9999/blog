＃＃　error
at com.google.android.gms.cast.framework.internal.featurehighlight.zzb.onDraw(com.google.android.gms:play-services-cast-framework@@18.0.0:59)
Fatal Exception: java.lang.IllegalArgumentException: width and height must be > 0

https://github.com/googlecast/CastVideos-android/issues/23

To fix, before building and showing the IntroductoryOverlay, added a conditional that confirms mediaRouteMenuItem.actionView.width and mediaRouteMenuItem.actionView.height are greater than zero, and if not, intro build/show doesn't happen. This fixed our crashes.
https://issuetracker.google.com/issues/36191274%EF%BC%93


https://www.programcreek.com/java-api-examples/index.php?api=android.support.v7.app.MediaRouteActionProvider
https://qiita.com/Galaxy/items/fb1f98532312a5b3b2fa


## ExpandedControllerActivity
https://code.tutsplus.com/tutorials/google-play-services-google-cast-v3-and-media--cms-26893

 <style name="CustomCastMiniController" parent="CastMiniController">
        <item name="castShowImageThumbnail">true</item>
        <item name="castTitleTextAppearance">@style/TextAppearance.AppCompat.Subhead</item>
        <item name="castSubtitleTextAppearance">@style/TextAppearance.AppCompat.Caption</item>
    </style>
    
    movieMetadata.putString(MediaMetadata.KEY_SUBTITLE, studio);
        movieMetadata.putString(MediaMetadata.KEY_TITLE, title);
        
https://github.com/googlecast/CastVideos-android/blob/master/res/values/styles_castvideo.xml

## MediaRouteDescriptor.Builder	setDeviceType(int deviceType)
Sets the route's receiver device type.
https://developer.android.com/reference/android/support/v7/media/MediaRouteDescriptor.Builder

## can configure notification and media control from lock screen
https://developers.google.com/cast/docs/android_sender/integrate

'''
// Example showing 4 buttons: "rewind", "play/pause", "forward" and "stop
// casting".
List<String> buttonActions = new ArrayList<>();
buttonActions.add(MediaIntentReceiver.ACTION_REWIND);
buttonActions.add(MediaIntentReceiver.ACTION_TOGGLE_PLAYBACK);
buttonActions.add(MediaIntentReceiver.ACTION_FORWARD);
buttonActions.add(MediaIntentReceiver.ACTION_STOP_CASTING);
// Showing "play/pause" and "stop casting" in the compat view of the notification.
int[] compatButtonActionsIndices = new int[]{ 1, 3 };
'''
## MiniControllerFragment
https://developers.google.com/cast/docs/android_sender/customize_ui
<array name="cast_mini_controller_control_buttons">
    <item>@id/cast_button_type_rewind_30_seconds</item>
    <item>@id/cast_button_type_play_pause_toggle</item>
    <item>@id/cast_button_type_forward_30_seconds</item>
</array>

...
<fragment
    android:id="@+id/cast_mini_controller"
    ...
    app:castControlButtons="@array/cast_mini_controller_control_buttons"
    class="com.google.android.gms.cast.framework.media.widget.MiniControllerFragment">        
        
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


## Customize Android Sender UI
https://developers.google.com/cast/docs/android_sender/customize_ui#customize_expanded_controller

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
