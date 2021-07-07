https://www.infoq.com/jp/news/2021/04/jfrog-jcenter-bintray-closure/


https://docs.gradle.org/current/userguide/declaring_repositories.html


```
allprojects {
    repositories {
        maven {
            url "https://maven.google.com"
            //DBFlow https://github.com/Raizlabs/DBFlow
            maven { url "https://www.jitpack.io" }
        }
        google()
        mavenCentral()
        jcenter().mavenContent {
            // 2022年１月　TODO ExoPlayerなど が mavenCentral() or google() に移行したら削除すること
            includeGroup("com.google.android.exoplayer")
            includeGroup("com.mindorks.android")
            includeGroup("com.eightbitlab")
            includeGroup("com.amitshekhar.android")
        }
    }
}
```

# JFrogはJCenterとBintrayを閉鎖へ
https://qiita.com/takke/items/67a7f21cdcec0f13d7c8

```android
//  jcenter()       // <- removed
    mavenCentral()  // <- added
```
    https://stackoverflow.com/questions/66400264/jcenter-is-at-end-of-life-android-lint-warning-what-is-the-replacement


https://blog.csdn.net/qq471208499/article/details/116603519


https://stackoverflow.com/questions/66400264/jcenter-is-at-end-of-life-android-lint-warning-what-is-the-replacement
JFrog, the company that maintains the JCenter artifact repository used by many Android projects, recently announced the deprecation and upcoming retirement of JCenter. According to the announcement, JCenter will allow downloads of existing artifacts until February 1, 2022.
