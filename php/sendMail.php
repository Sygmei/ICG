<?php

require_once('class.phpmailer.php');

function mailConfirmationPaiementToCustomer($data) {
  $data = json_decode($data);
  if(filter_var($data->from, FILTER_VALIDATE_EMAIL)) {
  } else {
    return false;
  }
  $address = utf8_decode($data->from);
  $nom = utf8_decode($data->nom);
  $from = "contact@icicartegrise.fr";

  $mail             = new PHPMailer();

  $body             = '<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <title></title>
  <!--[if !mso]><!-- -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
  #outlook a { padding: 0; }
  .ReadMsgBody { width: 100%; }
  .ExternalClass { width: 100%; }
  .ExternalClass * { line-height:100%; }
  body { margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
  table, td { border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
  img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }
  p { display: block; margin: 13px 0; }
</style>
<!--[if !mso]><!-->
<style type="text/css">
  @media only screen and (max-width:480px) {
    @-ms-viewport { width:320px; }
    @viewport { width:320px; }
  }
</style>
<!--<![endif]-->
<!--[if mso]>
<xml>
  <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
  </o:OfficeDocumentSettings>
</xml>
<![endif]-->
<!--[if lte mso 11]>
<style type="text/css">
  .outlook-group-fix {
    width:100% !important;
  }
</style>
<![endif]-->

<!--[if !mso]><!-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet" type="text/css">
    <style type="text/css">

        @import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);

    </style>
  <!--<![endif]--><style type="text/css">
  @media only screen and (min-width:480px) {
    .mj-column-per-100 { width:100%!important; }
  }
</style>
</head>
<body style="background: #c8c0c2;">

  <div class="mj-container" style="background-color:#c8c0c2;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;">
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]--><div style="margin:0px auto;max-width:600px;"><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 0px;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="vertical-align:top;width:600px;">
      <![endif]--><div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"><table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="center"><table role="presentation" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px;" align="center" border="0"><tbody><tr><td style="width:196px;"><img alt="" title="" height="auto" src="http://icicartegrise.fr/images/logo2.png" style="border:none;border-radius:0px;display:block;font-size:13px;outline:none;text-decoration:none;width:100%;height:auto;" width="196"></td></tr></tbody></table></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]-->
      <!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;">
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]--><div style="margin:0px auto;border-radius:10px;max-width:600px;background:white;"><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;border-radius:10px;background:white;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 0px;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="width:600px;">
      <![endif]--><div style="margin:0px auto;max-width:600px;"><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 0px;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="vertical-align:top;width:600px;">
      <![endif]--><div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"><table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:20px;line-height:22px;text-align:left;">Bonjour '.$data->nom.',</div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="center"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:20px;line-height:22px;text-align:center;">Votre dossier a bien été pris en compte par nos équipes.</div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;"><p style="font-size:1px;margin:0px auto;border-top:2px solid #aca5a7;width:100%;"></p><!--[if mso | IE]><table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size:1px;margin:0px auto;border-top:2px solid #aca5a7;width:100%;" width="600"><tr><td style="height:0;line-height:0;"> </td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>
        </td>
      </tr>
      <tr>
        <td style="width:600px;">
      <![endif]--><div style="margin:0px auto;max-width:600px;"><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 0px;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="vertical-align:top;width:600px;">
      <![endif]--><div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"><table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;">Afin de recevoir au plus vite votre certificat d\'immatriculation, veuillez suivre les étapes suivantes :<br>
              1. Rassemblez et remplissez les documents nécessaires à votre démarche.<br>
              <mj-text>
                  Si vous avez besoin d\'aide voici un lien pour retrouvez ces documents.</mj-text></div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="center"><table role="presentation" cellpadding="0" cellspacing="0" style="border-collapse:separate;" align="center" border="0"><tbody><tr><td style="border:none;border-radius:3px;color:#ffffff;cursor:auto;padding:10px 25px;" align="center" valign="middle" bgcolor="#ea066a"><a href="http://www.icicartegrise.fr/doc/" style="text-decoration:none;background:#ea066a;color:#ffffff;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;font-weight:normal;line-height:120%;text-transform:none;margin:0px;" target="_blank">Icicartegrise documents</a></td></tr></tbody></table></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;">2. Envoyez le dossier à l\'adresse suivante :</div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;">Vends ma voiture<br>220 rue Van Gogh<br>29470 Plougastel-daoulas</div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;">3. Traitement de votre dossier</div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;">- Si votre dossier est complet, nous vous enverrons un certificat provisoire par email puis votre nouvelle carte grise en recommandé.
              <br>- Si votre dossier est incomplet, vous serez contacté par email.</div></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>
        </td>
      </tr>
      <tr>
        <td style="width:600px;">
      <![endif]--><div style="margin:0px auto;max-width:600px;"><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 0px;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="vertical-align:top;width:600px;">
      <![endif]--><div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"><table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;"><p style="font-size:1px;margin:0px auto;border-top:2px solid #aca5a7;width:100%;"></p><!--[if mso | IE]><table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size:1px;margin:0px auto;border-top:2px solid #aca5a7;width:100%;" width="600"><tr><td style="height:0;line-height:0;"> </td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>
        </td>
      </tr>
      <tr>
        <td style="width:600px;">
      <![endif]--><div style="margin:0px auto;max-width:600px;"><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 0px;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="vertical-align:top;width:600px;">
      <![endif]--><div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"><table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;">Toute l\'équipe Icicartegrise est à votre disposition par :<br>
              - Mail : contact@icicartegrise.fr<br>
              - Téléphone : 0899 252 272 (0.30 € / min)</div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;">Nous vous remercions d\'avoir choisi Icicartegrise.<br><br>
              Cordialement<br>
              L\'équipe Icicartegrise.fr</div></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>
          </td>
        </tr>
      </table>
      <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]-->
      <!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;">
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]--><div style="margin:0px auto;max-width:600px;"><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 0px;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="vertical-align:top;width:600px;">
      <![endif]--><div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"><table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]--></div>
