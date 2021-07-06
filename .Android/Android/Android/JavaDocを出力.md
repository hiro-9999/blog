ターミナルからコマンドでJavaDocを出力

build.gradleの修正
JavaDocを出力したい対象(moduleとか)のbuild.gradleに以下を追加。

android.libraryVariants.all { variant ->

    if (variant.name == "debug") {
        return
    }

    task("generateJavadoc", type: Javadoc) {
        title = "My JavaDoc"
        description "Generates JavaDoc."
        source = variant.javaCompile.source
        ext.androidJar =
                "${android.sdkDirectory}/platforms/${android.compileSdkVersion}/android.jar"
        classpath = files(variant.javaCompile.classpath.files) + files(ext.androidJar)
        options.links("http://docs.oracle.com/javase/7/docs/api/");
        options.links("http://d.android.com/reference/");
        exclude '**/BuildConfig.java'
        exclude '**/R.java'
    }
}
