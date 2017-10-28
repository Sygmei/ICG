<?php
session_start();
require_once('../php/connexion.php');

$box = $_SESSION['box'];

$requete = "UPDATE box SET valide = false WHERE box = '{$box}'";

$query = $pdo->prepare($requete);
$query->execute();

?>