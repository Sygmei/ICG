<?php
session_start();
$box = $_SESSION['box'];
$prix = $_SESSION['prix'];

if ($box != NULL && $box != "") {
  require_once('../php/connexion.php');

  $query = $pdo->prepare("SELECT * FROM `box` WHERE `box`.`box` = :box");
  $query->bindParam(":box", $box);
  $query->execute();
  $row = $query->fetch();

  if ($row == NULL || $row == "" || $row['valide'] == false || $row['tentative'] < 1) {
    header('Location: ../');
  }
} else {
  header('Location: ../');
}
?>

<!doctype html>
<html lang="fr">
  <head>
    <?php require_once('../templates/header.html'); ?>
    <title>Information | IciCarteGrise</title>
  </head>

  <body>
    <?php require_once('../templates/navbar.html'); ?>

    <main>
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-xs-12">
            <div class="card my-4">
              <div class="card-header">
                <p class="page-header">Informations personnelles <i class="fa fa-user-circle" aria-hidden="true"></i><?php echo $row['id']; ?></p>
              </div>
              <div class="card-block">
                <form action="/confirmation/index.php" method="post">
                  <div class="form-group">
                    <select class="form-control" id="civilite" name="civilite" required>
                      <option>Civilité</option>
                      <option value="Madame">Madame</option>
                      <option value="Monsieur">Monsieur</option>
                      <option value="Société">Société</option>
                    </select>
                  </div>
                  <div class="row">
                    <div class="col-md-6 col-xs-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="nom" name="last_name" placeholder="Nom" required>
                      </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="prenom" name="first_name" placeholder="Prénom">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 col-xs-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Téléphone" required>
                      </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                      <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Adresse mail" required>
                      </div>
                    </div>
                  </div>
                  <div class="alert alert-vmv text-center">
                    <strong>Prix : <?php echo $prix; ?> <i class='fa fa-eur' aria-hidden='true'></i></strong>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-vmv m-3">Continuer <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer>
      <?php require_once('../templates/top-footer.html'); ?>
      <?php require_once('../templates/bottom-footer.html'); ?>
    </footer>

    <?php require_once('../templates/footer-js.html'); ?>
  <body>
</html>
