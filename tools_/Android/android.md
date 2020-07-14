# vmos
root device
https://www.vmos.com/?utm_source=vmos.cn

# 32 / 64bitの機器
$ adb shell getprop ro.product.cpu.abilist
arm64-v8a,armeabi-v7a,armeabi

https://codechacha.com/ja/support-64-bit-app-in-android/

Add this line to your android/app/build.gradle file

ndk {
  abiFilters 'armeabi-v7a', 'arm64-v8a', 'x86','x86_64'
  }
