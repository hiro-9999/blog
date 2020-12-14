# future of apps
https://danielebaroncelli.medium.com/the-future-of-apps-declarative-uis-with-kotlin-multiplatform-d-kmp-part-1-3-c0e1530a5343
```
The 3 pillars for the future of apps
Declarative UIs (JetpackCompose on Android, SwiftUI on iOS)
KMP (Kotlin MultiPlatform)
MVI pattern (Model-View-Intent)

We call this architecture D-KMP, standing for DeclarativeUIs with Kotlin MultiPlatform. The MVI pattern is what makes the two work best together.
```


KMM = Kotlin Multiplatform Mobile (just Android and iOS)

KMP = Kotlin MultiPlatform (also includes Desktop and Web)

# In KMP, the shared code is written in Kotlin, but it’s compiled as a native library: a Jar file for Android, an ObjectiveC framework for iOS, a JS library for the web. For this reason, the native UI layer can talk to the shared code in the most natural way, on each platforms.


https://danielebaroncelli.medium.com/the-future-of-apps-declarative-uis-with-kotlin-multiplatform-d-kmp-part-3-3-959a2628526d

![UI](https://github.com/hiro-9999/blog/blob/master/.Android/Android/UI/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88%202020-12-14%209.57.01.png)
