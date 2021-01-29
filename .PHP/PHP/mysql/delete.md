https://sql55.com/t-sql/t-sql-delete-1.php

```sql
次のクエリーで、LastName が Tanaka さんの TestResult を削除してみましょう。

DELETE  TR
FROM    TestResult AS TR
            INNER JOIN Student AS S
                ON TR.StudentID = S.StudentID
WHERE   S.LastName = 'Tanaka';

```
