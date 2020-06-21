# Kotlin Programming: The Big Nerd Ranch Guide

# Fragment

# RecyclerView
RecyclerView does just that. Instead of creating 100 Views, it creates just enough to fill the screen. 
When a view is scrolled off the screen, RecyclerView reuses it rather than throwing it away. 
In short, it lives up to its name: It recycles views over and over.

# ConstraintLayout
The first thing you need to do is convert list_item_crime.xml to use a ConstraintLayout. Right-click on your 
root LinearLayout in the component tree and select Convert LinearLayout to ConstraintLayout

# Room uses SQLite under the hood. 
```java
apply plugin: 'kotlin-kapt'

android {
    ...
}
...
dependencies {
    ...
    implementation 'androidx.core:core-ktx:1.1.0-alpha04'
    implementation 'androidx.room:room-runtime:2.1.0-alpha04'
    kapt 'androidx.room:room-compiler:2.1.0-alpha04'
    ...
}
```
# sandbox directory data/data/
An application’s sandbox directory is a child of the device’s data/data 
directory named after the application package. For CriminalIntent, 
the full path to the sandbox directory is data/data/com.bignerdranch.android.criminalintent.

# navigation
https://developer.android.com/guide/navigation/

# camera
```java
 <uses-feature android:name="android.hardware.camera"
                  android:required="false"/>
    ...
</manifest>
```
You include the optional attribute android:required here. Why? By default, declaring that you use a feature means that your app will not work correctly without that feature. This is not the case for CriminalIntent. You call resolveActivity(…) to check for a working camera app, then gracefully disable the camera button if you do not find one.

Passing in android:required="false" handles this situation correctly. 
You tell Android that your app can work fine without the camera, but that some parts will be disabled as a result.

# source
copy the contents from the solutions file at www.bignerdranch.com/solutions/AndroidProgramming4e.zip.)

# resources
https://developer.android.com/guide/topics/resources/providing-resources.html#AlternativeResources

# mockito
```java
dependencies {
    ...
    implementation 'androidx.recyclerview:recyclerview:1.0.0'
    testImplementation 'org.mockito:mockito-core:2.25.0'
    testImplementation 'org.mockito:mockito-inline:2.25.0'
}
```
# Command-Shift-T  //test class
key in Command-Shift-T (Ctrl-Shift-T). Android Studio attempts to navigate to a test class associated with the class you are looking at. 


# Espresso
Espresso を使用すると、簡潔で、美しく、信頼性の高い Android UI テストを作成できます。
https://developer.android.com/training/testing/espresso


# SeekBar
https://developer.android.com/reference/android/widget/SeekBar.html

# 複数の APK のビルド
https://developer.android.com/studio/build/configure-apk-splits.html



# HTTP networking protocol. Retrofit provides
Retrofit is an open-source library created and maintained by Square (square.github.io/retrofit). 
Under the hood, it uses the OkHttp library as its HTTP client (square.github.io/okhttp).

https://square.github.io/retrofit/2.x/retrofit/

 # Gson
Square created a Gson converter for Retrofit that makes it easy to plug Gson into your Retrofit implementation. First, add the Gson and Retrofit Gson converter library dependencies to your app module’s Gradle file. As always, be sure to sync the file when you are done.

Listing 24.22  Adding Gson dependencies (app/build.gradle)
```java
dependencies {
    ...
    implementation 'com.squareup.retrofit2:retrofit:2.5.0'
    implementation 'com.squareup.retrofit2:converter-scalars:2.5.0'
    implementation 'com.google.code.gson:gson:2.8.5'
    implementation 'com.squareup.retrofit2:converter-gson:2.4.0'
}
```
# page
https://developer.android.com/topic/libraries/architecture/paging

# Picasso
We currently use Picasso (square.github.io/picasso) for image loading in our production applications.

# WorkManager PollWorker
Before you can add your worker, you first need to add the appropriate dependency in your app/build.gradle file.

Listing 27.1  Adding the WorkManager dependency (app/build.gradle)
```java
dependencies {
    ...
    implementation 'androidx.recyclerview:recyclerview:1.0.0'
    implementation "android.arch.work:work-runtime:1.0.1"
    ...
}
```
# USING EVENTBUS

# RxJava
use all of RxJava’s various event manipulation tools. 
If that piques your interest, check out the wiki on RxJava’s project page: github.com/ReactiveX/RxJava/wiki.

# broadcast
https://developer.android.com/guide/components/broadcast-exceptions

Where might you start? Here are some places we recommend:

# Write code. 
Now. You will quickly forget what you have learned here if you do not apply it. 
Contribute to a project or write a simple application of your own. Whatever you do, waste no time: Write code.

# Learn. 
You have learned a little bit about a lot of things in this book. 
Did any of them spark your imagination? Write some code to play around with your favorite thing. 
Find and read more documentation about it – or an entire book, 
if there is one. Also, check out the Android Developers 
# YouTube channel (youtube.com/user/androiddevelopers) 
and listen to the Android Developers Backstage podcast
# (androidbackstage.blogspot.com) for Android updates from Google.

# Meet people.
Local meetups are a good place to meet like-minded developers. 
Lots of top-notch Android developers are active on Twitter. 
Attend Android conferences to meet other Android developers (like us!).

https://www.bignerdranch.com/books/

# Explore the open-source community. 
Android development is exploding on github.com. 
When you find a cool library, see what other projects its contributors are committing to. 
Share your own code, too – you never know who will find it useful or interesting. 
We find the Android Weekly mailing list
# (androidweekly.net) 
to be a great way to see what is happening in the Android community.





