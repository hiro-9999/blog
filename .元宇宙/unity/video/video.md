## 360 VIDEO PLAYER (with VR mode) - Unity Tutorial good 🔴
https://www.youtube.com/watch?v=9WEjMckJPFY&ab_channel=NPNLUSC

https://www.youtube.com/watch?v=qOKZjR4FzN0&ab_channel=Pixvana


UnityXRプラグイン

# What Do I Need to Become a VR Developer? (VR Headsets, Apps, and Skills needed)
https://www.youtube.com/watch?v=oqXBY51KP5A&ab_channel=JustinPBarnett-VRGameDev

## How to Create Video Player in Unity3D
https://www.youtube.com/watch?v=aiISib1Mrs4&ab_channel=AkbarProject

## Unity Video Player with Time Scrub and Controls
https://www.youtube.com/watch?v=9LwOmMzOrp4&ab_channel=JasonWeimann


## 01] [Oculus Quest] [Unity] 360ビデオプレーヤー
https://www.youtube.com/watch?v=gK0CU0imuw0&ab_channel=VRwithAndrew


## Skybox from 360 Panorama Image in Unity3d
https://www.youtube.com/watch?v=OQUtvyGrusk&ab_channel=LearnEverythingFast


### LEARN UNITY - The Most BASIC TUTORIAL I'll Ever Make 🔴 need to see 
https://www.youtube.com/watch?v=pwZpJzpE2lQ&ab_channel=Imphenzia

 # STEAM VR - The Ultimate VR developer guide 🟡
 https://www.youtube.com/watch?v=5C6zr4Q5AlA&ab_channel=Valem
 
 https://www.youtube.com/channel/UCPJlesN59MzHPPCp0Lg8sLw

## How to Make VR Videos in Unity: Tutorial
https://www.youtube.com/watch?v=C_u3rM-y154&ab_channel=DreadVR

 ## Unity VR 360 Video Tutorial - How to Render a 360-Degree Video 🔴
 https://www.youtube.com/watch?v=eaqwszsH6Jg&ab_channel=Zenva
 
 
 ### Flip Normals in Unity 3D/spheres 🔴
 https://stackoverflow.com/questions/36423846/flip-normals-in-unity-3d-spheres
 
 ```
 Shader "Flip Normals" {
    Properties {
        _MainTex ("Base (RGB)", 2D) = "white" {}
    }
    SubShader {

        Tags { "RenderType" = "Opaque" }

        Cull Off

        CGPROGRAM

        #pragma surface surf Lambert vertex:vert
        sampler2D _MainTex;

        struct Input {
            float2 uv_MainTex;
            float4 color : COLOR;
        };

        void vert(inout appdata_full v) {
            v.normal.xyz = v.normal * -1;
        }

        void surf (Input IN, inout SurfaceOutput o) {
             fixed3 result = tex2D(_MainTex, IN.uv_MainTex);
             o.Albedo = result.rgb;
             o.Alpha = 1;
        }

        ENDCG

    }

      Fallback "Diffuse"
}
 ```

 
 https://docs.unity3d.com/ScriptReference/MeshFilter-mesh.html
 
 




