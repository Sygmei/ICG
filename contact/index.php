<!doctype html>
<html lang="fr">
  <head>
    <?php require_once('../templates/header.html'); ?>
    <title>Contact | IciCarteGrise</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="../css/contact.css" />
  </head>

  <body>
    <?php require_once('../templates/navbar.html'); ?>

    <main>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="card my-4">
              <div class="card-header">
                <p class="page-header">Contact <i class="fa fa-user" aria-hidden="true"></i></p>
              </div>
              <div class="card-block">
                <?php
                  require_once('../php/recaptcha.php');

                  $civilite = isset($_POST["civilite"]) ? htmlspecialchars($_POST["civilite"]) : NULL;
                  $nom = isset($_POST["nom"]) ? htmlspecialchars($_POST["nom"]) : NULL;
                  $prenom = isset($_POST["prenom"]) ? htmlspecialchars($_POST["prenom"]) : NULL;
                  $phone = isset($_POST["phone"]) ? htmlspecialchars($_POST["phone"]) : NULL;
                  $mail = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : NULL;
                  $message = isset($_POST["message"]) ? htmlspecialchars($_POST["message"]) : NULL;
                  $sizeMax = isset($_POST["MAX_FILE_SIZE"]) ? intval($_POST["MAX_FILE_SIZE"]) : NULL;

                  if ($nom != NULL && $prenom != NULL) {
                    $captcha = new Recaptcha('6Ld4EioUAAAAANzV0ycH8aYu_7Vv_0c_wxFvi5kx');
                    $erreur = false;
                    if($captcha->checkCode($_POST['g-recaptcha-response']) === false) {
                      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                Captcha Incorrect !
                              </div>';
                    } else {
                      require_once('../php/mailWithFile.php');
                      require_once('../php/sendMail.php');

                      $filePath = $_FILES['file']['tmp_name'];
                      $fileName = $_FILES['file']['name'];
                      $fileSize = filesize($_FILES['file']['tmp_name']);
                      $fileType = $_FILES['file']['type'];

                      if ($_FILES['file']['error'] > 0) {
                        $erreur = true;
                      }

			                if($erreur == false) {

                        $mail_data = array(
                          'nom' => $civilite." ".$nom." ".$prenom,
                          'from' => $mail,
                          'phone' => $phone,
                          'message' => $message,
                          'filePath' => $filePath,
                          'fileName' => $fileName
                        );

                        $mail_data = json_encode($mail_data);
                        $result = mailDemandeContact($mail_data);
                        // $result = sendMailWithFile($civilite, $nom, $prenom, $phone, $mail, $message, $filePath, $fileName, $fileSize, $fileType);
                      } else {
                        $mail_data = array(
                          'nom' => $civilite." ".$nom." ".$prenom,
                          'from' => $mail,
                          'phone' => $phone,
                          'message' => $message,
                          'filePath' => NULL,
                          'fileName' => NULL
                        );

                        $mail_data = json_encode($mail_data);

                        $result = mailDemandeContact($mail_data);
                        // $result = sendMailWithoutFile($civilite, $nom, $prenom, $phone, $mail, $message);
                      }

                      if($result) {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                Message envoyé ! Votre demande sera traitée dans les plus brefs délais par nos équipes.
                              </div>';
                      } else {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                Erreur lors de l\'envoie du mail !
                              </div>';
                      }

                    }
                  }
                ?>
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
                  <div class="form-group">
                    <textarea class="form-control" id="message" name="message" rows="3" placeholder="Message" required></textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-xs-12">
                      <div class="form-group">
                        <input type="hidden" name="MAX_FILE_SIZE" value="10000" />
                        <input type="file" class="form-control-file" id="file" name="file">
                      </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                      <div class="g-recaptcha" data-sitekey="6Ld4EioUAAAAABqJrTw3HaBgkt5itBWecZIhsfOj"></div>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-vmv mt-2">Validez votre demande <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="alert alert-vmv-inversed text-center my-4">
              Siège Social :<br>220 rue Van Gogh<br>29470 Plougastel-Daoulas<br><br><i class="fa fa-phone" aria-hidden="true"></i> 0899 252 272 (0.30€ / min)
              <br><i class="fa fa-envelope" aria-hidden="true"></i> <a class="mailto" href="mailto:contact@icicartegrise.fr">contact@icicartegrise.fr</a>
            </div>
            <div class="google-maps my-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2650.581467976478!2d-4.376269184995427!3d48.36856544302451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4816b710fe84175f%3A0x32b1577de6258007!2s220+Rue+Van+Gogh%2C+29470+Plougastel-Daoulas!5e0!3m2!1sfr!2sfr!4v1500733734116" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
