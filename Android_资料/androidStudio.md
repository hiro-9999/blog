https://www.genymotion.com/


adb shell 
然后输入：getprop 查看系统当前的各项属性，得到模拟器的 DNS 地址，如下： 
下面就是使用 setprop 命令把模拟器的 DNS 改为自己 PC 的 DNS，例如：192.168.1.1 
setprop net.dns1 192.168.1.1

>利用Android Studio自带的模拟器联网。

重点来了，进入到cmd后，需要输入adb root 将模拟器root一下，才能更改DNS。然后再输入adb shell。
接下来输入getprop获取模拟器系统属性。找到[net.eth0.dns1]这一项，发现后面为10.0.2.3，
接下来我们输入setprop net.eth0.dns1 192.168.1.1.后面的ip也可为其他，不过我没尝试。（没有[net.eth0.dns1]的话因为系统是Android9.0及以上，建议换到8.0及以下）

