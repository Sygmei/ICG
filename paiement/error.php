<?php // require_once('../php/disabledBox.php'); ?>
<?php
session_start();
?>
<!doctype html>
<html lang="fr">
  <head>
    <?php require_once('../templates/header.html'); ?>
    <title>Erreur de paiement | IciCarteGrise</title>
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
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  Un erreur s'est produite lors du paiement !
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="alert alert-vmv alert-effect" role="alert">
                      Prix : <?php echo $_POST['vads_amount'] / 100; ?> €
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="alert alert-vmv alert-effect" role="alert">
                      Date : <?php
                        $date = new DateTime($_POST['vads_trans_date']);
                        echo $date->format('d-m-y à H:i:s');
                      ?>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="alert alert-vmv alert-effect" role="alert">
                      ID Transaction : <?php echo $_POST['vads_trans_id']; ?>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-4 col-sm-8 col-xs-12">
                    <div class="alert alert-vmv alert-effect" role="alert">
                      <?php echo $_POST['vads_cust_title']; ?> <?php echo $_POST['vads_cust_name']; ?>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="alert alert-vmv alert-effect" role="alert">
                      <i class="fa fa-phone" aria-hidden="true"></i> <?php echo $_POST['vads_cust_cell_phone']; ?>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="alert alert-vmv alert-effect" role="alert">
                      <i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $_POST['vads_cust_email']; ?>
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
