<?php
define("DB_USER", "icicarteogvmv");
define("DB_PASSWORD", "Vmv29470");
define("DB_NAME", "icicarteogvmv");
define("DB_SERVER", "icicarteogvmv.mysql.db");

try {
  $pdo = new PDO("mysql:host=".DB_SERVER.";port=3306;dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
  error_log('Connexion échouée : '.$e->getMessage());
}

$query = $pdo->prepare("SELECT COUNT(box) as count FROM box");
$query->execute();
$row = $query->fetch();

echo 'Nombre de Box dans la base de données : '.$row['count'].'<br><br>';

$query = $pdo->prepare("SELECT * FROM box  LIMIT 1000");
$query->execute();

for ($i=0; $row = $query->fetch() ; $i++) {
	echo $row['box'].'<br>';
}
?>
