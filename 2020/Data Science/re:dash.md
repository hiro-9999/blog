## re:dashの各種統計値
https://techblog.timers-inc.com/entry/2018/01/29/122206
＞前提事項： StandardSQLを使おう

## re:dash
https://seleck.cc/614

https://qiita.com/anntoque/items/4657df31f4acb5015f97
>re:dash うるう年 判定
https://blog.yuyat.jp/post/filtering-tables-in-bigquery-standard-sql/
https://qiita.com/toyama0919/items/f3482ab9e96c82df5952

https://qiita.com/kouya0219/items/89bdd7f5c72610777bca
```
SELECT q.id as query_ID
       ,CASE
           WHEN q.schedule LIKE '%:%' THEN q.schedule
           ELSE CASE
                    WHEN trunc(to_number(q.schedule, '9999999')/60, 0) < 60 THEN trunc(to_number(q.schedule, '9999999')/60, 0) || '分'
                    ELSE CASE
                             WHEN trunc(to_number(q.schedule, '9999999')/60, 0) < 1440 THEN trunc(to_number(q.schedule, '9999999')/60/60, 0) || '時間'
                             ELSE trunc(to_number(q.schedule, '9999999')/60/60/24, 0) || '日'
                         END
                END
       END AS 実行間隔 
       ,q.name AS タイトル 
       ,ds.name AS データソース名 
       ,qr.runtime AS Runtime 
       ,qr.retrieved_at AS 最終実行日時
FROM queries q
LEFT JOIN data_sources ds ON q.data_source_id = ds.id
LEFT JOIN query_results qr ON q.query_hash = qr.query_hash
AND qr.retrieved_at =
  (SELECT max(retrieved_at)
   FROM query_results
   WHERE q.query_hash = query_results.query_hash)
WHERE schedule != ''
ORDER BY q.id ASC
```
