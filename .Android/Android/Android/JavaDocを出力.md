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

https://docs.gradle.org/current/javadoc/org/gradle/api/Project.html

task
Task task​(Map<String,​?> args,
          String name)
   throws InvalidUserDataException
Creates a Task with the given name and adds it to this project. A map of creation options can be passed to this method to control how the task is created. The following options are available:

Option	Description	Default Value
"type"	The class of the task to create.	DefaultTask
"overwrite"	Replace an existing task?	false
"dependsOn"	A task name or set of task names which this task depends on	[]
"action"	A closure or Action to add to the task.	null
"description"	A description of the task.	null
"group"	A task group which this task belongs to.	null
