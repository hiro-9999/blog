## UNITY　WINDOWSビルドでWEBページを表示したい
https://meetup-jp.toast.com/3993

https://qiita.com/OKsaiyowa/items/326a795359453e981384

# UniWebView
https://github.com/NabilNoaman/UniWebView

# 2.WWebView支持PC
支持平台assetsore WWebView
https://blog.csdn.net/qq_36927288/article/details/84970000?spm=1001.2101.3001.6650.1&utm_medium=distribute.pc_relevant.none-task-blog-2%7Edefault%7ECTRLIST%7Edefault-1-84970000-blog-52205497.pc_relevant_default&depth_1-utm_source=distribute.pc_relevant.none-task-blog-2%7Edefault%7ECTRLIST%7Edefault-1-84970000-blog-52205497.pc_relevant_default&utm_relevant_index=2

### WWWForm
https://www.cnblogs.com/leng-yuye/archive/2012/08/01/2617971.html

https://docs.unity3d.com/ScriptReference/WWWForm.html

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


```JS
# unity3d和网页数据交互
https://developer.aliyun.com/article/469915

https://www.cnblogs.com/AngelLee2009/p/3281762.html

```
1、Unity3D的游戏引擎是和编辑器集成在一起的，所有它也是一个制作/开发平台。
2、Unity3D是使用JavaScript、C#作为核心脚本语言来驱动事个游戏引擎。
3、平台可以发布Exe执行文件或者打包为可供网页调用的一个独立的包文件。
4、用Unity3D制作的工程具有高度的可移植性，可以在PS xbox360 Android iPhone mac等系统上运行。
嵌入网页：
1、用Unity3D实现嵌入网页和Flash插入网页原理完全一致，也是使用ActiveX控件嵌入在网页中。所以和Flash一样，需要安装一个播放器插件（小于3M）。
 
2、查看页面源码，可以看到如下嵌入部分：
<object id="UnityObject" classid="clsid:444785F1-DE89-4295-863A-D46C3A781394"width="600" height="450"codebase="http://webplayer.unity3d.com/download_webplayer/UnityWebPlayer.cab#version=2,0,0,0">
         <param name="src" value="MyDataFile.unity3d" />
         <embed id="UnityEmbed" src="MyDataFile.unity3d" width="600" height="450"type="applicationnd.unity" pluginspage="http://www.unity3d.com/unity-web-player-2.x" />
</object>
3、和Flash一样，在浏览器中加载3D场景或者读取时的图标进度条都能进行自定义，也可以自定义是否激活是用右键菜单。
 
数据交互
1、在Unity3D中调用网页js函数
         如果我们在html中有脚本函数；则在u3d中我们可用使用Application.ExternalCall调用js函数，该方法只适合在Web3D环境下使用。该方法支持基本类型的传递和数组传递，任何类型都会转换成字符串类型使用。
例子代码：
Application.ExternalCall("SayHello","The game says hello!);//调用SayHello，传递一个字符串
 
2、在Unity3D中直接执行一段脚本代码如：
Application.ExternalEval("if(document.location.host!='unity3d.com'){document.location='http://unity3d.com';}");
 
3、在js中调用Unity3D函数（传递消息等）
如果有Unity3D中有一段用JS写的功能函数：
function MyFunction(param:String)
{
         Debug.Log(param);
}
需要在JS中呼叫这个函数则可以这样写：
<script type="text/javascript" language="javascript">
SaySomethingToUnity(document.getElementById("UnityContent").SendMessage("MyObject","MyFunction","Hello fom a web page!"););
</script>
这里要注意的是MyObject代表Unity3D中的一个场景名称为MyObject，MyFunction是调用的函数，最后一个字符为传递的参数。
 
与php，jsp等的表单数据交互
         与php，jsp等的表单数据交互很可能会是今后用到的主要方式，原理是利用form表彰传递数据，下面以php为例来进行说明。
         Unity3D可以实现向某个指定页面发送表单数据然后在php中使用_POST获取传递回来的表彰数据。比如：
<?php
         $action = $_POST["myform_action"];//定义一个变量$action用来获取页面传递过来的表单数据
         if($action!=""){
                  echo $action;//如果接收到了数据则打印出数据内容
         }
?>
在Unity3D中我们发送数据的代码如下：
var form = new WWWForm();//定义一个网页表单
form.AddField("myform_action","Action1");//添加一个表彰字段名称为myform_action内容是action1
var download = new WWW("www.xxx.com/index.php",form);//发送表单数据到指定网址页面
假如index.php执行的是数据库/统计操作，我们就可以对传递的数据进行保存读取或者其他操作了。 
```


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


