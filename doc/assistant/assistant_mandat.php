<?php

require('../../fpdf/fpdm.php');

$siren = str_split($_POST['siren']);
$cp = str_split($_POST['cp']);
$vin = str_split($_POST['vin']);

$jour = str_split(date('d'));
$mois = str_split(date('m'));
$annee = str_split(date('Y'));

if($_POST['opposition'] == 'oui') $opposition = 'X';
else $opposition = '';

$fields = array(
  'nom'    => $_POST['nom'],
  'siren0'    => $siren[0],
  'siren1'    => $siren[1],
  'siren2'    => $siren[2],
  'siren3'    => $siren[3],
  'siren4'    => $siren[4],
  'siren5'    => $siren[5],
  'siren6'    => $siren[6],
  'siren7'    => $siren[7],
  'siren8'    => $siren[8],
  'numvoie'    => $_POST['numvoie'],
  'extvoie'    => $_POST['extvoie'],
  'typevoie'    => $_POST['typevoie'],
  'nomvoie'    => $_POST['nomvoie'],
  'cp0'    => $cp[0],
  'cp1'    => $cp[1],
  'cp2'    => $cp[2],
  'cp3'    => $cp[3],
  'cp4'    => $cp[4],
  'ville'    => $_POST['ville'],
  'pays'    => $_POST['pays'],
  'operation'    => $_POST['operation'],
  'marque'    => $_POST['marque'],
  'vin0'    => $vin[0],
  'vin1'    => $vin[1],
  'vin2'    => $vin[2],
  'vin3'    => $vin[3],
  'vin4'    => $vin[4],
  'vin5'    => $vin[5],
  'vin6'    => $vin[6],
  'vin7'    => $vin[7],
  'vin8'    => $vin[8],
  'vin9'    => $vin[9],
  'vin10'    => $vin[10],
  'vin11'    => $vin[11],
  'vin12'    => $vin[12],
  'vin13'    => $vin[13],
  'vin14'    => $vin[14],
  'vin15'    => $vin[15],
  'vin16'    => $vin[16],
  'immat'    => $_POST['immat'],
  'faita'    => $_POST['faita'],
  'jour0'    => $jour[0],
  'jour1'    => $jour[1],
  'mois0'    => $mois[0],
  'mois1'    => $mois[1],
  'annee0'    => $annee[0],
  'annee1'    => $annee[1],
  'annee2'    => $annee[2],
  'annee3'    => $annee[3],
  'opposition' => $opposition
);

$pdf = new FPDM('../../fpdf/mandat_template.pdf');
$pdf->Load($fields, true);
$pdf->Merge();
$pdf->Output(D, "Mandat_d'immatriculation.pdf");
?>
