https://sql55.com/t-sql/t-sql-delete-1.php

```sql
次のクエリーで、LastName が Tanaka さんの TestResult を削除してみましょう。
次のように書いても同じ意味です。 AS を使って T という、エイリアス（別名）を指定しています。 複数のテーブルを結合して更新したい時にはこちらを使います。

DELETE 	T
FROM	[テーブル1] AS T
WHERE 	[条件];

DELETE  TR
FROM    TestResult AS TR
            INNER JOIN Student AS S
                ON TR.StudentID = S.StudentID
WHERE   S.LastName = 'Tanaka';

```
