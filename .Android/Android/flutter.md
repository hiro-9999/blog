

//
command + option + L

## flutter
https://www.toutiao.com/a6761317276110029324/


//flutter
https://blog.csdn.net/hk2291976/article/details/51137938

//flutter
https://blog.csdn.net/gfg156196/article/details/81118368

//【Flutter 内幕：Flutter 在内部是如何工作的？】
https://toutiao.com/group/6749486298098041351/?app=news_article_social&timestamp=1571495138&req_id=201910192225380100140470680B24B98E&group_id=6749486298098041351&tt_from=copy_link&utm_source=copy_link&utm_medium=toutiao_ios&utm_campaign=client_share

【《Flutter in action》开放下载！闲鱼Flutter企业级实践精选】https://toutiao.com/group/6748966484199866887/?app=news_article_social&timestamp=1571473230&req_id=201910191620300100140470212068F0EF&group_id=6748966484199866887&tt_from=copy_link&utm_source=copy_link&utm_medium=toutiao_ios&utm_campaign=client_share



./gradlew :app:dependencies
./gradlew :module_name:dependencies
https://docs.gradle.org/5.4.1/userguide/command_line_interface.html#sec:command_line_warnings

//AndroidX:
android.useAndroidX: true に設定すると、Android プラグインは Support Library ではなく、該当する AndroidX ライブラリを使用します。設定しない場合、このフラグはデフォルトで false です。
android.enableJetifier: true に設定すると、Android プラグインは既存のサードパーティ ライブラリのバイナリを書き換えて、AndroidX を使用するように自動的に移行します。設定しない場合、このフラグはデフォルトで false です。

https://techblog.scouter.co.jp/entry/2019/01/30/135004
//Flutter


//Migrate to AndroidX https://developer.android.com/jetpack/androidx/migrate
https://qiita.com/ikemura23/items/70aeb3f83d17b5d8f729
https://github.com/BaseflowIT/flutter-permission-handler/issues/79

//Manifest merger failedとかいうエラーの解消法
        videoSource = new HlsMediaSource.Factory(okHttpDataSourceFactory).createMediaSource(contentUri);

https://kurutabrog.hatenablog.com/entry/2019/05/04/133140
①【gradle.properties】に

android.useAndroidX=true
android.enableJetifier=true
https://stackoverflow.com/questions/51793345/android-material-and-appcompat-manifest-merger-failed/53202089
を記載。
f:id:kurutabrog:20190504132938p:plain
②MainActivity等の、AppCompatActivityを継承しているファイルを開き、

import androidx.appcompat.app.AppCompatActivity
をインポートする。
f:id:kurutabrog:20190504133024p:plain
③layoutファイルでConstraintLayout棟のサポートライブラリを使用している場合は、

<androidx.constraintlayout.widget.ConstraintLayout 
xmlns:android="http://schemas.android.com/apk/res/android" >
//省略
</androidx.constraintlayout.widget.ConstraintLayout>
と書き換える。

//List all dependencies by running below
./gradlew :app:dependencies

https://flutter.dev/

//exoplayer https://qiita.com/niusounds/items/cce4ff69f5911908259b
videoSource = new ProgressiveMediaSource.Factory(dataSourceFactory)
                    .createMediaSource(contentUri);
2.6.1以降
ExtractorMediaSourceのコンストラクタは非推奨になり、代わりにExtractorMediaSource.Factoryを使う方法が推奨されています。こちらの方がコードが少なくて良いです。

//exoplayer ok
https://exoplayer.dev/listening-to-player-events.html


//Homeキーのタップを検知する方法には

1). onUserLeaveHint
2). BroadcastReceiver
http://a01.hatenablog.com/entry/2017/04/05/215248

//cookie
https://www.jianshu.com/p/ed26790aa2c5
https://www.jianshu.com/p/3c3da18e369e
https://blog.csdn.net/qq_36982160/article/details/82351373