</body>
</html>';

  $mail->AddReplyTo("contact@icicartegrise.fr", "Icicartegrise");
  $mail->SetFrom("contact@icicartegrise.fr", "Icicartegrise");
  $mail->AddAddress($address, $nom);
  $mail->Subject    = "Icicartegrise | Commande";
  $mail->AltBody    = "
  Bonjour {$nom},

Votre dossier a bien été pris en compte par nos équipes.

Afin de recevoir au plus vite votre certificat d’immatriculation, veuillez suivre les étapes suivantes :

1.	Rassemblez et remplissez les documents nécessaires à votre démarche.

Si vous avez besoin d’aide voici un lien pour retrouver ces documents http://icicartegrise.fr/doc/


2.	Envoyez le dossier à l’adresse suivante

Vends ma voiture
220 rue Van Gogh
29470 Plougastel Daoulas


3.	Traitement de votre dossier

-	Si votre dossier est complet, nous vous enverrons un certificat provisoire par email puis votre nouvelle carte grise en recommandé.
-	Si votre dossier est incomplet, vous serez contacté par mail.


Toute l’équipe Icicartegrise est à votre disposition par :
- Mail contact@icicartegrise.fr
- Téléphone au 0899 252 272 (0.30€/min)

Nous vous remercions d’avoir choisi Icicartegrise.

Cordialement
L’équipe Icicartegrise.fr";
  $body = utf8_decode($body);
  $mail->MsgHTML($body);

  if(!$mail->Send()) {
    return false;
  } else {
    return true;
  }
}

