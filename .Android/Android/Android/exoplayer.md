https://exoplayer.dev/supported-formats.html

# ExoPlayer の UI変更
https://qiita.com/emusute1212/items/81061b3de48f2b0f51e6


 MappingTrackSelector.MappedTrackInfo mappedTrackInfo = trackSelector.getCurrentMappedTrackInfo();
             
                if (mappedTrackInfo != null) {
               
                    for (int i = 0; i < mappedTrackInfo.getRendererCount(); i++) {
                        TrackGroupArray rendererTrackGroups = mappedTrackInfo.getTrackGroups(i);
                        if (C.TRACK_TYPE_AUDIO == mappedTrackInfo.getRendererType(i)) { //判断是否是音轨
                            for (int groupIndex = 0; groupIndex < rendererTrackGroups.length; groupIndex++) {
                                TrackGroup trackGroup = rendererTrackGroups.get(groupIndex);
                                Log.d("checkAudio", trackGroup.getFormat(0).toString());
                            }
                        } else if (C.TRACK_TYPE_TEXT == mappedTrackInfo.getRendererType(i)) { //判断是否是字幕
                            for (int groupIndex = 0; groupIndex < rendererTrackGroups.length; groupIndex++) {
                                TrackGroup trackGroup = rendererTrackGroups.get(groupIndex);
                                Log.d("checkSubTitle",trackGroup.getFormat(0).toString());
                            }
                        }
                    }
                }


This will shows subtitle. if you use "true" after C.TRACK_TYPE_VIDEO then it will disable subtitle and makes it invisible
 trackSelector = new DefaultTrackSelector(/* context= */ this, new AdaptiveTrackSelection.Factory());
        trackSelector.setParameters(new DefaultTrackSelector.ParametersBuilder(this)
                .setRendererDisabled(C.TRACK_TYPE_VIDEO, false)
                .build()
        );
        player = new ExoPlayer.Builder(getApplicationContext())
                .setTrackSelector(trackSelector)
                .build();
        player.setTrackSelectionParameters(
                player.getTrackSelectionParameters().buildUpon().setPreferredTextLanguage("zh").build());
