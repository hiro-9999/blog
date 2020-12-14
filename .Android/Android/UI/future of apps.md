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
