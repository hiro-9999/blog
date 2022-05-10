https://developer.android.com/codelabs/exoplayer-intro#6

https://github.com/google/ExoPlayer


https://scrapbox.io/nashcft/ExoPlayer:_update_2.12.3_to_2.13.1_%E6%97%A5%E8%A8%98


### is good
https://medium.com/google-exoplayer


https://exoplayer.dev/live-streaming.html


### is good
https://medium.com/google-exoplayer/improved-japanese-subtitle-support-7598fee12cf4

https://netflixtechblog.com/implementing-japanese-subtitles-on-netflix-c165fbe61989

https://www.cxymm.net/article/achina2011jy/112674293
### 5.字幕
ExoPlayer Docで述べたように：ビデオファイルと個別の字幕ファイルが与えられた場合、MergingMediaSourceを使用してそれらを単一のソースにマージして再生できます。

  Format subtitleFormat = Format.createTextSampleFormat(
                id, // can be null
                MimeTypes.APPLICATION_SUBRIP,
                Format.NO_VALUE,
                null);

  MediaSource subtitleSource = new SingleSampleMediaSource
  
  
                                .Factory(cacheDataSourceFactory)
                                .createMediaSource(subtitleUri, subtitleFormat, C.TIME_UNSET);

  exoPlayer.prepare(new MergingMediaSource(mediaSource, subtitleSource),
   false, // Reset position
   false //Reset state
  );
  