作为Android开发者 你真的知道app从启动到主页显示的过程吗？】https://toutiao.com/group/6711646172806644228/?app=news_article_social&timestamp=1562717205&req_id=20190710080644010152025213847D3A8&group_id=6711646172806644228&tt_from=copy_link&utm_source=copy_link&utm_medium=toutiao_ios&utm_campaign=client_share


Android水平划分？来看看自己处于哪个阶段】https://toutiao.com/group/6709712977357980167/?app=news_article_social&timestamp=1562335205&req_id=2019070522000401015201615988072EE&group_id=6709712977357980167&tt_from=copy_link&utm_source=copy_link&utm_medium=toutiao_ios&utm_campaign=client_share


【Flutter上手体验，环境搭建+真机运行第一个APP】https://toutiao.com/group/6712037672291926540/?app=news_article_social&timestamp=1562807464&req_id=20190711091104010152040076539616A&group_id=6712037672291926540&tt_from=copy_link&utm_source=copy_link&utm_medium=toutiao_ios&utm_campaign=client_share

教你一分钟实现动态模糊效果 - Eateeer 的笔记屋 - CSDN博客
https://blog.csdn.net/wl9739/article/details/51955598

//
https://www.jianshu.com/p/dad51f6c9c4d?utm_campaign=maleskine&utm_content=note&utm_medium=seo_notes&utm_source=recommendation

64:
https://developer.android.com/distribute/best-practices/develop/64-bit


https://github.com/techGay/v9porn
【Android水平划分？来看看自己处于哪个阶段】https://toutiao.com/group/6709712977357980167/?app=news_article_social&timestamp=1562335205&req_id=2019070522000401015201615988072EE&group_id=6709712977357980167&tt_from=copy_link&utm_source=copy_link&utm_medium=toutiao_ios&utm_campaign=client_share
通常我们知道 android水平可以划分为：入门，初级，中级，高级，资深。
但是这样的划分对我们没有什么指导意义，不同层级的Android开发者的不同行为，我们该如何进阶和规划? 的作者把 android 划分为4个层级:

　第一层：普通程序员

　　第二层：熟练开发者、高级开发工程师、技术组长

　　第三层：技术专家、架构师、一线经理

　　第四层：科学家、研究员、首席(资深)架构师、部门研发总监

我觉得这样划分，不叫有实际意义，大家可以去阅读一下看看每个阶段的技术标志是什么，有不错的指导意义，处于作者对于达到每一个层级的时间我不敢苟同外，其他我是比较赞同的关于技术水准划分的有很多。


理解android 技术点

不知道大家听到没听到，在 “ 寒冬 ” 今天，还有部分公司员工们通过各种方法争抢被裁的名额，就是为了拿到那几个月的补偿呀!面对这种不愁找工作的大佬，男单我们不应该脸红做点什么吗~

android 开发想进阶，下面的点基本漫步过去，都得会，不光是提升我们的 coder 水平，面试时也是要问的呀

各大开源框架的研究，包括但不限于下面几个 OKhttp/Retrofit/eventbus/Glide/eventbus/Rxjava/blockcanary/mvvp/dagger2、

组件化是基本要会的，插件化大公司要求会实操的

flutter/Dart 大家要开始学了，就和当年我们学 kotlin 一样，flutter 基本一锤定音了，google 下一代就是 flutter 的天下了


（需要了解更多关于Flutter知识的小伙伴，点击卡片查看详情

Android架构师必备学习资源免费领取（架构视频+面试专题文档+学习笔记）
​
shimo.im
图标
java 部分，包括 常见的数据结构和算法，hashmap，二叉树，红黑树，apt 注解，aop 插桩，整套多线程知识点，包括ThreadLocal实现原理

android 的系统原理，Lru算法，Binder机制，EventBus实现原理和为什么不能跨进程，跨进程几种方式，AIDL，handler机制

音视频开发，直播、点播、音视频通话、音视频会议，短视频，这些不一定要多深入，但是基本的各大平台的 SDK 要会集成，能根据开源的 哔哩哔哩 IJKMediaPlayer 编写自己的视频，音频播放模块、

高级UI，各种性能优化那是不比说了

