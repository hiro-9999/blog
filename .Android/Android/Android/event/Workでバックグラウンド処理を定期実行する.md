Workでバックグラウンド処理を定期実行する

http://www.fineblue206.net/archives/817



https://akira-watson.com/android/alarmmanager-timer.html
```
Serviceを起動してそこからTimerクラスで定期実行
AlermManegerを使う（android4.0以降）
JobSchedulerを使う（Android5.0以降）
Workで定期実行（Android4.0以降）

final Handler handler = new Handler();
final Runnable r = new Runnable() {
    int count = 0;
    @Override
    public void run() {
        // UIスレッド
        count++;
        if (count > 5) { // 5回実行したら終了
            return;
        }
        doSomething(); // 何かやる
        handler.postDelayed(this, 5000); //5秒間隔で定期的に何かの処理を行う
    }
};
handler.post(r);


        new AlertDialog.Builder(this, R.style.DialogTheme)
                .setTitle("タイトル")
                .setMessage("メッセージ")
                .setPositiveButton("OK", new DialogInterface.OnClickListener() {
                    @Override
                    public void onClick(DialogInterface dialog, int which) {
                        // OKが押下された際の処理
                        Log.i("blockid", "setPositiveButtonが呼ばれました。");
                        onBackPressed();
                    }
                })
                .setOnDismissListener(new DialogInterface.OnDismissListener() {
                    @Override
                    public void onDismiss(DialogInterface dialog) {
                        // ダイアログが閉じられた際の処理
                        Log.i("blockid", "setOnDismissListenerが呼ばれました。");
                        onBackPressed();
                    }
                })
                .setOnCancelListener(new DialogInterface.OnCancelListener() {
                    @Override
                    public void onCancel(DialogInterface dialog) {
                        // ダイアログがキャンセルされた際の処理
                        Log.i("blockid", "setOnCancelListenerが呼ばれました。");
                        onBackPressed();
                    }
                })
                .show();
                https://stackoverflow.com/questions/37809423/android-setondismisslistener-on-a-dialogfragment
```

キャンセルしたいときは
handler.removeCallbacks(r);
で、runnableとの関係を切ってあげればOKです。

https://qiita.com/aftercider/items/81edf35993c2df3de353

# Androidで5秒ごとに機能をループ
https://www.fixes.pub/program/637903.html

# TimerTask
https://nompor.com/2018/02/07/post-3043/

