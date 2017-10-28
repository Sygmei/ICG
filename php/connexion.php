<?php
require_once('constantes.php');

try {
  $pdo = new PDO("mysql:host=".DB_SERVER.";port=3306;dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
  error_log('Connexion échouée : '.$e->getMessage());
}