上面这些单独拿出那一项，都是考试良久的了，大家自己算算，给你多少时间能搞定上面这些，但是一旦大家搞定了上面这些，那么大家至少不怎么愁面试了吧，运气好的还能借此进入一家不错的有成长，回报优秀的公司，现在最舒服的地方不是打公司，而是那些业务优秀的中型公司了，人不多，事少，组织还没开始僵化，人少待遇也能保证的不错，业务优秀有成长没有裁员的担忧，公司氛围也有轻松愉快，这就是我想去的天堂啊 ~

然后在图像这块大家想深入的话，下面的是跑不了：

图形图像开发，不限于OpenGL ES，EGL，GLSurfaceView，滤镜，美颜，canvas，paint

应用层开发。主要还是原生开发，提高性能优化技能(启动耗时、内存、耗电、网络、数据库、稳定性等)，达到高级开发者的水准

深入Android专业技能提升。主要是阅读源码，理解透Android开发常见的流程和原理(activity启动流程、事件分发机制、广播机制、Binder机制、内存管理机制等)

向Android架构师发展。从平时的一点一滴开发中，有意训练Android架构设计能力，这需要站在一个更高的角度来统筹App开发。

跨平台开发能力。如RN、Weex、Flutter等。大部分公司目前都需要有跨平台开发能力，所以我们很有必要提高这方面的能力

SDK和框架开发。可以通过研究开源项目或者实际项目开发，抽象提取有用SDK和框架供其他人使用

研究Android安全开发。App加固原理和实现，熟悉常见加密方式(如：RSA、DES等)、Https、支付安全等。

Android自动化测试工具开发。这需要对ADB、Android截图、Android布局解析、Android测试框架等相当熟悉

音视频开发。前两年比较火的直播，还有这一两年比较火的短视频，都是与音视频相关。所以，我们可以了解音视频的编解码以及传输协议等。

手游开发。游戏给鹅厂带来了稳定的收入，所以这也是不错的方向。这就需要熟悉常见的游戏开发框架cocos2d-x、Unity3D

图像开发。比如美图秀秀、天天P图，都用到图形的合成、滤镜等技术，对图像处理有很高要求。

Android Framework 开发

高级工程师必备能力
系统设计能力

因为如果你仅仅是对各种各样的技术都熟悉，有技术广度，也有一定的技术深度，实际上是不够的。如果你的系统设计能力不到位，可能导致你在开发系统的时候会乱用技术

比如说，有的系统他有一些自己特殊的业务场景和技术挑战，实际上在这个场景之下比较合适的是采用 “缓存 + 数据库” 的技术方案来应对

但是呢，有的工程师会很多技术，但是缺少这种准确的分析系统问题，提出合理的技术方案的能力，也就是缺少系统设计能力，导致他可能会引入Elasticsearch这种技术来尝试解决这个问题

那么结果必然是失败的。所以之前很多人找我问问题，说我在XX场景下，用了XX技术，但是没有起到我想要的那个结果啊

我帮他一看，这不是必然的么，你的XX技术应该用在YY场景下，结果你用到XX场景下，肯定是不行的。

Web側から特定アプリがインストールされているか判定・処理する方法 #魔法のランプ編 - Qiita
https://qiita.com/oigus-k/items/03044da9a9f7f1754346

json->auto java
http://www.jsonschema2pojo.org/
https://qiita.com/riversun/items/cdd990e96c2bbf9cb043


https://lab.syncer.jp/Tool/JSON-Viewer/

//kotlin
https://kotlinconf.com/2018/talks/