function mailConfirmationPaiementToIcicartegrise($data) {
  $data = json_decode($data);
  $address = "contact@icicartegrise.fr";
  // $address = "boiselet.jeremy@gmail.com";
  if(filter_var($data->from, FILTER_VALIDATE_EMAIL)) {
  } else {
    return false;
  }
  $nom = utf8_decode($data->nom);
  $from = utf8_decode($data->from);

  $mail = new PHPMailer();

  $bodyHTML = '<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <title></title>
  <!--[if !mso]><!-- -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
  #outlook a { padding: 0; }
  .ReadMsgBody { width: 100%; }
  .ExternalClass { width: 100%; }
  .ExternalClass * { line-height:100%; }
  body { margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
  table, td { border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
  img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }
  p { display: block; margin: 13px 0; }
</style>
<!--[if !mso]><!-->
<style type="text/css">
  @media only screen and (max-width:480px) {
    @-ms-viewport { width:320px; }
    @viewport { width:320px; }
  }
</style>
<!--<![endif]-->
<!--[if mso]>
<xml>
  <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
  </o:OfficeDocumentSettings>
</xml>
<![endif]-->
<!--[if lte mso 11]>
<style type="text/css">
  .outlook-group-fix {
    width:100% !important;
  }
</style>
<![endif]-->

<!--[if !mso]><!-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet" type="text/css">
    <style type="text/css">

        @import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);

    </style>
  <!--<![endif]--><style type="text/css">
  @media only screen and (min-width:480px) {
    .mj-column-per-100 { width:100%!important; }
.mj-column-per-50 { width:50%!important; }
  }
</style>
</head>
<body style="background: #c8c0c2;">

  <div class="mj-container" style="background-color:#c8c0c2;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;">
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]--><div style="margin:0px auto;max-width:600px;"><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 0px;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="vertical-align:top;width:600px;">
      <![endif]--><div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"><table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="center"><table role="presentation" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px;" align="center" border="0"><tbody><tr><td style="width:196px;"><img alt="" title="" height="auto" src="http://icicartegrise.fr/images/logo2.png" style="border:none;border-radius:0px;display:block;font-size:13px;outline:none;text-decoration:none;width:100%;height:auto;" width="196"></td></tr></tbody></table></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]-->
      <!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;">
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]--><div style="margin:0px auto;border-radius:10px;max-width:600px;background:white;"><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;border-radius:10px;background:white;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 0px;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="width:600px;">
      <![endif]--><div style="margin:0px auto;max-width:600px;"><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 0px;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="vertical-align:top;width:600px;">
      <![endif]--><div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"><table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:20px;line-height:22px;text-align:left;">Bonjour,</div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="center"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:20px;line-height:22px;text-align:center;">Vous avez reçu une nouvelle commande de carte grise !</div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;"><p style="font-size:1px;margin:0px auto;border-top:2px solid #ea066a;width:100%;"></p><!--[if mso | IE]><table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size:1px;margin:0px auto;border-top:2px solid #ea066a;width:100%;" width="600"><tr><td style="height:0;line-height:0;"> </td></tr></table><![endif]--></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="center"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:26px;line-height:22px;text-align:center;">Box numéro : '.$data->box.'</div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;"><p style="font-size:1px;margin:0px auto;border-top:2px solid #ea066a;width:100%;"></p><!--[if mso | IE]><table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size:1px;margin:0px auto;border-top:2px solid #ea066a;width:100%;" width="600"><tr><td style="height:0;line-height:0;"> </td></tr></table><![endif]--></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:16px;line-height:22px;text-align:left;">Détails client :</div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;">'.$nom.'<br>
              Téléphone : '.$data->phone.'<br>
              Email : '.$data->from.'<br></div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;"><p style="font-size:1px;margin:0px auto;border-top:2px solid #ea066a;width:100%;"></p><!--[if mso | IE]><table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size:1px;margin:0px auto;border-top:2px solid #ea066a;width:100%;" width="600"><tr><td style="height:0;line-height:0;"> </td></tr></table><![endif]--></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;">Démarche : '.$data->demande.'</div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="center"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:16px;line-height:22px;text-align:center;">Plaque : '.$data->immat.'</div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:20px 0px;"><div style="margin:0px auto;max-width:600px;" data-class=""><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 0px;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="vertical-align:top;width:NaNpx;">
      <![endif]--><div class="mj-column-per-50 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"><table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="center"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:center;">Marque : '.$data->marque.'</div></td></tr></tbody></table></div><!--[if mso | IE]>
      </td><td style="vertical-align:top;width:NaNpx;">
      <![endif]--><div class="mj-column-per-50 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"><table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="center"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:center;">Modèle : '.$data->modele.'</div></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]--></td></tr></tbody></table></div></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>
          </td>
        </tr>
      </table>
      <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]-->
      <!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;">
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]--><div style="margin:0px auto;max-width:600px;"><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 0px;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="vertical-align:top;width:600px;">
      <![endif]--><div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"><table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]--></div>
</body>
</html>';
  $bodyHTML = utf8_decode($bodyHTML);
  $bodyTEXT = "Bonjour, vous avez reçu une nouvelle commande de carte grise !

  Box numéro : {$data->box}

  Détails du client :
    {$data->nom}
    Téléphone : {$data->phone}
    Email : {$from}

  Démarche : {$data->demande}
  Plaque : {$data->immat}
  Marque : {$data->marque}
  Modèle : {$data->modele}";

  $mail->AddReplyTo($from, $nom);
  $mail->SetFrom($from, $nom);
  $mail->AddAddress($address, "Icicartegrise");
  $mail->Subject    = "Icicartegrise | Reception Demande";
  $mail->AltBody    = $bodyTEXT;
  $mail->MsgHTML($bodyHTML);

  if(!$mail->Send()) {
    return false;
  } else {
    return true;
  }
}

