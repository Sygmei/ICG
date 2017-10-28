<?php
function calculTaxeCarteGrise($immatriculation, $departement, $demande) {
  $url = "http://www.fna-cartegrise.fr/test.asp";
  $xml = '<?xml version="1.0" encoding="UTF-8"?><root><login>icicgfr</login><passwd>Ad98kLmv65zh</passwd><immat>'.$immatriculation.'</immat></root>';

  $headers = array(
    "Content-type: text/xml",
    "Content-length: " . strlen($xml)
  );

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_TIMEOUT, 10);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  $data = curl_exec($ch);

  $doc = new DOMDocument();
  $doc->loadXML($data);

  $voiture = $doc->getElementsByTagName('carrosserie')->item(0)->nodeValue;
  $type = $doc->getElementsByTagName('genreVCG')->item(0)->nodeValue;
  $modele = $doc->getElementsByTagName('marque')->item(0)->nodeValue;
  $energie = $doc->getElementsByTagName('energie')->item(0)->nodeValue;
  $cv = $doc->getElementsByTagName('puisFisc')->item(0)->nodeValue;

  $jour = $doc->getElementsByTagName('jour')->item(0)->nodeValue;
  $mois = $doc->getElementsByTagName('mois')->item(0)->nodeValue;
  $annee = $doc->getElementsByTagName('annee')->item(0)->nodeValue;

  $co2 = $doc->getElementsByTagName('co2')->item(0)->nodeValue;

  $ptac = $doc->getElementsByTagName('ptr')->item(0)->nodeValue / 1000;

  if(curl_errno($ch))
    print curl_error($ch);
  else
    curl_close($ch);

  $jour = str_split($jour);
  $jour = $jour[3].$jour[4];

  $mois = str_split($mois);
  $mois = $mois[2].$mois[3];

  $circulation = $jour.'-'.$mois.'-'.$annee;

  echo '<div class="container">
    <h4>Voiture : '.$voiture.'</h4>
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-6">
          <div class="alert alert-info">Type : '.$type.'</div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <div class="alert alert-info">Marque : '.$modele.'</div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <div class="alert alert-info">Energie : '.$energie.'</div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <div class="alert alert-info">Puissance Fiscale : '.$cv.'</div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <div class="alert alert-info">Date de circulation : '.$circulation.'</div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <div class="alert alert-info">CO2 : '.$co2.'</div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <div class="alert alert-info">PTAC : '.$ptac.'</div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <div class="alert alert-info">Département : '.$departement.'</div>
        </div>
      </div>
    </div>';

  switch ($type) {
    case 'VP':
      $type = 1;
      break;
    case 'TCP':
      $type = 9;
      break;
    case 'CAM':
      $type = 8;
      break;
    case 'CTTE':
      $type = 2;
      break;
    case 'VASP':
      $type = 11;
      break;
    case 'TRR':
      $type = 10;
      break;
    case 'VTST':
      $type = 11;
      break;
    case 'VTSU':
      $type = 11;
      break;
    default:
      $type = 1;
      break;
  }

  switch ($energie) {
    case 'ESSENCE':
      $energie = 1;
      break;
    case 'ESS+GAZO':
      $energie = 3;
      break;
    case 'ESS+G.P.L.':
      $energie = 3;
      break;
    case 'ESS+G.NAT':
      $energie = 3;
      break;
    case 'GAZOLE':
      $energie = 1;
      break;
    case 'FUEL-OIL':
      $energie = 999;
      break;
    case 'GAZOLE+GAZO':
      $energie = 3;
      break;
    case 'GAZOGENE':
      $energie = 999;
      break;
    case 'CARB.GAZEUX':
      $energie = 999;
      break;
    case 'GAZ NAT.VEH':
      $energie = 4;
      break;
    case 'ELECTRIC':
      $energie = 2;
      break;
    case 'G.P.L.':
      $energie = 4;
      break;
    case 'PETROL.LAMP':
      $energie = 999;
      break;
    case 'ELEC+ESSENC':
      $energie = 3;
      break;
    case 'ELEC+GAZOLE':
      $energie = 3;
      break;
    case 'AIR COMPRIM':
      $energie = 999;
      break;
    case 'HYDROGENE':
      $energie = 2;
      break;
    case 'ELEC+G.P.L.':
      $energie = 3;
      break;
    case 'ELEC+G.NAT':
      $energie = 3;
      break;
    case 'SUPERETHANOL':
      $energie = 5;
      break;
    case 'INCONNUE':
      $energie = 999;
      break;
    case 'AUTRES':
      $energie = 999;
      break;
    case 'BICARBUR':
      $energie = 6;
      break;
    default:
      $energie = 999;
      break;
  }

  if ($ptac <= 3.5) {
    $ptac = 1;
  } else if ($ptac > 3.5 && $ptac <= 6) {
    $ptac = 2;
  } else if ($ptac > 6 && $ptac <= 11) {
    $ptac = 3;
  } else if ($ptac > 11) {
    $ptac = 4;
  }

  // ------------------------------------------------------------------------------------ //
  // ------------------------------------------------------------------------------------ //
  // ------------------------------------------------------------------------------------ //

  $url = "https://www.cartegrisefactory.fr/api/getPrice";

  $ch = curl_init($url);

  curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
  curl_setopt($ch, CURLOPT_TIMEOUT, 15);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, "demande=".$demande."&type=".$type."&departement=".$departement."&modele=".$modele."&energie=".$energie."&cv=".$cv."&immatriculation=".$immatriculation."&circulation=".$circulation."&co2=".$co2."&ptac=".$ptac);
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');

  $prixCg = curl_exec($ch);

  if(curl_errno($ch)==28) {
    echo '<div class="container"><div class="alert alert-danger">Erreur lors du calcul du prix de la carte grise !</div></div>';
  }

  curl_close($ch);

  echo '<div class="container"><div class="alert alert-info">Prix de votre carte grise : <strong>'.$prixCg.' euros</strong></div></div>';
  echo '<div class="container text-center espace-bottom"><a href="/information" class="btn btn-vmv">Valider</a></div>';
}
?>
