https://developer.android.com/guide/practices/screens-distribution?hl=ja

マルチウィンドウ モードは Android 7.0（API レベル 24）以降で実行されているすべてのアプリで使用でき、アプリはデフォルトでサイズ変更が可能です。また、アプリ全体または特定のアクティビティの属性 android:resizeableActivity true を明示的に設定することもできます。

アプリまたはアクティビティをマルチウィンドウ モードで実行したくない場合は、android:resizeableActivity false を設定します。この場合、アプリは常に全画面表示されます。表示方法は、Android OS のレベルに応じて、システムによって制御されます。
