<?php require_once('../php/disabledBox.php');

require_once('../php/sendMail.php');

error_log("Donnees POST après un paiement réussi : ".var_dump($_POST));

$nom = $_SESSION['first_name'].' '.$_SESSION['last_name'];

$mail_data = array(
      'nom' => $nom,
      'from' => $_SESSION['email'],
      'box' => $_SESSION['box'],
      'phone' => $_SESSION['phone'],
      'demande' => $_SESSION['demande'],
      'immat' => $_SESSION['immat'],
      'marque' => $_SESSION['modele'],
      'modele' => $_SESSION['modele_precis']
    );

$mail_data = json_encode($mail_data);

$result1 = mailConfirmationPaiementToCustomer($mail_data);
$result2 = mailConfirmationPaiementToIcicartegrise($mail_data);

?>
<!doctype html>
<html lang="fr">
  <head>
    <?php require_once('../templates/header.html'); ?>
    <title>Paiement Confirmer | IciCarteGrise</title>
  </head>

  <body>
    <?php require_once('../templates/navbar.html'); ?>

    <main>
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1 col-sm-12 col-xs-12">
            <div class="card my-4">
              <div class="card-header">
                <p class="page-header"><i class="fa fa-list" aria-hidden="true"></i> Rétrospective box n° : <?php echo $_SESSION['box']; ?></p>
              </div>
              <div class="card-block">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  Nous avons bien pris en compte votre demande !
                </div>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  Un email récapitulatif viens de vous être envoyé !
                </div>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  Votre box viens d'être désactivée !
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="alert alert-vmv alert-effect" role="alert">
                      Prix : <?php echo $_SESSION['prix']; ?> €
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="alert alert-vmv alert-effect" role="alert">
                      Date : <?php
                        $date = new DateTime($_SESSION['date']);
                        echo $date->format('d-m-y à H:i:s');
                      ?>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="alert alert-vmv alert-effect" role="alert">
                      ID Transaction : <?php echo $_SESSION['trans_id']; ?>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-4 col-sm-8 col-xs-12">
                    <div class="alert alert-vmv alert-effect" role="alert">
                      <?php echo $_SESSION['civilite']; ?> <?php echo $_SESSION['first_name']; ?>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="alert alert-vmv alert-effect" role="alert">
                      <i class="fa fa-phone" aria-hidden="true"></i> <?php echo $_SESSION['phone']; ?>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="alert alert-vmv alert-effect" role="alert">
                      <i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $_SESSION['email']; ?>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="alert alert-vmv alert-effect" role="alert">
                      Marque : <?php echo $_SESSION['modele']; ?>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="alert alert-vmv alert-effect" role="alert">
                      Mise en circulation : <?php echo $_SESSION['circulation']; ?>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="alert alert-vmv alert-effect" role="alert">
                       CO2 : <?php echo $_SESSION['co2']; ?>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="alert alert-vmv alert-effect" role="alert">
                      Modèle : <?php echo $_SESSION['modele_precis']; ?>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="alert alert-vmv alert-effect" role="alert">
                      Puissance fiscale : <?php echo $_SESSION['cv']; ?>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="alert alert-vmv alert-effect" role="alert">
                      Energie : <?php echo $_SESSION['energie']; ?>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-12">
                    <div class="alert alert-vmv text-center" role="alert">
                      Vous trouverez dans l’onglet <a class="mailto" href="/doc" target="_blank">pièce à fournir</a> les documents à nous transmettre.
                    </div>
                  </div>
                </div>
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
