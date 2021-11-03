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
```

キャンセルしたいときは
handler.removeCallbacks(r);
で、runnableとの関係を切ってあげればOKです。

https://qiita.com/aftercider/items/81edf35993c2df3de353

