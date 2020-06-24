https://www.modmy.com/how-modify-hosts-file-your-android-device
```
Download your hosts file from your device by issuing the command
adb pull /system/etc/hosts F:\hosts
(replace F:\ with the directory you wish to copy your hosts file to)
This will copy your hosts file to your computer, to allow you to edit it in Notepad.

Now, simply navigate to the directory which you copied the hosts file to, and edit away! Remember, once you're done you need to push the file back to your device. Issue the command:
adb push F:\hosts /system/etc/
(Again, replace F:\ with the directory where you're storing your hosts file)
and you're good to go.
```
