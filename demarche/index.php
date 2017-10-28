<?php
session_start();
$box = $_SESSION['box'];

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
    <title>Démarches | IciCarteGrise</title>

    <link rel="stylesheet" href="../css/radioButton.css" />
    <link rel="stylesheet" href="../css/radio.css" />
    <link rel="stylesheet" href="../css/demarche.css" />
  </head>

  <body>
    <?php require_once('../templates/navbar.html'); ?>

    <main class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2 col-xs-12">
            <div class="card my-4">
              <div class="card-header">
                <p class="page-header"><i class="fa fa-address-card" aria-hidden="true"></i> Box n° : <?php echo $box; ?></p>
              </div>
              <div class="card-block">
                <form action="index.php#result" method="post">
                  <div class="button-wrap">
                    <input class="hidden radio-label" type="radio" name="demande" value="1" id="titulaire" checked="checked"/>
                    <label class="button-label" for="titulaire">
                      <h1><i class="fa fa-user" aria-hidden="true"></i> Changement Titulaire <i data-toggle="tooltip" data-placement="bottom" data-html="true" title="<p>Suite à l'achat d'un véhicule, vous devez effectuer le changement de titulaire de la carte grise.</p>" class="fa fa-question-circle" aria-hidden="true"></i></h1>
                    </label>
                    <input class="hidden radio-label" type="radio" name="demande" value="5" id="domicile"/>
                    <label class="button-label" for="domicile">
                      <h1><i class="fa fa-home" aria-hidden="true"></i> Changement Domicile <i data-toggle="tooltip" data-placement="bottom" data-html="true" title="<p>Suite à un déménagement, vous devez effectuer le changement d'adresse sur la carte grise.</p>" class="fa fa-question-circle" aria-hidden="true"></i></h1>
                    </label>
                  </div>

                  <div class="margin">
                    <div class="form-group">
                      <label for="immatriculation">Immatriculation</label>
                      <input type="text" class="form-control" id="immatriculation" name="immatriculation" onkeyup='this.value=this.value.toUpperCase()' aria-describedby="immatriculationHelp" maxlength="10" placeholder="AB123CD" value="<?php echo $_POST['immatriculation']; ?>" required>
                      <small id="immatriculationHelp" class="form-text text-muted">Attention : <?php echo $row['tentative']; ?> Tentatives maximum !</small>
                    </div>

                    <div class="form-group">
                      <label for="departement">Département</label>
                      <select class="form-control" name="departement" id="departement" value="<?php echo $_POST['departement']; ?>" required>
                        <option value=""></option>
         							  <option value="43+100">01 - Ain</option>
         							  <option value="33+50">02 - Aisne</option>
         							  <option value="43+100">03 - Allier</option>
         							  <option value="51.2+100">04 - Alpes de Haute Provence</option>
         							  <option value="51.2+100">05 - Hautes Alpes</option>
         							  <option value="51.2+100">06 - Alpes Maritimes</option>
         							  <option value="43+100">07 - Ard&egrave;che</option>
         							  <option value="37.33+100">08 - Ardennes</option>
         							  <option value="44+100">09 - Ari&egrave;ge</option>
         							  <option value="37.33+100">10 - Aube</option>
         							  <option value="44+100">11 - Aude</option>
         							  <option value="44+100">12 - Aveyron</option>
         							  <option value="51.2+100">13 - Bouches du Rh&ocirc;ne</option>
         							  <option value="35+100">14 - Calvados</option>
         							  <option value="43+100">15 - Cantal</option>
         							  <option value="41+100">16 - Charente</option>
         							  <option value="41+100">17 - Charente Maritime</option>
         							  <option value="49.8+0">18 - Cher</option>
         							  <option value="41+100">19 - Corr&egrave;ze</option>
         							  <option value="27+100">2A - Corse du Sud</option>
                        <option value="27+100">2B - Haute Corse</option>
         							  <option value="51+100">21 - C&ocirc;te d&acute;Or</option>
         							  <option value="51+50">22 - C&ocirc;tes d&acute;Armor</option>
         							  <option value="41+100">23 - Creuse</option>
         							  <option value="41+100">24 - Dordogne</option>
         							  <option value="51+100">25 - Doubs</option>
         							  <option value="43+100">26 - Dr&ocirc;me</option>
         							  <option value="35+100">27 - Eure</option>
         							  <option value="49.8+0">28 - Eure et Loir</option>
         							  <option value="51+50">29 - Finist&egrave;re</option>
         							  <option value="44+100">30 - Gard</option>
         							  <option value="44+100">31 - Haute Garonne</option>
         							  <option value="44+100">32 - Gers</option>
         							  <option value="41+100">33 - Gironde</option>
         							  <option value="44+100">34 - H&eacute;rault</option>
         							  <option value="51+50">35 - Ille et Vilaine</option>
         							  <option value="49.8+0">36 - Indre</option>
         							  <option value="49.8+0">37 - Indre et Loire</option>
         							  <option value="43+100">38 - Is&egrave;re</option>
         							  <option value="51+100">39 - Jura</option>
         							  <option value="41+100">40 - Landes</option>
         							  <option value="49.8+0">41 - Loir et Cher</option>
         							  <option value="43+100">42 - Loire</option>
         							  <option value="43+100">43 - Haute Loire</option>
         							  <option value="48+100">44 - Loire Atlantique</option>
         							  <option value="49.8+0">45 - Loiret</option>
         							  <option value="44+100">46 - Lot</option>
         							  <option value="41+100">47 - Lot et Garonne</option>
         							  <option value="44+100">48 - Loz&egrave;re</option>
         							  <option value="48+100">49 - Maine et Loire</option>
         							  <option value="35+100">50 - Manche</option>
         							  <option value="37.33+100">51 - Marne</option>
         							  <option value="37.33+100">52 - Haute Marne</option>
         							  <option value="48+100">53 - Mayenne</option>
         							  <option value="44+50">54 - Meurthe et Moselle</option>
         							  <option value="44+50">55 - Meuse</option>
         							  <option value="51+50">56 - Morbihan</option>
         							  <option value="44+50">57 - Moselle</option>
         							  <option value="51+100">58 - Ni&egrave;vre</option>
         							  <option value="42.6+100">59 - Nord</option>
         							  <option value="33+50">60 - Oise</option>
         							  <option value="35+100">61 - Orne</option>
         							  <option value="42.6+100">62 - Pas de Calais</option>
         							  <option value="43+100">63 - Puy de D&ocirc;me</option>
         							  <option value="41+100">64 - Pyr&eacute;n&eacute;es Atlantiques</option>
         							  <option value="44+100">65 - Hautes Pyr&eacute;n&eacute;es</option>
         							  <option value="44+100">66 - Pyr&eacute;n&eacute;es Orientales</option>
         							  <option value="38.5+50">67 - Bas Rhin</option>
         							  <option value="38.5+50">68 - Haut Rhin</option>
         							  <option value="43+100">69 - Rh&ocirc;ne</option>
         							  <option value="51+100">70 - Haute Sa&ocirc;ne</option>
         							  <option value="51+100">71 - Sa&ocirc;ne et Loire</option>
         							  <option value="48+100">72 - Sarthe</option>
         							  <option value="43+100">73 - Savoie</option>
         							  <option value="43+100">74 - Haute Savoie</option>
         							  <option value="46.15+100">75 - Paris</option>
         							  <option value="35+100">76 - Seine Maritime</option>
         							  <option value="46.15+100">77 - Seine et Marne</option>
                        <option value="46.15+100">78 - Yvelines</option>
         							  <option value="41+100">79 - Deux S&egrave;vres</option>
         							  <option value="33+50">80 - Somme</option>
         							  <option value="44+100">81 - Tarn</option>
         							  <option value="44+100">82 - Tarn et Garonne</option>
         							  <option value="51.2+100">83 - Var</option>
         							  <option value="51.2+100">84 - Vaucluse</option>
         							  <option value="48+100">85 - Vend&eacute;e</option>
         							  <option value="41+100">86 - Vienne</option>
         							  <option value="41+100">87 - Haute Vienne</option>
         							  <option value="44+50">88 - Vosges</option>
         							  <option value="51+100">89 - Yonne</option>
         							  <option value="51+100">90 - Territoire de Belfort</option>
         							  <option value="46.15+100">91 - Essonne</option>
         							  <option value="46.15+100">92 - Hauts de Seine</option>
         							  <option value="46.15+100">93 - Seine Saint Denis</option>
         							  <option value="46.15+100">94 - Val de Marne</option>
         							  <option value="46.15+100">95 - Val d&acute;Oise</option>
         							  <option value="41+0">971 - Guadeloupe</option>
                        <option value="30+0">972 - Martinique</option>
         							  <option value="42.5+0">973 - Guyane</option>
         							  <option value="51+0">974 - R&eacute;union</option>
                        <option value="30+0">976 - Mayotte</option>
                      </select>
                    </div>

                    <div class="text-center">
                      <button id="btn-calcul" type="submit" class="btn btn-vmv mb-3"><i class="fa fa-cogs" aria-hidden="true"></i> Calculez le prix de votre carte grise !</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <?php
          $immatriculation = isset($_POST["immatriculation"]) ? htmlspecialchars($_POST["immatriculation"]) : NULL;
          $dept = isset($_POST["departement"]) ? $_POST["departement"] : NULL;
          $demande = isset($_POST["demande"]) ? $_POST["demande"] : NULL;

          if ($immatriculation != NULL && $dept != NULL && $demande != NULL) {
            $_SESSION['immat'] = $immatriculation;
            echo '<div class="card">
                    <div class="card-block">
                      <div class="row">
                        <div id="result"></div>';

            require_once('../php/immatriculation2.php');
            require_once('../php/calcul.php');

            $data = json_decode(recherchePlaque($immatriculation));
            
            if($data->erreur != "" || $data->erreur != NULL) {
              $pasDeVehicule = strpos($data->erreur, "Vehicule non trouve");
              if($pasDeVehicule !== false) $data->erreur = "Ce numéro de plaque d’immatriculation n’est pas reconnu.";

              echo '<div class="col-md-12 col-sm-12 col-xs-12 mt-4">
                      <div class="alert alert-danger text-center">
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Erreur : '.$data->erreur.'<br>
                        Veuillez contact notre équipe par téléphone au 0899 252 272 ou en remplissant le <a href="/contact">formulaire de contact</a>
                      </div>
                    </div>';
            } else {

              $tenta_restante = $row['tentative'] - 1;

              $query = $pdo->prepare("UPDATE `box` SET `tentative` =  '".$tenta_restante."' WHERE `box` =  '".$box."'");
              $query->execute();

              $prix = calcul($data, $immatriculation, $dept, $demande);

              $_SESSION['prix'] = $prix;
              $_SESSION['modele'] = $data->modele;
              $_SESSION['circulation'] = $data->circulation;
              $_SESSION['type'] = $data->type;
              $_SESSION['cv'] = $data->cv;
              $_SESSION['co2'] = $data->co2;
              $_SESSION['energie'] = $data->energie;
              $_SESSION['modele_precis'] = $data->modele_precis;
              if($demande == "1") $_SESSION['demande'] = "Changement de titulaire";
              else if($demande == "2") $_SESSION['demande'] = "Changement de domicile";

              ?>

              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="alert alert-vmv text-center">
                  <?php echo 'Marque : '.$data->modele; ?>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="alert alert-vmv text-center">
                  <?php echo 'Mise en circulation : '.$data->circulation; ?>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="alert alert-vmv text-center">
                  <?php echo 'Type : '.$data->type; ?>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="alert alert-vmv text-center">
                  <?php echo 'Modèle : '.$data->modele_precis; ?>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="alert alert-vmv text-center">
                  <?php echo 'Puissance fiscale : '.$data->cv; ?>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="alert alert-vmv text-center">
                  <?php echo 'Carburant : '.$data->energie; ?>
                </div>
              </div>
            </div>
            <div class="row">
              <?php

              if ($prix === -1 || $prix === -2 ) {
                echo '
                <div class="col-md-12 col-sm-12 col-xs-12 mt-4">
                  <div class="alert alert-danger text-center">
                    Erreur lors du calcul du prix !
                  </div>
                </div>';
              } else {
                ?>
                <div class="col-md-12 col-xs-12">
                  <form action="../information" method="post">
                    <div class="row">
                      <div class='col-md-8 col-sm-8 col-xs-12'>
                        <div class='alert alert-vmv text-center'>
                          <strong>Prix : <?php echo $prix; ?> <i class='fa fa-eur' aria-hidden='true'></i></strong>
                        </div>
                      </div>
                      <input type="hidden" name="prix" value=<?php echo $prix; ?>>
                      <div class='col-md-4 col-sm-4 col-xs-12'>
                        <div class="text-center">
                          <button type="submit" class="btn btn-vmv">Valider <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              <?php
              }
            }
            echo '</div></div></div>';
            }
          ?>

      </div>
    </main>

    <footer>
      <?php require_once('../templates/top-footer.html'); ?>
      <?php require_once('../templates/bottom-footer.html'); ?>
    </footer>

    <?php require_once('../templates/footer-js.html'); ?>
    <script type="text/javascript" src="index.js"></script>
  </body>
</html>
