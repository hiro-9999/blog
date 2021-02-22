# Using WebView from more than one process at once with the same data directory is not supported.

解决方法：
在Application中 onCreate()中初始化initPieWebView()
```android
@Override
    public void onCreate() {
        super.onCreate();
       #  initPieWebView();
        
 public void onCreate() {
        ...
        if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.P) {
            String processName = getProcessName(this);
            String packageName = this.getPackageName();
            if (!packageName.equals(processName)) {
                WebView.setDataDirectorySuffix(processName);
            }
        }
}

private String getProcessName(Context context) {
        if (context == null) return null;
        ActivityManager manager = (ActivityManager) context.getSystemService(Context.ACTIVITY_SERVICE);
        for (ActivityManager.RunningAppProcessInfo processInfo : manager.getRunningAppProcesses()) {
            if (processInfo.pid == android.os.Process.myPid()) {
                return processInfo.processName;
            }
        }
        return null;
}
https://www.codenong.com/cs106809490/


https://blog.csdn.net/qq_36347817/article/details/104675058

```
