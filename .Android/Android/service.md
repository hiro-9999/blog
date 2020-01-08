## service

>ok
https://baiqiantao.github.io/%E5%85%B6%E4%BB%96/%E9%80%82%E9%85%8D/6ZJvIb/


if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.O) { //26，8.0  
    NotificationChannel channel = new NotificationChannel(CHANNEL_ID, "【内幕】", NotificationManager.IMPORTANCE_DEFAULT);//渠道id、渠道名称、渠道重要性级别  
    channel.setDescription("【渠道描述】"); //设置渠道描述，这个描述在系统设置中可以看到  
    channel.enableLights(true);//是否显示通知指示灯  
    channel.enableVibration(true);//是否振动  
    channel.setShowBadge(true); //是否允许这个渠道下的通知显示角标，默认会显示角标  
    manager.createNotificationChannel(channel);//创建通知渠道  
}  
http://www.bloguan.com/?id=535

^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

https://www.itranslater.com/qa/details/2325650112728531968

https://blog.csdn.net/am256341/article/details/89874415
>
https://blog.csdn.net/wxx614817/article/details/50669420

builder.setContentTitle() // required
.setSmallIcon() // required
.setContentText() // required
.setChannelId(id) // required for deprecated in API level >= 26 constructor .Builder(this)



https://qiita.com/ssoejima/items/43b1f78e323d5454f54f

>Service startForeground不显示Notification的办法
https://rakuishi.com/archives/android-oreo-notification-foreground/

private void startMyOwnForeground(){

    if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.O){

        String NOTIFICATION_CHANNEL_ID = "com.example.simpleapp";
        String channelName = "My Background Service";
        NotificationChannel chan = new NotificationChannel(NOTIFICATION_CHANNEL_ID, channelName, NotificationManager.IMPORTANCE_NONE);
        chan.setLightColor(Color.BLUE);
        chan.setLockscreenVisibility(Notification.VISIBILITY_PRIVATE);
        NotificationManager manager = (NotificationManager) getSystemService(Context.NOTIFICATION_SERVICE);
        assert manager != null;
        manager.createNotificationChannel(chan);

        NotificationCompat.Builder notificationBuilder = new NotificationCompat.Builder(this, NOTIFICATION_CHANNEL_ID);
        Notification notification = notificationBuilder.setOngoing(true)
                .setSmallIcon(AppSpecific.SMALL_ICON)
                .setContentTitle("App is running in background")
                .setPriority(NotificationManager.IMPORTANCE_MIN)
                .setCategory(Notification.CATEGORY_SERVICE)
                .build();
        startForeground(2, notification);
    }
}


>低级别（没有通知声音也不会出现在状态栏上）	IMPORTANCE_MIN
https://blog.csdn.net/OxuanO/article/details/86165497

https://blog.csdn.net/im_coding/article/details/84036523
channel.enableVibration(false);//震动不可用
channel.setSound(null, null); //设置没有声音
https://blog.csdn.net/zhao0829wang/article/details/45269209

>is good
https://blog.csdn.net/u014452224/article/details/84959194

Service的onCreate()里面设置加入如下代码即可解决

if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.O) {
NotificationChannel channel = new NotificationChannel(DEFAULT_CHANNEL_ID, DEFAULT_CHANNEL_NAME, NotificationManager.IMPORTANCE_HIGH);
channel.enableVibration(false);
channel.setVibrationPattern(new long[]{0});
channel.setSound(null, null);
if (mNotificationManager != null) {
mNotificationManager.createNotificationChannel(channel);
}
Notification notification = new Notification.Builder(getApplicationContext(), DEFAULT_CHANNEL_ID).build();
startForeground(SERVICE_NOTIFICATION_ID, notification);
stopForeground(true);
}

=======================================================================================
https://blog.csdn.net/warren288/article/details/51104214

https://hant-kb.kutu66.com/c/13808912
https://github.com/bannedbook/SpeedUp.VPN/commit/284ba693eafe93568bd27e67477b5d8aa0372d12

https://blog.csdn.net/yujihu989/article/details/54587076?utm_source=blogxgwz7


> return START_NOT_STICKY;
https://developer.android.com/reference/android/app/Service

https://androidwave.com/foreground-service-android-example/

To hide me, click and uncheck \"Hidden Notification Service\
https://www.spiria.com/en/blog/mobile-development/hiding-foreground-services-notifications-in-android/

https://stackoverflow.com/questions/10962418/how-to-startforeground-without-showing-notification/18281520
