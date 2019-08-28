adb shell
adb shell recovery --wipe_data
>アンドロイド – データの消去/ ADBによる出荷時のリセット
https://qiita.com/ZON009/items/0c3c3b73a63bd86eea17

https://nekonotesou.net/how-to-delete-kingroot-and-move-supersu/
删除图案密码，输入：adb shell rm  /data/system/gesture.key

删除PIN和密码方法 adb shell rm  /data/system/password.key
https://forum.xda-developers.com/showpost.php?p=60669196&postcount=1
adb push su /data/local/tmp
adb push busybox /data/local/tmp
adb shell

https://qiita.com/t2low/items/cb37cec5f864c4748e14

 pm list packages
 
 adb shell
 su
 
adb devices
adb -s HT05FPL09004 shell
pm list packages


# オプションを指定せずにログ出力
adb logcat
# 出力形式を指定してログ出力
adb logcat -v time
# 現在のログをダンプする
adb logcat -d
# ログのクリア
adb logcat -c


# PCから端末へ
adb push PC上のファイル名 端末上のファイル名
adb push hoge.txt /sdcard/ # 例
# 端末からPCへ
adb pull 端末上のファイル名 PC上のファイル名
adb pull /sdcard/hoge.txt . # 例


# adbの停止
adb kill-server
# adbを起動
adb start-server