function mailDemandeContact($data) {
  $data = json_decode($data);
  $address = "contact@icicartegrise.fr";
  $nom = utf8_decode($data->nom);
  $from = utf8_decode($data->from);

  $mail = new PHPMailer();

  $bodyHTML = '<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <title></title>
  <!--[if !mso]><!-- -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
  #outlook a { padding: 0; }
  .ReadMsgBody { width: 100%; }
  .ExternalClass { width: 100%; }
  .ExternalClass * { line-height:100%; }
  body { margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
  table, td { border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
  img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }
  p { display: block; margin: 13px 0; }
</style>
<!--[if !mso]><!-->
<style type="text/css">
  @media only screen and (max-width:480px) {
    @-ms-viewport { width:320px; }
    @viewport { width:320px; }
  }
</style>
<!--<![endif]-->
<!--[if mso]>
<xml>
  <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
  </o:OfficeDocumentSettings>
</xml>
<![endif]-->
<!--[if lte mso 11]>
<style type="text/css">
  .outlook-group-fix {
    width:100% !important;
  }
</style>
<![endif]-->

<!--[if !mso]><!-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet" type="text/css">
    <style type="text/css">

        @import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);

    </style>
  <!--<![endif]--><style type="text/css">
  @media only screen and (min-width:480px) {
    .mj-column-per-100 { width:100%!important; }
  }
</style>
</head>
<body style="background: #c8c0c2;">

  <div class="mj-container" style="background-color:#c8c0c2;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;">
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]--><div style="margin:0px auto;max-width:600px;"><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 0px;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="vertical-align:top;width:600px;">
      <![endif]--><div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"><table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="center"><table role="presentation" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px;" align="center" border="0"><tbody><tr><td style="width:196px;"><img alt="" title="" height="auto" src="http://icicartegrise.fr/images/logo2.png" style="border:none;border-radius:0px;display:block;font-size:13px;outline:none;text-decoration:none;width:100%;height:auto;" width="196"></td></tr></tbody></table></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]-->
      <!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;">
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]--><div style="margin:0px auto;border-radius:10px;max-width:600px;background:white;"><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;border-radius:10px;background:white;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 0px;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="width:600px;">
      <![endif]--><div style="margin:0px auto;max-width:600px;"><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 0px;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="vertical-align:top;width:600px;">
      <![endif]--><div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"><table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:20px;line-height:22px;text-align:left;">Bonjour,</div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="center"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:20px;line-height:22px;text-align:center;">Vous avez reçu une demande de contact !</div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;"><p style="font-size:1px;margin:0px auto;border-top:2px solid #ea066a;width:100%;"></p><!--[if mso | IE]><table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size:1px;margin:0px auto;border-top:2px solid #ea066a;width:100%;" width="600"><tr><td style="height:0;line-height:0;"> </td></tr></table><![endif]--></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:16px;line-height:22px;text-align:left;">Détails client :</div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;">'.$data->nom.'<br>
              Téléphone : '.$data->phone.'<br>
              Email : '.$data->from.'<br></div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;"><p style="font-size:1px;margin:0px auto;border-top:2px solid #ea066a;width:100%;"></p><!--[if mso | IE]><table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size:1px;margin:0px auto;border-top:2px solid #ea066a;width:100%;" width="600"><tr><td style="height:0;line-height:0;"> </td></tr></table><![endif]--></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;">'.$data->message.'</div></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>
          </td>
        </tr>
      </table>
      <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]-->
      <!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;">
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]--><div style="margin:0px auto;max-width:600px;"><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 0px;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="vertical-align:top;width:600px;">
      <![endif]--><div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"><table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]--></div>
</body>
</html>';
  $bodyHTML = utf8_decode($bodyHTML);
  $bodyTEXT = "Bonjour, vous avez reçu une demande de contact !

  Détails du client :
    {$data->nom}
    Téléphone : {$data->phone}
    Email : {$from}

  {$data->message}";

  $mail->AddReplyTo($from, $nom);
  $mail->SetFrom($from, $nom);
  $mail->AddAddress($address, "Icicartegrise");
  $mail->Subject    = "Icicartegrise | Reception Demande";
  $mail->AltBody    = $bodyTEXT;
  $mail->MsgHTML($bodyHTML);
  if ($data->filePath != NULL) {
    $mail->AddAttachment($data->filePath, $data->fileName);
  }

  if(!$mail->Send()) {
    return false;
  } else {
    return true;
  }
}

