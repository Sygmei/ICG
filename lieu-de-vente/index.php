<!doctype html>
<html lang="fr">
  <head>
    <?php require_once('../templates/header.html'); ?>
    <title>Lieu de Vente | IciCarteGrise</title>
    <link rel="stylesheet" href="../css/contact.css" />
  </head>

  <body>
    <?php require_once('../templates/navbar.html'); ?>

    <main>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12 my-3 text-center">
            <button id="btn-par" type="button" class="btn btn-vmv my-4" name="particulier">Particulier</button>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 my-3 text-center">
            <button id="btn-pro" type="button" class="btn btn-vmv my-4" name="pro">Professionnel</button>
          </div>
        </div>
        <div id="particulier" class="row">
          <div class="col-md-12">
            <?php
              $civilite = isset($_POST["civilite"]) ? htmlspecialchars($_POST["civilite"]) : NULL;
              $nom = isset($_POST["nom"]) ? htmlspecialchars($_POST["nom"]) : NULL;
              $prenom = isset($_POST["prenom"]) ? htmlspecialchars($_POST["prenom"]) : NULL;
              $phone = isset($_POST["phone"]) ? htmlspecialchars($_POST["phone"]) : NULL;
              $mail = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : NULL;

              if ($nom != NULL && $mail != NULL) {
                require_once('../php/simpleMail.php');
                require_once('../php/sendMail.php');

                $mail_data = array(
                  'nom' => $civilite." ".$nom." ".$prenom,
                  'from' => $mail,
                  'phone' => $phone
                );

                $mail_data = json_encode($mail_data);
                $result = mailDemandeRappel($mail_data);

                // sendSimpleMailRappel($civilite, $nom, $prenom, $phone, $mail);

                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        Votre demande de rappel a bien été prise en compte, un conseiller vous contactera prochainement.
                      </div>';
              }
            ?>
            <div class="alert alert-vmv mt-3">
              <i class="fa fa-map-marker" aria-hidden="true"></i> Points de vente où faire votre carte grise
            </div>
            <div class="google-maps mb-3">
              <iframe src="https://www.google.com/maps/d/embed?mid=1GnUqh1Y3_SMUjmVUZv7c64LjKok" width="640" height="480"></iframe>
            </div>
          </div>
        </div>
        <div id="professionnel" class="row">
          <div class="col-md-12">
            <div class="card my-4">
              <div class="card-header">
                <p class="page-header">Demande de rappel <i class="fa fa-bell" aria-hidden="true"></i></p>
              </div>
              <div class="card-block">
                          <form action="index.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <select class="form-control" id="civilite" name="civilite" required>
                  <option>Civilité</option>
                  <option value="Madame">Madame</option>
                  <option value="Monsieur">Monsieur</option>
                  <option value="Societe">Société</option>
                </select>
              </div>
              <div class="row">
                <div class="col-md-6 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" required>
                  </div>
                </div>
                <div class="col-md-6 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom">
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
              <div class="text-center">
                <button type="submit" class="btn btn-vmv mt-2">Envoyer la demande de rappel <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
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
    <script type="text/javascript" src="index.js"></script>
  <body>
</html>
