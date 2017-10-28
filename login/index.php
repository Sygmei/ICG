<?php
session_start();
$token = $_SESSION['prestataire-token'];

if ($token != NULL && $token != "") {
  require_once('../php/connexion.php');

  $query = $pdo->prepare("SELECT COUNT(id) as token FROM `prestataire` WHERE `token` = :token");
  $query->bindParam(":token", $token);
  $query->execute();
  $row = $query->fetch();

  if ($row['token'] == 1) {
    header('Location: ../prestataire');
  }
}
?>

<!doctype html>
<html lang="fr">
  <head>
    <?php require_once('../templates/header.html'); ?>
    <title>Login | IciCarteGrise</title>

    <link rel="stylesheet" href="login.css" />
  </head>

  <body>
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3 col-xs-12">
            <form class="connexion" action="index.php" method="post">
              <h2>Accès Prestataire <i class="fa fa-handshake-o" aria-hidden="true"></i></h2>
              <div class="form-group">
                <input type="text" class="form-control" name="login" id="login" placeholder="Nom d'utilisateur">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="pass" id="password" placeholder="Mot de passe">
              </div>
              <div id="alert"></div>
              <div class="text-center">
                <button id="submit" type="submit" disabled class="btn btn-connexion">Connexion <i class="fa fa-sign-in" aria-hidden="true"></i></button>
                <a href="/" class="btn btn-connexion float-right" type="button" name="home"><i class="fa fa-home" aria-hidden="true"></i></a>
              </div>
            </form>
          </div>
        </div>
      </div>

    <footer>

    </footer>

    <?php require_once('../templates/footer-js.html'); ?>
    <script type="text/javascript" src="login.js"></script>
  </body>
</html>

<?php
require_once('../php/connexion.php');

if (isset($_POST['login']) && isset($_POST['pass'])) {
    $login = htmlspecialchars($_POST['login']);
    $pass = htmlspecialchars($_POST['pass']);

    $query = $pdo->prepare("SELECT * FROM prestataire WHERE login = :login AND pass = PASSWORD(:pass)");
    $query->bindParam(":login", $login);
    $query->bindParam(":pass", $pass);
    $query->execute();
    $row = $query->fetch();

    if ($row != false) {
        $_SESSION['prestataire-token'] = $row['token'];
        $_SESSION['prestataire-id'] = $row['login'];
        echo '<script src="succes.js"></script>';
    } else {
        echo '<script src="erreur.js"></script>';
    }
}
?>
