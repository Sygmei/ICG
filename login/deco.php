<?php
session_start();

unset($_SESSION['prestataire-token']);
header('Location: index.php');
?>