function mailDemandeRappel($data) {
  $data = json_decode($data);
  $address = "contact@icicartegrise.fr";
  $nom = utf8_decode($data->nom);
  $from = utf8_decode($data->from);

  $mail = new PHPMailer();

  $bodyHTML = '<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <title></title>
  <!--[if !mso]><!-- -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
  #outlook a { padding: 0; }
  .ReadMsgBody { width: 100%; }
  .ExternalClass { width: 100%; }
  .ExternalClass * { line-height:100%; }
  body { margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
  table, td { border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
  img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }
  p { display: block; margin: 13px 0; }
</style>
<!--[if !mso]><!-->
<style type="text/css">
  @media only screen and (max-width:480px) {
    @-ms-viewport { width:320px; }
    @viewport { width:320px; }
  }
</style>
<!--<![endif]-->
<!--[if mso]>
<xml>
  <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
  </o:OfficeDocumentSettings>
</xml>
<![endif]-->
<!--[if lte mso 11]>
<style type="text/css">
  .outlook-group-fix {
    width:100% !important;
  }
</style>
<![endif]-->

<!--[if !mso]><!-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet" type="text/css">
    <style type="text/css">

        @import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);

    </style>
  <!--<![endif]--><style type="text/css">
  @media only screen and (min-width:480px) {
    .mj-column-per-100 { width:100%!important; }
  }
</style>
</head>
<body style="background: #c8c0c2;">

  <div class="mj-container" style="background-color:#c8c0c2;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;">
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]--><div style="margin:0px auto;max-width:600px;"><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 0px;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="vertical-align:top;width:600px;">
      <![endif]--><div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"><table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="center"><table role="presentation" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px;" align="center" border="0"><tbody><tr><td style="width:196px;"><img alt="" title="" height="auto" src="http://icicartegrise.fr/images/logo2.png" style="border:none;border-radius:0px;display:block;font-size:13px;outline:none;text-decoration:none;width:100%;height:auto;" width="196"></td></tr></tbody></table></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]-->
      <!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;">
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]--><div style="margin:0px auto;border-radius:10px;max-width:600px;background:white;"><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;border-radius:10px;background:white;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 0px;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="width:600px;">
      <![endif]--><div style="margin:0px auto;max-width:600px;"><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 0px;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="vertical-align:top;width:600px;">
      <![endif]--><div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"><table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:20px;line-height:22px;text-align:left;">Bonjour,</div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="center"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:20px;line-height:22px;text-align:center;">Vous avez reçu une demande de rappel !</div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;"><p style="font-size:1px;margin:0px auto;border-top:2px solid #ea066a;width:100%;"></p><!--[if mso | IE]><table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0" style="font-size:1px;margin:0px auto;border-top:2px solid #ea066a;width:100%;" width="600"><tr><td style="height:0;line-height:0;"> </td></tr></table><![endif]--></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:16px;line-height:22px;text-align:left;">Détails client :</div></td></tr><tr><td style="word-wrap:break-word;font-size:0px;padding:10px 25px;" align="left"><div style="cursor:auto;color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;">'.$data->nom.'<br>
              Téléphone : '.$data->phone.'<br>
              Email : '.$data->from.'<br></div></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>
          </td>
        </tr>
      </table>
      <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]-->
      <!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;">
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]--><div style="margin:0px auto;max-width:600px;"><table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;" align="center" border="0"><tbody><tr><td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:20px 0px;"><!--[if mso | IE]>
      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td style="vertical-align:top;width:600px;">
      <![endif]--><div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;"><table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]>
      </td></tr></table>
      <![endif]--></div>
</body>
</html>';
  $bodyHTML = utf8_decode($bodyHTML);
  $bodyTEXT = "Bonjour, vous avez reçu une demande de rappel !

  Détails du client :
    {$data->nom}
    Téléphone : {$data->phone}
    Email : {$from}";

  $mail->AddReplyTo($from, $nom);
  $mail->SetFrom($from, $nom);
  $mail->AddAddress($address, "Icicartegrise");
  $mail->Subject    = "Icicartegrise | Reception Demande";
  $mail->AltBody    = $bodyTEXT;
  $mail->MsgHTML($bodyHTML);
  if ($data->filePath != NULL) {
    $mail->AddAttachment($data->filePath, $data->fileName);
  }

  if(!$mail->Send()) {
    return false;
  } else {
    return true;
  }
}

?>
