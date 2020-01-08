## service
>Service startForeground不显示Notification的办法

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
