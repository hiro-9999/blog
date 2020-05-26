https://qiita.com/devnokiyo/items/5388169f798bd2678d64
# Androidエミュレーターのhostsを書換えてローカルサーバーへ接続する


https://qiita.com/mangano-ito/items/08e8352155ac863e6eb9

adb root && adb remount && adb push /etc/hosts /system/etc/

https://www.d-wood.com/blog/2018/05/08_9520.html

adb -s emulator-5554 pull /system/etc/hosts ~/Desktop/

% adb remount
remount succeeded

% adb -s emulator-5554 push ~/Desktop/hosts /system/etc/hosts
