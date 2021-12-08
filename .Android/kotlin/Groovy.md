# gradle
https://gradle.org

$ ./gradlew build --scan

https://docs.gradle.org/current/samples/sample_building_kotlin_libraries.html

https://docs.gradle.org/current/userguide/groovy_build_script_primer.html
```gradle
gradle.taskGraph.beforeTask 

gradle.taskGraph.beforeTask { Task task ->
    if (task.name ==~ /process.*GoogleServices/) {
        android.applicationVariants.all { variant ->
            if (task.name ==~ /(?i)processDev.*GoogleServices/) {
                copy {
                    from "src/dev"
                    into "."
                    include "google-services.json"
                }
            } else {
                copy {
                    from "src/prd"
                    into "."
                    include "google-services.json"
                }
            }
        }
    }
}
https://qiita.com/farman0629/items/11c498af824f02a484b6

android {
//　略
    flavorDimensions "mode", "api"
    productFlavors {
        dev {
            dimension "mode"
            applicationIdSuffix '.dev'
        }
        prd {
            dimension "mode"
        }

        minApi23 {
            dimension "api"
            minSdkVersion '23'
        }

        minApi21 {
            dimension "api"
            minSdkVersion '21'
        }
    }

    buildTypes {
        debug {
           // 略
        }
        release {
           // 略
        }
    }
}
```



# Groovy 1.4
https://groovy.apache.org/download.html

### Functional programming (FP) is a programming style that focuses
on functions and minimizes changes of state (using immutable data structures). It is closer to expressing solutions mathematically, rather than through step-by-step instructions.

## A domain-specific language (DSL) is a custom programming language made for a specific domain. For example, you can think of HTML as a DSL for displaying web pages.
Some languages allow you such freedom that you can create a DSL inside the language. For example, Groovy and Scala allow you to override the math symbols (+, -, etc.). The other freedoms of these languages (optional parentheses and semicolons) allow for DSL-like interfaces. We call these DSL-like interfaces fluent interfaces.
You can also create fluent interfaces in Java and other languages. The following sections discuss building a DSL with Groovy.

Modern Programming Made Easy Using Java, Scala, Groovy, and JavaScript by Adam L. Davis (z-lib.org).pdf
# Java Groovy Scala
In Java, the compiler is called javac; in Groovy it is groovyc; and it is scalac in Scala (see a trend here?). All three of these languages can be compiled to bytecode and run on the JVM.
