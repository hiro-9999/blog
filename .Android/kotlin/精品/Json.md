# Moshi is a modern JSON library for Android, Java and Kotlin. It makes it easy to parse JSON into Java and Kotlin classes:
https://github.com/square/moshi/

https://github.com/cbeust/klaxon

### GSON, Jackson, and Moshi
GSON (https://github.com/google/ gson) and, more recently, Square's Moshi (https://github.com/square/moshi). 

How to Build Android Apps with Kotlin A hands-on guide to developing, testing and publishing your first apps with Android (Alex Forrester, Eran Boudjnah etc.) (z-lib.org)
## Glide
Picasso (https://square.github.io/picasso/) and Glide by Bump Technologies (https://github.com/bumptech/glide). Facebook's Fresco (https://frescolib.org/) is somewhat less popular. We will proceed with Glide because it is consistently the faster of the two for loading images, whether it is from the internet or from the cache. It's worth noting that Picasso is more lightweight, so it is a trade- off, and both libraries are quite useful.

## 実装
https://star-zero.medium.com/タイプによって構造の異なるjsonをmoshiでパースする-7f8ba366594a　🔴
```kotlin
implementation "com.squareup.moshi:moshi:1.8.0"
implementation "com.squareup.moshi:moshi-adapters:1.8.0"
kapt "com.squareup.moshi:moshi-kotlin-codegen:1.8.0"

sealed class Object

@JsonClass(generateAdapter = true)
data class Rectangle(
    @Json(name = "width") val width: Int,
    @Json(name = "height") val height: Int
) : Object()

@JsonClass(generateAdapter = true)
data class Circle(
    @Json(name = "radius") val radius: Int
): Object()

val moshi = Moshi.Builder()
    .add(
        PolymorphicJsonAdapterFactory.of(Object::class.java, "type")
            .withSubtype(Rectangle::class.java, "rectangle")
            .withSubtype(Circle::class.java, "circle")
    )
    .build()

val type = Types.newParameterizedType(List::class.java, Object::class.java)
val adapter: JsonAdapter<List<Object>> = moshi.adapter(type)

val objects = adapter.fromJson(json) // [Rectangle(width=100, height=200), Circle(radius=50)]
view raw Parse.kt hosted with ❤ by GitHub
 ```

https://qiita.com/unpi/items/962a3d5ddf1ba9714fb2

