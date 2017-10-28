<!doctype html>
<html lang="fr">
  <head>
    <?php require_once('../templates/header.html'); ?>
    <title>Outil PDF | IciCarteGrise</title>
  </head>

  <body>
    <?php require_once('../templates/navbar.html'); ?>

    <main>
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2 col-sm-12 col-xs-12">
            <div class="card my-4">
              <p class="page-header">Outil assistant PDF <i class="fa fa-file-pdf-o" aria-hidden="true"></i></p>

              <form class="pl-4 pr-4" action="assistant/assistant_mandat.php" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" name="nom" aria-describedby="nomHelp" placeholder="Votre nom et prénom">
                  <small id="nomHelp" class="form-text text-muted">NOM, NOM D'USAGE le cas échéant et PRENOM ou RAISON SOCIALE</small>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="siren" placeholder="N° SIREN (Si entreprise ou association)">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="numvoie" placeholder="N° de la voie">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="extvoie" placeholder="Extension (bis, ...)">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="typevoie" placeholder="Type de voie (rue, avenue, ...)">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="nomvoie" placeholder="Nom de la voie">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="cp" placeholder="Code Postal">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="ville" placeholder="Ville">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="pays" placeholder="Pays">
                </div>
                <div class="form-group">
                  <small id="opeHelp" class="form-text text-muted">
                    Pour effectuer en mes lieu et place et pour mon compte les formalités administratives liées à l'opération d'immatriculation suivante :
                  </small>
                  <select class="form-control" aria-describedby="opeHelp" name="operation">
                    <option value="Changement de titulaire">Changement de titulaire</option>
                    <option value="Changement de domicile">Changement de domicile</option>
                    <option value="Déclaration d'achat">Déclaration d'achat</option>
                    <option value="Enregistrement acte de cession">Enregistrement acte de cession</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="marque" placeholder="Marque du véhicule (D.1)">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="vin" placeholder="Numéro VIN / Série (E)">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="immat" placeholder="Numéro d'immatriculation (A)">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="faita" placeholder="Fait à">
                </div>
                <div class="form-check">
                  <small>Je m’oppose à la réutilisation de mes données personnelles à des fins de prospection commerciale</small>
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="opposition" value="oui">
                    Oui
                  </label>
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="opposition" value="non">
                    Non
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-vmv m-3">Télécharger le pdf complété</button>
                  <a href="/doc" class="btn btn-vmv m-3 float-right"><i class="fa fa-home" aria-hidden="true"></i></a>
                </div>
              </form>
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
