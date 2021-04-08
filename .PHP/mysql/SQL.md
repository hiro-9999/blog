https://cloud.google.com/bigquery/docs/reference/standard-sql/date_functions?hl=ja
```sql
WITH table AS (SELECT DATE('2017-11-05') AS date)
SELECT
  date,
  EXTRACT(WEEK(SUNDAY) FROM date) AS week_sunday,
  EXTRACT(WEEK(MONDAY) FROM date) AS week_monday FROM table;
  ```
