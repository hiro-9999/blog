## 360 VIDEO PLAYER (with VR mode) - Unity Tutorial good 🔴

https://www.youtube.com/watch?v=9WEjMckJPFY&ab_channel=NPNLUSC

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