https://qiita.com/pside/items/9dad3fa438b4e4f82e88
pathPrefix
$ adb shell am start -a android.intent.action.VIEW -c android.intent.category.BROWSABLE -d http://example.com/test.mp4
http://wavetalker.blog134.fc2.com/blog-entry-72.html
  if (Intent.ACTION_VIEW.equals(action)) {

Android Studio をMacにインストールする
https://akira-watson.com/android/adt-mac.html
 cd /Library/Java/JavaVirtualMachines/
 
 //Android Studio で AARファイルを作って読み込む
 https://developer.android.com/studio/projects/android-library?hl=ja
 https://qiita.com/izuki_y/items/bd61a2cf8473bf6bd9fb
 https://techbooster.org/android/18043/
 
 ./gradlew assembleDebug --info
 
 /Applications/Android Studio.app/Contents/jre/jdk/Contents/Home
 
 arrow-kt:
 https://github.com/arrow-kt/arrow
 
 firebase:
 https://firebase.google.com/docs/android/setup?hl=ja
 https://firebase.google.com/docs/database/android/retrieve-data
 Query recentPostsQuery = databaseReference.child("posts")
        .limitToFirst(100);
 
 
 https://developer.android.com/about/versions/pie/android-9.0-migration?hl=ja
 
 
 1) Removed build folder from app -> build
2) Reboot the device
3) build -> Clean build
4) build / run on device
https://www.techsfo.com/blog/2014/04/android-app-connecting-to-google-drive-with-google-apis-client-library-for-java-part-3/

ユニットテスト - Spek
https://dev.classmethod.jp/smartphone/android-spek-kotlin/
https://github.com/spekframework/spek
https://qiita.com/shinyay/items/f699c94a20a2071c3694

https://github.com/moriiimo/UnitTestWithSpek

./gradlew cleanBuildCache
https://developer.android.com/studio/build/build-cache#clear_the_build_cache

Androidアプリの.gitignore
https://qiita.com/jumperson/items/fa66995fb68de2847ffd

Android Studioでエラー詳細を表示する方法
https://develop.hateblo.jp/entry/2018/08/31/084811

WIFI環境：
http://fushiroyama.hatenablog.com/entry/2018/02/21/120937

java http://www.oracle.com/technetwork/java/javase/downloads/index.html
 /usr/libexec/java_home -V
 brew install jenv
 echo 'export PATH="$HOME/.jenv/bin:$PATH"' >> ~/.zshrc
 echo 'eval "$(jenv init -)"' >> ~/.zshrc
 source ~/.zshrc
 jenv add $(/usr/libexec/java_home -v 1.8) 
  jenv versions
  jenv global 1.8
  jenv doctor
  java -version
  export PATH="$HOME/.jenv/bin:$PATH"
  eval "$(jenv init -)"
  jenv enable-plugin export
  echo $JAVA_HOME

   https://qiita.com/takuya71/items/8d670d8f216af87cfe01

HLS ABR
example :https://bitmovin.com/mpeg-dash-hls-examples-sample-streams/
https://github.com/google/ExoPlayer/tree/release-v2/demos
     ==>example https://devstreaming-cdn.apple.com
 TrackSelection.Factory trackSelectionFactory;
      String abrAlgorithm = intent.getStringExtra(ABR_ALGORITHM_EXTRA);
      if (abrAlgorithm == null || ABR_ALGORITHM_DEFAULT.equals(abrAlgorithm)) {
        trackSelectionFactory = new AdaptiveTrackSelection.Factory();
      } else if (ABR_ALGORITHM_RANDOM.equals(abrAlgorithm)) {
        trackSelectionFactory = new RandomTrackSelection.Factory();
      } else {
        showToast(R.string.error_unrecognized_abr_algorithm);
        finish();
        return;
      }

https://zocada.com/adaptive-hls-streaming-android-google-exoplayer/
https://qiita.com/takusemba/items/f0c505a479bb663af318
https://medium.com/fungjai/playing-video-by-exoplayer-b97903be0b33
https://cloudpack.media/39343


./gradlew assembleDebug --stacktrace

廃止されたコンフィグレーション
https://developer.android.com/studio/build/dependencies?utm_source=android-studio#dependency_configurations

Android P 　API 28
https://developer.android.com/about/versions/pie/android-9.0-migration?hl=ja


err 3.3 
https://qiita.com/kasa_le/items/e2682235db901032f00c

google-services.jsonの設定方法
https://qiita.com/farman0629/items/11c498af824f02a484b6

https://www.jianshu.com/p/1b646df2235b

