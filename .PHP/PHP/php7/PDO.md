https://qiita.com/mpyw/items/d52351bd1a8068344cc2
# PDOフェッチパターン大全

$sql = "SELECT name FROM people WHERE gender = 'female'";
$names = $pdo->query($sql)->fetchAll(PDO::FETCH_COLUMN);
var_dump($names); // ['Lucy', 'Mary']
