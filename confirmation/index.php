<?php
session_start();
$box = $_SESSION['box'];
$prix = $_SESSION['prix'];

$modele = $_SESSION['modele'];
$type = $_SESSION['type'];
$circulation = $_SESSION['circulation'];
$cv = $_SESSION['cv'];
$co2 = $_SESSION['co2'];
$energie = $_SESSION['energie'];
$modele_precis = $_SESSION['modele_precis'];

require_once('../php/signature.php');

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


$vads_site_id = '47843500';
$vads_ctx_mode = 'PRODUCTION';
$vads_trans_id = trans_id();
$date = new DateTime();
$vads_trans_date = $date->format('YmdHis');
$vads_amount = $prix * 100;
$vads_currency = '978';
$vads_action_mode = 'INTERACTIVE';
$vads_page_action = 'PAYMENT';
$vads_version = 'V2';
$vads_payment_config = 'SINGLE';
$vads_return_mode = 'POST';
$vads_url_cancel = 'http://icicartegrise.fr/paiement/cancel.php';
$vads_url_error = 'http://icicartegrise.fr/paiement/error.php';
$vads_url_refused = 'http://icicartegrise.fr/paiement/refused.php';
$vads_url_success = 'http://icicartegrise.fr/paiement/success.php';

$civilite = $_POST['civilite'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$tel = $_POST['phone'];
$mail = $_POST['email'];

$_SESSION['civilite'] = $civilite;
$_SESSION['first_name'] = $first_name;
$_SESSION['last_name'] = $last_name;
$_SESSION['phone'] = $tel;
$_SESSION['email'] = $mail;
$_SESSION['date'] = $vads_trans_date;
$_SESSION['trans_id'] = $vads_trans_id;

$field = array(
    'vads_action_mode' => $vads_action_mode,
    'vads_amount' => $vads_amount,
    'vads_ctx_mode' => $vads_ctx_mode,
    'vads_currency' => $vads_currency,
    'vads_page_action' => $vads_page_action,
    'vads_payment_config' => $vads_payment_config,
    'vads_site_id' => $vads_site_id,
    'vads_trans_date' => $vads_trans_date,
    'vads_trans_id' => $vads_trans_id,
    'vads_version' => $vads_version,
    'vads_return_mode' => $vads_return_mode,
    'vads_url_cancel' => $vads_url_cancel,
    'vads_url_error' => $vads_url_error,
    'vads_url_refused' => $vads_url_refused,
    'vads_url_success' => $vads_url_success,
    'vads_cust_email' => $mail,
    'vads_cust_cell_phone' => $tel,
    'vads_cust_title' => $civilite,
    'vads_cust_first_name' => $first_name,
    'vads_cust_last_name' => $last_name
);

$key = '5860604604935264';

$signature = signature($field, $key);
$_SESSION['signature'] = $signature;
?>

<!doctype html>
<html lang="fr">
  <head>
    <?php require_once('../templates/header.html'); ?>
    <title>Confirmation | IciCarteGrise</title>
  </head>

  <body>
    <?php require_once('../templates/navbar.html'); ?>

    <main>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 offset-md-1 col-sm-12 col-xs-12">
            <div class="card my-4">
              <div class="card-header">
                <p class="page-header">Confirmation <i class="fa fa-credit-card-alt" aria-hidden="true"></i></p>
              </div>

              <div class="card-block">
                <form action="https://paiement.systempay.fr/vads-payment/" method="post">
                  <input type="hidden" name="vads_site_id" value=<?php echo $vads_site_id; ?> />
                  <input type="hidden" name="vads_ctx_mode" value=<?php echo $vads_ctx_mode; ?> />
                  <input type="hidden" name="vads_trans_id" value=<?php echo $vads_trans_id; ?> />
                  <input type="hidden" name="vads_trans_date" value=<?php echo $vads_trans_date; ?> />
                  <input type="hidden" name="vads_amount" value=<?php echo $vads_amount; ?> />
                  <input type="hidden" name="vads_currency" value=<?php echo $vads_currency; ?> />
                  <input type="hidden" name="vads_action_mode" value=<?php echo $vads_action_mode; ?> />
                  <input type="hidden" name="vads_page_action" value=<?php echo $vads_page_action; ?> />
                  <input type="hidden" name="vads_version" value=<?php echo $vads_version; ?> />
                  <input type="hidden" name="vads_payment_config" value=<?php echo $vads_payment_config; ?> />
                  <input type="hidden" name="vads_return_mode" value=<?php echo $vads_return_mode; ?> />
                  <input type="hidden" name="vads_url_cancel" value="<?php echo $vads_url_cancel; ?>" />
                  <input type="hidden" name="vads_url_error" value="<?php echo $vads_url_error; ?>" />
                  <input type="hidden" name="vads_url_refused" value="<?php echo $vads_url_refused; ?>" />
                  <input type="hidden" name="vads_url_success" value="<?php echo $vads_url_success; ?>" />
                  <input type="hidden" name="signature" value=<?php echo $signature; ?> />
                  <input type="hidden" name="vads_cust_title" value="<?php echo $civilite; ?>" />
                  <input type="hidden" name="vads_cust_cell_phone" value="<?php echo $tel; ?>" />
                  <input type="hidden" name="vads_cust_email" value="<?php echo $mail; ?>" />
                  <input type="hidden" name="vads_cust_last_name" value="<?php echo $last_name; ?>" />
                  <input type="hidden" name="vads_cust_first_name" value="<?php echo $first_name; ?>" />


                  <div class="alert alert-vmv text-center">
                    <strong>Prix : <?php echo $prix; ?> <i class='fa fa-eur' aria-hidden='true'></i></strong>
                  </div>
                  <div class="text-center">
                    <?php if($prix != 0) {
                      echo '<button type="submit" class="btn btn-vmv m-3"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Validez votre commande</button>';
                    } else {
                      echo '<a href="/paiement/success.php" class="btn btn-vmv m-3"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Validez votre commande</a>';
                    }
                    ?>
                  </div>
                </form>

                <hr>

                <p class="page-header">Résumé <i class="fa fa-th-list" aria-hidden="true"></i></p>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="alert alert-vmv">
                        Date de la transaction : <?php echo $date->format('Y-m-d H:i:s'); ?>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="alert alert-vmv">
                        ID de la transaction : <?php echo $vads_trans_id; ?>
                      </div>
                    </div>
                  </div>

                  <hr>

                  <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="alert alert-vmv-inversed">
                        <?php echo $civilite.' '.$first_name.' '.$last_name; ?>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="alert alert-vmv-inversed">
                        <?php echo '<i class="fa fa-phone" aria-hidden="true"></i> '.$tel; ?>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="alert alert-vmv-inversed">
                        <?php echo '<i class="fa fa-envelope" aria-hidden="true"></i> '.$mail; ?>
                      </div>
                    </div>
                  </div>

                  <hr>

                  <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="alert alert-vmv-dark text-center">
                        <?php echo 'Marque : '.$modele; ?>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="alert alert-vmv-dark text-center">
                        <?php echo 'Mise en circulation : '.$circulation; ?>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="alert alert-vmv-dark text-center">
                        <?php echo 'CO2 : '.$co2; ?>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="alert alert-vmv-dark text-center">
                        <?php echo 'Modèle : '.$modele_precis; ?>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="alert alert-vmv-dark text-center">
                        <?php echo 'Puissance fiscale : '.$cv; ?>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="alert alert-vmv-dark text-center">
                        <?php echo 'Carburant : '.$energie; ?>
                      </div>
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
