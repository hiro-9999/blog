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
