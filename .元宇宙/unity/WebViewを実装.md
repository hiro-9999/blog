## UNITY　WINDOWSビルドでWEBページを表示したい

## 在 Unity 编辑器中，打开一个用来显示网页的工具窗
https://blog.csdn.net/WPAPA/article/details/122714518

```unity
using System;
using System.Reflection;
using UnityEditor;

public class TestEditorCode
{
    [MenuItem("Tools/测试用编辑器窗口开网页")]
    private static void OpenWindow()
    {
        string Url = "https://www.bilibili.com/";

        string typeName = "UnityEditor.Web.WebViewEditorWindowTabs";
        Type type = Assembly.Load("UnityEditor.dll").GetType(typeName);

        BindingFlags flags = BindingFlags.Public | BindingFlags.Static | BindingFlags.FlattenHierarchy;
        MethodInfo mInfo = type.GetMethod("Create", flags);
        
        mInfo = mInfo.MakeGenericMethod(type);
        mInfo.Invoke(null, new object[] { "b站", Url, 800, 600, 1920, 1080 });
    }
}

// 不传入 IExplore.exe 就是用系统默认的浏览器
System.Diagnostics.Process.Start("IExplore.exe", "https://www.bilibili.com/");


WWW www = new WWW("https://www.bilibili.com/");
Application.OpenURL(www.url);


```
# unity3d和网页数据交互的基本原理
https://www.cnblogs.com/AngelLee2009/p/3281762.html


# WebViewHook
https://baba-s.hatenablog.com/entry/2019/07/16/090000


https://github.com/willnode/WebViewHook



https://qiita.com/fukaken5050/items/7d0fba55565d7e53dcc8

### test example
https://github.com/fukaken5050/TestGreeEditorWebView

https://teratail.com/questions/io9r6ajcxikey6

UNITY5.3 + awesomium_unity_1_7_4_2_sdk_win_full.unitypackage
を用いることで、WindowsビルドにてWEBページを表示することができました。

http://tips.hecomi.com/entry/2014/05/05/214827

コンソールにエラーが出ますが、エディタ上では利用できないので、
気にせずビルドすると良いようです。


https://tips.hecomi.com/entry/20130818/1376844813


https://github.com/gree/unity-webview


https://github.com/gree/unity-webview/tree/master/dist/package

https://nobushiueshi.com/unitywebview%E3%82%92%E5%AE%9F%E8%A3%85%E3%81%99%E3%82%8B%E6%96%B9%E6%B3%95/


