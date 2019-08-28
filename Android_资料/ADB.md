https://qiita.com/t2low/items/cb37cec5f864c4748e14
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
