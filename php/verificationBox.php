<?php
session_start();
require_once('../php/connexion.php');

if (isset($_POST['box'])) {
  $box = htmlspecialchars($_POST['box']);
  $requete = "SELECT * FROM box WHERE box.box = :box";
  $query = $pdo->prepare($requete);
  $query->bindParam(":box", $box);
  $query->execute();
  $row = $query->fetch();

  if ($row == false) {
    echo '<form id="incorrect" action="/" method="post">
            <input type="hidden" name="erreur" value="Le numéro de box fourni est incorrect !" />
          </form>
          <script type="text/javascript">
            document.getElementById(\'incorrect\').submit();
          </script>';
  } else if ($row['valide'] == '0') {
    echo '<form id="pasvalide" action="/" method="post">
            <input type="hidden" name="erreur" value="La box n\'est plus valide !" />
          </form>
          <script type="text/javascript">
            document.getElementById(\'pasvalide\').submit();
          </script>';
  } else if ($row['tentative'] < 1) {
    echo '<form id="tenta" action="/" method="post">
            <input type="hidden" name="erreur" value="Le nombre de tentatives de cette box est épuisée !" />
          </form>
          <script type="text/javascript">
            document.getElementById(\'tenta\').submit();
          </script>';
  } else {
    $_SESSION['box'] = $row['box'];
    echo '<script type="text/javascript">document.location.href = "/demarche";</script>';
  }
}
?>
