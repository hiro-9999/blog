https://developer.android.com/studio/known-issues?hl=ja

https://docs.gradle.org/5.6.4/userguide/command_line_interface.html#sec:command_line_warnings

/Users/username/.gradle/wrapper/dists/

 # gradle clean 
 
 brew uninstall --force gradle
 
 https://qiita.com/Y_Fujikawa/items/da3379aed609404bc01e
 

# 以下のように表示されていれば、OK
gradle -v

https://qiita.com/Y_Fujikawa/items/da3379aed609404bc01e


# build tools>gradle>gradle user home
/Users/***/.gradle/wrapper/dists/

https://blog.csdn.net/weixin_43987915/article/details/113528222


https://medium.com/@czerwinb/how-to-install-a-specific-gradle-version-on-your-mac-beab35051ee8

$ curl -s "https://get.sdkman.io" | bash
Follow the instructions on-screen to complete installation.
Next, open a new terminal or enter:

$ source "$HOME/.sdkman/bin/sdkman-init.sh"
Lastly, run the following code snippet to ensure that installation succeeded:

$ sdk version
⭕️$ sdk install gradle 5.6.4
$ sdk install gradle 3.3
$ sdk use gradle 5.6.4

$ sdk default gradle 5.6.4
