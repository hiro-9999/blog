mysql> desc city;
# INTERSECT
“WHERE c.first_name LIKE 'D%' AND c.last_name LIKE 'T%'
INTERSECT
SELECT a.first_name, a.last_name
FROM actor a
WHERE a.first_name LIKE 'D%' AND a.last_name LIKE 'T%';
Empty set (0.04 sec)”

抜粋:: Alan Beaulieu  “Learning SQL, 3rd Edition”。 Apple Books  

