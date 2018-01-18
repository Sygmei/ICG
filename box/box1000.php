<?php define("DB_USER", "icicarteogvmv"); define("DB_PASSWORD", "Vmv29470"); define("DB_NAME", "icicarteogvmv"); define("DB_SERVER", "icicarteogvmv.mysql.db"); 
try {
  $pdo = new PDO("mysql:host=".DB_SERVER.";port=3306;dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
  error_log('Connexion échouée : '.$e->getMessage());
}
'.$row['count'].'<br><br>'; $query = $pdo->prepare("SELECT * FROM box WHERE creee = 0 LIMIT 200 INTO OUTFILE '/box/box.csv' FIELDS ENCLOSED BY '\"' TERMINATED BY ';' 
	echo $row['box'].'<br>';
}
?>
