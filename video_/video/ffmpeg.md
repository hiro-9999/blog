https://www.toutiao.com/a6756925300757496332/

ffmpegは、動画と音声を記録・変換・再生
https://qiita.com/Nishi53454367/items/1ab543782f7c36fa4b87


使う ffprobe の使い方
https://nico-lab.net/how_to_use_ffprobe/
ffprobe -i <MP4　ファイル名>
画像生成時間の計測に用いる動画の尺の長さ等の情報

dstat は vmstat, iostat, netstatなんかをまとめた情報が取得可能。
時刻情報付与やCSV保存もできて便利。
https://qiita.com/mon_tu/items/e0074cf7b8b34fc53d2f
dstat -tclmdrn --output
/usr/local/ffmpeg/latest/bin/ffprobe -v error -print_format ini -select_streams v:0 -show_entries stream=width,height,duration ./44.mp4
  
出力結果)
[streams.stream.0]
width=560
height=316
duration=7157.024024


/usr/local/ffmpeg/latest/bin/ffmpeg \
-threads 4 \
-ss <画像を切り出す秒数> \
-i <mp4のパス> \
-an \
-filter:v \
<画像サイズ> \
-qscale:v 1 \
-vframes 1 \
-f image2 \
<画像ファイルパス> \
-y
