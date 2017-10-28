<!doctype html>
<html lang="fr">
  <head>
    <?php require_once('../templates/header.html'); ?>
    <title>Documents | IciCarteGrise</title>

    <link rel="stylesheet" href="../css/doc.css" />
    <link rel="stylesheet" href="accordion.css" />
    <link rel="stylesheet" href="situation.css" />
  </head>

  <body>
    <?php require_once('../templates/navbar.html'); ?>


    <main id="main-accordion">
      <div class="container">
        <div class="row">
          <button id="show-version-text" class="btn btn-secondary my-5">Version Texte</button>
          <div class="accordion my-3">
            <dl> <!-- CHANGEMENT DE TITULAIRE -->
			        <dt><a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger accordion1">Changement de titulaire</a></dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
                <div class="card-block">
                  <div class="row">
                    <div class="col-md-4 offset-md-2 col-sm-6 nom">Mandat d'immatriculation</div>
                    <div class="col-md-2 col-sm-6 type"><span>Original</span></div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="image-doc"><a href="../images/mandat.jpg" target="_blank"><img class="img-responsive" src="../images/mandat.jpg" /></a></div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                      <p>Le mandat complété autorise <a class="a-vmv" href="/">Icicartegrise</a> à réaliser les démarches administratives au nom du client.
                      <br>Ne pas oublier de signer le document.
                      <br><a class="btn btn-vmv mt-4" href="cerfa13757.php">Complétez ce document en ligne</a></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-4 offset-md-2 col-sm-6 nom">Demande de certificat d'immatriculation</div>
                    <div class="col-md-2 col-sm-6 type"><span>Original</span></div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="image-doc"><a href="../images/demandeCerfaImmat.jpg" target="_blank"><img class="img-responsive" src="../images/demandeCerfaImmat.jpg" /></a></div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                      <p>A remplir et à signer par le demandeur.<br>S'il y a un co-titulaire, indiquer son nom et ajouter sa signature.
                      <br>Ne pas oublier de cocher la case correspondant à votre démarche en haut du document et signer en bas de page.<br>
                      <a href="cerfa13750_05.pdf" download="Demande_de_certificat_d'immatriculation" class="btn btn-vmv m-3">Télécharger ce PDF</a></p>
                    </div>
                  </div>

                  <hr>

                  <div class="row">
                    <div class="col-md-4 offset-md-2 col-sm-6 nom">Carte grise</div>
                    <div class="col-md-2 col-sm-6 type"><span>Original</span></div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="image-doc"><a href="../images/certifImmat.jpg" target="_blank"><img class="img-responsive" src="../images/certifImmat.jpg" /></a></div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                      <p>La carte grise doit être <strong>barrée, datée et signée par le ou les vendeurs.</strong>
                      <br>Si la <strong>ligne C.4.1 mentionne un co-titulaire</strong>, il doit également signer.
                      <br>Elle doit porter la mention <strong>"vendu le"</strong> ou <strong>"cédé le"</strong> suivi de la date et de l'heure de la vente.
                      <br>Conservez le <strong>coupon détachable</strong> ( à découper suivant les pointillés ) qui vous permettra de rouler <strong>pendant 1 mois</strong>.</p>
                    </div>
                  </div>

                  <hr>

                  <div class="row">
                    <div class="col-md-4 offset-md-2 col-sm-6 nom">Déclaration de cession d'un véhicule</div>
                    <div class="col-md-2 col-sm-6 type"><span>Original</span></div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="image-doc"><a href="../images/declarCession.jpg" target="_blank"><img class="img-responsive" src="../images/declarCession.jpg" /></a></div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                      <p><strong>S'il s'agit d'un achat auprès d’un particulier</strong><br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i> L’acte de cession est à remplir et à signer par le ou les anciens propriétaires ainsi que le ou les acquéreurs.<br><br>
                      <strong>S'il s'agit d'un achat à un professionnel de l'automobile</strong><br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i> L’acte de cession est à remplir et à signé par le professionnel de l’automobile ainsi que le ou les acquéreurs.<br>
                      <span class="text-vmv">Important : Le professionnel doit vous remettre la déclaration d’achat du véhicule que vous devez joindre à votre demande.</span><br><br>
                      <strong>S'il s'agit d'un achat suite à une succession (décès),</strong><br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i> L’acte de cession est à remplir et signé par tous les héritiers ainsi que le ou les acquéreurs.<br>
                      <span class="text-vmv">Important : Un certificat d'hérédité délivré par le notaire doit être joint à votre demande</span> <a class="a-vmv" href="#situation">( cf : situation particulière )</a>.<br>
                      <a href="cerfa13754_02.pdf" download="Declaration_de_cession_vehicule" class="btn btn-vmv m-3">Télécharger ce PDF</a></p>
                    </div>
                  </div>

                  <hr>

                  <div class="row">
                    <div class="col-md-4 offset-md-2 col-sm-6 nom">Justificatif d'identité officiel en cours de validité</div>
                    <div class="col-md-2 col-sm-6 type"><span>Photocopie</span></div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="image-doc"><a href="../images/identite.jpg" target="_blank"><img class="img-responsive my-8" src="../images/identite.jpg" /></a></div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                      <p>Les justificatifs d'identité suivants sont acceptés :<br><br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      La carte d'identité en cours de validité (recto/verso).<br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Le permis de conduire français (photocopie recto).<br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Le passport en cours de validité (photocopie).<br><br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Une carte de séjour temporaire, de résident, certificat de résidence de ressortissant algérien, carte de ressortissant d’un Etat membre de l’Union Européenne ou de l’espace économique Européen.<br><br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Pour une personne morale ou une entreprise, joindre un extrait k-bis original de
                      moins de 2 ans et un justificatif d'identité du représentant légal.<br><br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Pour une association, fournir les status.<br><br>
                      Un justificatif d'identité doit être fourni pour chaque titulaire et co-titulaire.</p>
                    </div>
                  </div>

                  <hr>

                  <div class="row">
                    <div class="col-md-4 offset-md-2 col-sm-6 nom">Justificatif de domicile de moins de 6 mois</div>
                    <div class="col-md-2 col-sm-6 type"><span>Photocopie</span></div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="image-doc"><a href="../images/justifDom.jpg" target="_blank"><img class="img-responsive my-8" src="../images/justifDom.jpg" /></a></div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                      <p>Les justificatifs suivants sont acceptés :<br><br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Une facture de gaz, d'électricité, de téléphone fixe ou de téléphone portable.<br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      L'avis d'imposition, l'attestation d'assurance du logement.<br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Une quittance de loyer délivré par un professionnel de l'immobilier.<br><br>
                      <span class="text-vmv">Attention, aucune facture d'eau ou acte notarié n'est accepté.</span><br><br>
                      Le justificatif de domicile doit être au nom du demandeur. <br><br>Dans le cas
                      contraire, fournir une attestation d'hébergement, une copie de l'identité
                      ainsi qu'un justificatif de domicile de moins de 6 mois au nom de l'hébergeur.document officiel montrant la réalité de la résidence de l'hébergé.<br>
                      <a href="attestation_hebergement.pdf" download="Attestation d'hébergement" class="btn btn-vmv m-3">Modèle d'attestation d'hébergement</a></p>
                    </div>
                  </div>

                  <hr>

                  <div class="row">
                    <div class="col-md-4 offset-md-2 col-sm-6 nom">Contrôle technique de moins de 6 mois</div>
                    <div class="col-md-2 col-sm-6 type"><span>Photocopie</span></div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="image-doc"><a href="../images/controlTechnic.jpg" target="_blank"><img class="img-responsive" src="../images/controlTechnic.jpg" /></a></div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                      <p>Ce document n'est pas nécessaire pour les véhicules de moins de 4 ans ou lorsque
                      le contrôle technique n'est pas obligatoire (motos, voiturettes, remorques et engins agricoles).<br><br>
                      <span class="text-vmv">Important: Si le véhicule a fait l'objet d'une contre-visite, vous devez joindre ce document à votre demande.</span></p>
                    </div>
                  </div>
                </div>
            </dd>

            <!-- CHANGEMENT DE DOMICILE -->
            <dt><a href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="accordion-title accordionTitle js-accordionTrigger accordion2">Changement de domicile</a></dt>
            <dd class="accordion-content accordionItem is-collapsed" id="accordion2" aria-hidden="true">
              <div class="card-block">
                <div class="row">
                  <div class="col-md-4 offset-md-2 col-sm-6 nom">Mandat d'immatriculation</div>
                  <div class="col-md-2 col-sm-6 type"><span>Original</span></div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="image-doc"><a href="../images/mandat.jpg" target="_blank"><img class="img-responsive" src="../images/mandat.jpg" /></a></div>
                  </div>
                  <div class="col-md-8 col-sm-12">
                    <p>Le mandat complété autorise <a class="a-vmv" href="/">Icicartegrise</a> à réaliser les démarches administratives au nom du client.
                    <br>Ne pas oublier de signer le document.
                    <br><a class="btn btn-vmv mt-4" href="cerfa13757.php">Complétez ce document en ligne</a></p>
                  </div>
                </div>

                <hr>

                <div class="row">
                  <div class="col-md-4 offset-md-2 col-sm-6 nom">Demande de certificat d'immatriculation</div>
                  <div class="col-md-2 col-sm-6 type"><span>Original</span></div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="image-doc"><a href="../images/demandeCerfaImmat.jpg" target="_blank"><img class="img-responsive" src="../images/demandeCerfaImmat.jpg" /></a></div>
                  </div>
                  <div class="col-md-8 col-sm-12 col-xs-12">
                    <p>A remplir et à signer par le demandeur.<br>S'il y a un co-titulaire, indiquer son nom et ajouter sa signature.
                    <br>Ne pas oublier de cocher la case correspondant à votre démarche en haut du document et signer en bas de page.<br>
                    <a href="cerfa13750_05.pdf" download="Demande_de_certificat_d'immatriculation" class="btn btn-vmv m-3">Télécharger ce PDF</a></p>
                  </div>
                </div>

                <hr>

                <div class="row">
                  <div class="col-md-4 offset-md-2 col-sm-6 nom">Carte grise</div>
                  <div class="col-md-2 col-sm-6 type"><span>Original ou Photocopie</span></div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="image-doc"><a href="../images/certifImmat.jpg" target="_blank"><img class="img-responsive" src="../images/certifImmat.jpg" /></a></div>
                  </div>
                  <div class="col-md-8 col-sm-12 col-xs-12">
                    <p><span class="text-vmv">Important :<br> Si votre immatriculation commence par une <strong>lettre</strong> :
                    fournir une <strong>photocopie</strong> de la carte grise.<br><br>Si votre immatriculation
                    commence par un <strong>chiffre</strong> : fournir <strong>l'original</strong> de la carte grise.</span>
                    <br><br>Conservez le <strong>coupon détachable</strong> ( à découper suivant les pointillés ) qui vous permettra de rouler <strong>pendant 1 mois</strong>.</p>
                  </div>
                </div>

                <hr>

                <div class="row">
                  <div class="col-md-4 offset-md-2 col-sm-6 nom">Justificatif d'identité en cours de validité</div>
                  <div class="col-md-2 col-sm-6 type"><span>Photocopie</span></div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="image-doc"><a href="../images/identite.jpg" target="_blank"><img class="img-responsive my-8" src="../images/identite.jpg" /></a></div>
                  </div>
                  <div class="col-md-8 col-sm-12 col-xs-12">
                    <p>Les justificatifs d'identité suivants sont acceptés :<br><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    La carte d'identité en cours de validité (recto/verso).<br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Le permis de conduire français (photocopie recto).<br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Le passport en cours de validité (photocopie).<br><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Une carte de séjour temporaire, de résident, certificat de résidence de ressortissant algérien, carte de ressortissant d’un Etat membre de l’Union Européenne ou de l’espace économique Européen.<br><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Pour une personne morale ou une entreprise, joindre un extrait k-bis original de
                    moins de 2 ans et un justificatif d'identité du représentant légal.<br><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Pour une association, fournir les status.<br><br>
                    Un justificatif d'identité doit être fourni pour chaque titulaire et co-titulaire.</p>
                  </div>
                </div>

                <hr>

                <div class="row">
                  <div class="col-md-4 offset-md-2 col-sm-6 nom">Justificatif de domicile de moins de 6 mois</div>
                  <div class="col-md-2 col-sm-6 type"><span>Photocopie</span></div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="image-doc"><a href="../images/justifDom.jpg" target="_blank"><img class="img-responsive my-8" src="../images/justifDom.jpg" /></a></div>
                  </div>
                  <div class="col-md-8 col-sm-12 col-xs-12">
                    <p>Les justificatifs suivants sont acceptés :<br><br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Une facture de gaz, d'électricité, de téléphone fixe ou de téléphone portable.<br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      L'avis d'imposition, l'attestation d'assurance du logement.<br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Une quittance de loyer délivré par un professionnel de l'immobilier.<br><br>
                      <span class="text-vmv">Attention, aucune facture d'eau ou acte notarié n'est accepté.</span><br><br>
                      Le justificatif de domicile doit être au nom du demandeur. <br><br>Dans le cas
                      contraire, fournir une attestation d'hébergement, une copie de l'identité
                      ainsi qu'un justificatif de domicile de moins de 6 mois au nom de l'hébergeur.document officiel montrant la réalité de la résidence de l'hébergé.<br>
                      <a href="attestation_hebergement.pdf" download="Attestation d'hébergement" class="btn btn-vmv m-3">Modèle d'attestation d'hébergement</a></p>
                  </div>
                </div>

                <hr>

                <div class="row">
                  <div class="col-md-4 offset-md-2 col-sm-6 nom">Contrôle technique en cours de validité</div>
                  <div class="col-md-2 col-sm-6 type"><span>Photocopie</span></div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="image-doc"><a href="../images/controlTechnic.jpg" target="_blank"><img class="img-responsive" src="../images/controlTechnic.jpg" /></a></div>
                  </div>
                  <div class="col-md-8 col-sm-12 col-xs-12">
                    <p>Ce document n'est pas nécessaire pour les véhicules de moins de 4 ans ou lorsque
                    le contrôle technique n'est pas obligatoire (motos, voiturettes, remorques et engins agricoles).<br><br>
                    <span class="text-vmv">Important: Si le véhicule a fait l'objet d'une contre-visite, vous devez joindre ce document à votre demande.</span></p>
                  </div>
                </div>
              </div>
            </dd>
            <dt>
              <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger accordion3">
                Demande de duplicata | <i>réservé prestataires </i><i class="fa fa-lock" aria-hidden="true"></i>
              </a>
            </dt>
            <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                                            <div class="card-block">
                  <div class="row">
                    <div class="col-md-4 offset-md-2 col-sm-6 nom">
                      Mandat d'immatriculation
                    </div>
                    <div class="col-md-2 col-sm-6 type">
                      <span>Original</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="image-doc">
                        <a href="../images/mandat.jpg" target="_blank"><img class="img-responsive" src="../images/mandat.jpg" /></a>
                      </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                      <p>Le mandat complété autorise <a class="a-vmv" href="/">Icicartegrise</a> à réaliser les démarches administratives au nom du client.
                      <br>Ne pas oublier de signer le document.
                      <br><a class="btn btn-vmv mt-4" href="cerfa13757.php">Complétez ce document en ligne</a></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-4 offset-md-2 col-sm-6 nom">
                      Déclaration de perte ou vol
                    </div>
                    <div class="col-md-2 col-sm-6 type">
                      <span>Original</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="image-doc">
                        <a href="../images/perteOuVol.jpg" target="_blank"><img class="img-responsive" src="../images/perteOuVol.jpg" /></a>
                      </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                      <p>Document justifiant de la perte ou du vol de votre carte grise.<br>
                        Pour un vol joindre le procès verbal du dépôt de plainte.
                      <br><a href="cerfa_13753.pdf" download="Declaration_de_perte_ou_de_vol" class="btn btn-vmv m-3">Télécharger ce PDF</a></p>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-md-4 offset-md-2 col-sm-6 nom">
                      Justificatif d'identité en cours de validité
                    </div>
                    <div class="col-md-2 col-sm-6 type">
                      <span>Photocopie</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="image-doc">
                        <a href="../images/identite.jpg" target="_blank"><img class="img-responsive my-8" src="../images/identite.jpg" /></a>
                      </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                      <p>Les justificatifs d'identité suivants sont acceptés :<br><br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      La carte d'identité en cours de validité (recto/verso).<br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Le permis de conduire français (photocopie recto).<br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Le passport en cours de validité (photocopie).<br><br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Une carte de séjour temporaire, de résident, certificat de résidence de ressortissant algérien, carte de ressortissant d’un Etat membre de l’Union Européenne ou de l’espace économique Européen.<br><br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Pour une personne morale ou une entreprise, joindre un extrait k-bis original de
                      moins de 2 ans et un justificatif d'identité du représentant légal.<br><br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Pour une association, fournir les status.<br><br>
                      Un justificatif d'identité doit être fourni pour chaque titulaire et co-titulaire.</p>

                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-md-4 offset-md-2 col-sm-6 nom">Justificatif de domicile de moins de 6 mois</div>
                    <div class="col-md-2 col-sm-6 type"><span>Photocopie</span></div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="image-doc"><a href="../images/justifDom.jpg" target="_blank"><img class="img-responsive my-8" src="../images/justifDom.jpg" /></a></div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                      <p>Les justificatifs suivants sont acceptés :<br><br>
                        <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                        Une facture de gaz, d'électricité, de téléphone fixe ou de téléphone portable.<br>
                        <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                        L'avis d'imposition, l'attestation d'assurance du logement.<br>
                        <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                        Une quittance de loyer délivré par un professionnel de l'immobilier.<br><br>
                        <span class="text-vmv">Attention, aucune facture d'eau ou acte notarié n'est accepté.</span><br><br>
                        Le justificatif de domicile doit être au nom du demandeur. <br><br>Dans le cas
                        contraire, fournir une attestation d'hébergement, une copie de l'identité
                        ainsi qu'un justificatif de domicile de moins de 6 mois au nom de l'hébergeur.document officiel montrant la réalité de la résidence de l'hébergé.<br>
                        <a href="attestation_hebergement.pdf" download="Attestation d'hébergement" class="btn btn-vmv m-3">Modèle d'attestation d'hébergement</a></p>
                    </div>
                  </div>
                  </div>
            </dd>
			            <dt>
              <a href="#accordion4" aria-expanded="false" aria-controls="accordion4" class="accordion-title accordionTitle js-accordionTrigger accordion4">
                Enregistrement acte de cession | <i>réservé prestataires </i><i class="fa fa-lock" aria-hidden="true"></i>
              </a>
            </dt>
            <dd class="accordion-content accordionItem is-collapsed" id="accordion4" aria-hidden="true">
                                                          <div class="card-block">
                  <div class="row">
                    <div class="col-md-4 offset-md-2 col-sm-6 nom">
                      Mandat d'immatriculation
                    </div>
                    <div class="col-md-2 col-sm-6 type">
                      <span>Original</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="image-doc">
                        <a href="../images/mandat.jpg" target="_blank"><img class="img-responsive" src="../images/mandat.jpg" /></a>
                      </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                      <p>Le mandat complété autorise <a class="a-vmv" href="/">Icicartegrise</a> à réaliser les démarches administratives au nom du client.
                      <br>Ne pas oublier de signer le document.
                      <br><a class="btn btn-vmv mt-4" href="cerfa13757.php">Complétez ce document en ligne</a></p>
                    </div>
                  </div>
                  <hr>
                                    <div class="row">
                    <div class="col-md-4 offset-md-2 col-sm-6 nom">
                      Carte grise
                    </div>
                    <div class="col-md-2 col-sm-6 type">
                      <span>Photocopie</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="image-doc">
                        <a href="../images/certifImmat.jpg" target="_blank"><img class="img-responsive" src="../images/certifImmat.jpg" /></a>
                      </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                      <p>La carte grise doit être <strong>barrée, datée et signée par le ou les vendeurs.</strong>
                      <br>Si la <strong>ligne C.4.1 mentionne un co-titulaire</strong>, il doit également signer.
                      <br>Elle doit porter la mention <strong>"vendu le"</strong> ou <strong>"cédé le"</strong> suivi de la date et de l'heure de la vente.
                      </p>
                    </div>
                  </div>
                  <hr>
                                    <div class="row">
                    <div class="col-md-4 offset-md-2 col-sm-6 nom">
                      Déclaration de cession
                    </div>
                    <div class="col-md-2 col-sm-6 type">
                      <span>Original</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="image-doc">
                        <a href="../images/declarCession.jpg" target="_blank"><img class="img-responsive" src="../images/declarCession.jpg" /></a>
                      </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                      <p>
                      L’acte de cession est à remplir et à signer par le ou les anciens propriétaires ainsi que le ou les acquéreurs.<br>
                      <a href="cerfa13754_02.pdf" download="Declaration_de_cession_vehicule" class="btn btn-vmv m-3">Télécharger ce PDF</a>
                      </p>

                    </div>
                  </div>

                  <hr>

                  <div class="row">
                    <div class="col-md-4 offset-md-2 col-sm-6 nom">
                      Justificatif d'identité en cours de validité
                    </div>
                    <div class="col-md-2 col-sm-6 type">
                      <span>Photocopie</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <div class="image-doc">
                        <a href="../images/identite.jpg" target="_blank"><img class="img-responsive my-8" src="../images/identite.jpg" /></a>
                      </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                      <p>Les justificatifs d'identité suivants sont acceptés :<br><br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      La carte d'identité en cours de validité (recto/verso).<br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Le permis de conduire français (photocopie recto).<br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Le passport en cours de validité (photocopie).<br><br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Une carte de séjour temporaire, de résident, certificat de résidence de ressortissant algérien, carte de ressortissant d’un Etat membre de l’Union Européenne ou de l’espace économique Européen.<br><br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Pour une personne morale ou une entreprise, joindre un extrait k-bis original de
                      moins de 2 ans et un justificatif d'identité du représentant légal.<br><br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Pour une association, fournir les status.<br><br>
                      Un justificatif d'identité doit être fourni pour chaque titulaire et co-titulaire.</p>
                    </div>
                  </div>
                  </div>
            </dd>
			            <dt>
              <a id="situation" href="#accordion5" aria-expanded="false" aria-controls="accordion5" class="accordion-title accordionTitle js-accordionTrigger accordion5">
                Situations Particulières
              </a>
            </dt>
            <dd class="accordion-content accordionItem is-collapsed" id="accordion5" aria-hidden="true">
              <div class="card-block">
                <p class="text-nopadding text-vmv text-center">Tous les documents mentionnés auparavant sont à fournir, veuillez y ajouter ceux correspondant à votre situation.</p>
                <ul id="accordion" class="accordion-situation">
		              <li><div class="link"><i class="fa fa-square" aria-hidden="true"></i>SI LE PROPRIÉTAIRE EST DÉCÉDÉ<i class="fa fa-chevron-down"></i></div>
			              <div class="submenu"><p>

                      <h3>Le véhicule reste dans la succession</h3><br>

<h5><span class="text-vmv"></span> Si le véhicule est céder à un héritier non co-titulaire de la carte grise.</h5><br>

Fournir une attestation du notaire<br>
OU un certificat de propriété établi par un juge d’instance<br>
OU un certificat d’hérédité délivré par le Maire désignant tous les héritiers<br><br>

Tout le(s) héritier(s) renonçant au véhicule devront rédiger une lettre de désistement en faveur de la personne qui demande l’immatriculation en son nom. (Ce ou ces lettre(s) sont à joindre à votre demande)<br>
<br>

<h5><span class="text-vmv"></span> Si le véhicule est céder à un héritier co-titulaire de la carte grise.</h5><br>
Fournir une attestation du notaire<br>
OU un certificat de propriété établi par un juge d’instance<br>
OU un certificat d’hérédité délivré par le Maire désignant tous les héritiers<br><br>


La personne survivante doit remplir un acte de cession des héritiers éventuels à son profit.<br> Ou une attestation du notaire ou du maire indiquant que soit les cohéritiers n’ont pas à s’exprimer sur la destination du bien, soit qu’ils ont manifesté leur volonté de se désister.
<br><br>

<h3>Le véhicule est vendu à un tiers</h3><br>
<h5><span class="text-vmv"></span> Si le propriétaire est décédé, le véhicule est vendu à un tiers.</h5>
<br>
<h6>a)	Dans les 3 mois suivants le décès</h6>
<br>
Fournir un certificat de d'hérédité.<br>
L’héritier n’est pas obligé de faire ré-immatriculer le véhicule, la vente s’effectue comme une vente de véhicule d’occasion classique .<br>
<br>

<h6>b)	Plus de 3 mois après le décès</h6><br>

<span class="text-vmv"></span> Si le véhicule n’a pas circulé sur la voie publique : <br><br>
L’héritier n’est pas obligé de faire ré-immatriculer le véhicule, il devra fournir à l’acquéreur une attestation sur l’honneur certifiant que le véhicule n’a pas circulé sur la voie publique depuis le décès du titulaire de la carte grise.
<br><br>
<span class="text-vmv"></span> Si le véhicule à circulé sur la voie publique : <br><br>
L’héritier est obligé de faire ré-immatriculer le véhicule à son nom avant de le revendre.<br>


                      </p>
                    </div>
		              </li>

		              <li><div class="link"><i class="fa fa-square"></i>SI VOUS ÊTES EN LOCATION (LONGUE DURÉE, AVEC OPTION D’ACHAT OU CRÉDIT BAIL)<i class="fa fa-chevron-down"></i></div>
              			<div class="submenu">
              				<p>Le certificat de vente délivré par l’organisme de crédit remplace l’acte de cession.</p>
              			</div>
              		</li>
              		<li><div class="link"><i class="fa fa-square"></i>SI VOUS ÊTES UNE ASSOCIATION OU UNE ENTREPRISE<i class="fa fa-chevron-down"></i></div>
              			<div class="submenu"><p>
              			  <s class="text-vmv">Pour une entreprise :</s> joindre un extrait K-bis original de moins de 2 ans et un justificatif d’identité en cours de validité du représentant légal.<br>
                      <s class="text-vmv">Pour une association :</s> joindre les statuts et un justificatif d’identité en cours de validité du président.</p>
              			</div>
              		</li>
              		<li><div class="link"><i class="fa fa-square"></i>SI VOUS HABITEZ SUR UN BATEAU DE PLAISANCE<i class="fa fa-chevron-down"></i></div>
              			<div class="submenu"><p>
                      <span class="text-vmv"></span> Copie d’assurance du bateau,<br>
                      <span class="text-vmv"></span> Attestation de la capitainerie du port, d’une location permanente  ou d’une propriété d’emplacement,<br>
                      <span class="text-vmv"></span> Copie du titre de propriété ou du contrat de location du bateau  en cours de validité.</p>
              			</div>
              		</li>
              		<li><div class="link"><i class="fa fa-square"></i>SI VOUS HABITEZ DANS UN CAMPING OU DANS UN HÔTEL<i class="fa fa-chevron-down"></i></div>
              			<div class="submenu"><p>
                      Fournir une copie de facture de l’hôtel ou du camping à votre nom.</p>
              			</div>
              		</li>
              		<li><div class="link"><i class="fa fa-square"></i>SI VOUS ÊTES SANS DOMICILE FIXE  OU SANS COMMUNES DE RATTACHEMENT<i class="fa fa-chevron-down"></i></div>
              			<div class="submenu"><p>
                      Fournir une attestation de domicile à demander en mairie.</p>
              			</div>
              		</li>
              	</ul>
              </div>
            </dd>
        </dl>
    </div>

        </div>
      </div>
    </main>

    <main id="main-simple">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-12">
            <div class="card my-4">
              <div class="card-header">
                <p class="page-header">Documentation : Pièces à fournir <i class="fa fa-book" aria-hidden="true"></i></p>
              </div>
              <div class="card-block">
                <span class="lienDoc"><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#changementDeTitulaire" class="">Changement de titulaire</a><br></span>
                <span class="lienDoc"><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#changementDeDomicile" class="">Changement de domicile</a><br></span>
                <span class="lienDoc"><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#DeclarationDachat" class="">Déclaration d'achat</a> <i class="fa fa-lock" aria-hidden="true"></i><br></span>
                <span class="lienDoc"><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#enregistrementActeDeCession" class="">Enregistrement acte de cession</a> <i class="fa fa-lock" aria-hidden="true"></i><br></span>
                <span class="lienDoc"><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#situationsParticulieres" class="">Situations Particulières</a><br></span>
                <div class="margin"></div><div class="margin"></div>
                <h1 id="changementDeTitulaire" class="text-center">Changement de titulaire</h1>
                <hr>
                <p><span class="nom">&nbsp;&nbsp;&nbsp;Mandat d'immatriculation&nbsp;&nbsp;&nbsp;</span> / <span class="type">Original</span></p>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="image-doc"><a href="../images/mandat.jpg" target="_blank"><img class="img-responsive" src="../images/mandat.jpg" /></a></div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <p>Le mandat complété autorise <a class="a-vmv" href="/">Icicartegrise</a> à réaliser les démarches administratives au nom du client.
                    <br>Ne pas oublier de signer le document.
                    <br><a class="btn btn-vmv mt-4" href="cerfa13757.php">Complétez ce document en ligne</a></p>
                  </div>
                </div>

                <hr>

                <p><span class="nom">&nbsp;&nbsp;&nbsp;Demande de certificat d'immatriculation&nbsp;&nbsp;&nbsp;</span> / <span class="type">Original</span></p>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="image-doc"><a href="../images/demandeCerfaImmat.jpg" target="_blank"><img class="img-responsive" src="../images/demandeCerfaImmat.jpg" /></a></div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <p>A remplir et à signer par le demandeur.<br>S'il y a un co-titulaire, indiquer son nom et ajouter sa signature.
                    <br>Ne pas oublier de cocher la case correspondant à votre démarche en haut du document et signer en bas de page.<br>
                    <a href="cerfa13750_05.pdf" download="Demande_de_certificat_d'immatriculation" class="btn btn-vmv m-3">Télécharger ce PDF</a></p>
                  </div>
                </div>

                <hr>

                <p><span class="nom">&nbsp;&nbsp;&nbsp;Carte grise&nbsp;&nbsp;&nbsp;</span> / <span class="type">Original</span></p>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="image-doc"><a href="../images/certifImmat.jpg" target="_blank"><img class="img-responsive" src="../images/certifImmat.jpg" /></a></div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <p>La carte grise doit être <strong>barrée, datée et signée par le ou les vendeurs.</strong>
                    <br>Si la <strong>ligne C.4.1 mentionne un co-titulaire</strong>, il doit également signer.
                    <br>Elle doit porter la mention <strong>"vendu le"</strong> ou <strong>"cédé le"</strong> suivi de la date et de l'heure de la vente.
                    <br>Conservez le <strong>coupon détachable</strong> ( à découper suivant les pointillés ) qui vous permettra de rouler <strong>pendant 1 mois</strong>.</p>
                  </div>
                </div>

                <hr>

                <p><span class="nom">&nbsp;&nbsp;&nbsp;Déclaration de cession d'un véhicule&nbsp;&nbsp;&nbsp;</span> / <span class="type">Original</span></p>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="image-doc"><a href="../images/declarCession.jpg" target="_blank"><img class="img-responsive" src="../images/declarCession.jpg" /></a></div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <p><strong>S'il s'agit d'un achat auprès d’un particulier</strong><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i> L’acte de cession est à remplir et à signer par le ou les anciens propriétaires ainsi que le ou les acquéreurs.<br><br>
                    <strong>S'il s'agit d'un achat à un professionnel de l'automobile</strong><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i> L’acte de cession est à remplir et à signé par le professionnel de l’automobile ainsi que le ou les acquéreurs.<br>
                    <span class="text-vmv">Important : Le professionnel doit vous remettre la déclaration d’achat du véhicule que vous devez joindre à votre demande.</span><br><br>
                    <strong>S'il s'agit d'un achat suite à une succession (décès),</strong><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i> L’acte de cession est à remplir et signé par tous les héritiers ainsi que le ou les acquéreurs.<br>
                    <span class="text-vmv">Important : Un certificat d'hérédité délivré par le notaire doit être joint à votre demande</span> <a class="a-vmv" href="#situation">( cf : situation particulière )</a>.<br>
                    <a href="cerfa13754_02.pdf" download="Declaration_de_cession_vehicule" class="btn btn-vmv m-3">Télécharger ce PDF</a></p>
                  </div>
                </div>

                <hr>

                <p><span class="nom">&nbsp;&nbsp;&nbsp;Justificatif d'identité officiel en cours de validité&nbsp;&nbsp;&nbsp;</span> / <span class="type">Photocopie</span></p>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="image-doc"><a href="../images/identite.jpg" target="_blank"><img class="img-responsive my-8" src="../images/identite.jpg" /></a></div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <p>Les justificatifs d'identité suivants sont acceptés :<br><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    La carte d'identité en cours de validité (recto/verso).<br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Le permis de conduire français (photocopie recto).<br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Le passport en cours de validité (photocopie).<br><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Une carte de séjour temporaire, de résident, certificat de résidence de ressortissant algérien, carte de ressortissant d’un Etat membre de l’Union Européenne ou de l’espace économique Européen.<br><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Pour une personne morale ou une entreprise, joindre un extrait k-bis original de
                    moins de 2 ans et un justificatif d'identité du représentant légal.<br><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Pour une association, fournir les status.<br><br>
                    Un justificatif d'identité doit être fourni pour chaque titulaire et co-titulaire.</p>
                  </div>
                </div>

                <hr>

                <p><span class="nom">&nbsp;&nbsp;&nbsp;Justificatif de domicile de moins de 6 mois&nbsp;&nbsp;&nbsp;</span> / <span class="type">Photocopie</span></p>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="image-doc"><a href="../images/justifDom.jpg" target="_blank"><img class="img-responsive my-8" src="../images/justifDom.jpg" /></a></div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <p>Les justificatifs suivants sont acceptés :<br><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Une facture de gaz, d'électricité, de téléphone fixe ou de téléphone portable.<br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    L'avis d'imposition, l'attestation d'assurance du logement.<br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Une quittance de loyer délivré par un professionnel de l'immobilier.<br><br>
                    <span class="text-vmv">Attention, aucune facture d'eau ou acte notarié n'est accepté.</span><br><br>
                    Le justificatif de domicile doit être au nom du demandeur. <br><br>Dans le cas
                    contraire, fournir une attestation d'hébergement, une copie de l'identité
                    ainsi qu'un justificatif de domicile de moins de 6 mois au nom de l'hébergeur.document officiel montrant la réalité de la résidence de l'hébergé.<br>
                    <a href="attestation_hebergement.pdf" download="Attestation d'hébergement" class="btn btn-vmv m-3">Modèle d'attestation d'hébergement</a></p>
                  </div>
                </div>

                <hr>

                <p><span class="nom">&nbsp;&nbsp;&nbsp;Contrôle technique de moins de 6 mois&nbsp;&nbsp;&nbsp;</span> / <span class="type">Photocopie</span></p>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="image-doc"><a href="../images/controlTechnic.jpg" target="_blank"><img class="img-responsive" src="../images/controlTechnic.jpg" /></a></div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <p>Ce document n'est pas nécessaire pour les véhicules de moins de 4 ans ou lorsque
                    le contrôle technique n'est pas obligatoire (motos, voiturettes, remorques et engins agricoles).<br><br>
                    <span class="text-vmv">Important: Si le véhicule a fait l'objet d'une contre-visite, vous devez joindre ce document à votre demande.</span></p>
                  </div>
                </div>

                <hr style="border-top: 2px solid rgba(238, 55, 135, 1);">
                <hr style="border-top: 2px solid rgba(238, 55, 135, 1);">
                <hr style="border-top: 2px solid rgba(238, 55, 135, 1);">

                <h1 id="changementDeDomicile" class="text-center">Changement de domicile</h1>
                <hr>
                <p><span class="nom">&nbsp;&nbsp;&nbsp;Mandat d'immatriculation&nbsp;&nbsp;&nbsp;</span> / <span class="type">Original</span></p>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="image-doc"><a href="../images/mandat.jpg" target="_blank"><img class="img-responsive" src="../images/mandat.jpg" /></a></div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <p>Le mandat complété autorise <a class="a-vmv" href="/">Icicartegrise</a> à réaliser les démarches administratives au nom du client.
                    <br>Ne pas oublier de signer le document.
                    <br><a class="btn btn-vmv mt-4" href="cerfa13757.php">Complétez ce document en ligne</a></p>
                  </div>
                </div>

                <hr>

                <p><span class="nom">&nbsp;&nbsp;&nbsp;Demande de certificat d'immatriculation&nbsp;&nbsp;&nbsp;</span> / <span class="type">Original</span></p>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="image-doc"><a href="../images/demandeCerfaImmat.jpg" target="_blank"><img class="img-responsive" src="../images/demandeCerfaImmat.jpg" /></a></div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <p>A remplir et à signer par le demandeur.<br>S'il y a un co-titulaire, indiquer son nom et ajouter sa signature.
                    <br>Ne pas oublier de cocher la case correspondant à votre démarche en haut du document et signer en bas de page.<br>
                    <a href="cerfa13750_05.pdf" download="Demande_de_certificat_d'immatriculation" class="btn btn-vmv m-3">Télécharger ce PDF</a></p>
                  </div>
                </div>

                <hr>

                <p><span class="nom">&nbsp;&nbsp;&nbsp;Carte grise&nbsp;&nbsp;&nbsp;</span> / <span class="type">Original ou Photocopie</span></p>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="image-doc"><a href="../images/certifImmat.jpg" target="_blank"><img class="img-responsive" src="../images/certifImmat.jpg" /></a></div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <p><span class="text-vmv">Important :<br> Si votre immatriculation commence par une <strong>lettre</strong> :
                    fournir une <strong>photocopie</strong> de la carte grise.<br><br>Si votre immatriculation
                    commence par un <strong>chiffre</strong> : fournir <strong>l'original</strong> de la carte grise.</span>
                    <br><br>Conservez le <strong>coupon détachable</strong> ( à découper suivant les pointillés ) qui vous permettra de rouler <strong>pendant 1 mois</strong>.</p>
                  </div>
                </div>

                <hr>

                <p><span class="nom">&nbsp;&nbsp;&nbsp;Justificatif d'identité en cours de validité&nbsp;&nbsp;&nbsp;</span> / <span class="type">Photocopie</span></p>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="image-doc"><a href="../images/identite.jpg" target="_blank"><img class="img-responsive my-8" src="../images/identite.jpg" /></a></div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <p>Les justificatifs d'identité suivants sont acceptés :<br><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    La carte d'identité en cours de validité (recto/verso).<br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Le permis de conduire français (photocopie recto).<br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Le passport en cours de validité (photocopie).<br><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Une carte de séjour temporaire, de résident, certificat de résidence de ressortissant algérien, carte de ressortissant d’un Etat membre de l’Union Européenne ou de l’espace économique Européen.<br><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Pour une personne morale ou une entreprise, joindre un extrait k-bis original de
                    moins de 2 ans et un justificatif d'identité du représentant légal.<br><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Pour une association, fournir les status.<br><br>
                    Un justificatif d'identité doit être fourni pour chaque titulaire et co-titulaire.</p>
                  </div>
                </div>

                <hr>

                <p><span class="nom">&nbsp;&nbsp;&nbsp;Justificatif de domicile de moins de 6 mois&nbsp;&nbsp;&nbsp;</span> / <span class="type">Photocopie</span></p>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="image-doc"><a href="../images/justifDom.jpg" target="_blank"><img class="img-responsive my-8" src="../images/justifDom.jpg" /></a></div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <p>Les justificatifs suivants sont acceptés :<br><br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Une facture de gaz, d'électricité, de téléphone fixe ou de téléphone portable.<br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      L'avis d'imposition, l'attestation d'assurance du logement.<br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Une quittance de loyer délivré par un professionnel de l'immobilier.<br><br>
                      <span class="text-vmv">Attention, aucune facture d'eau ou acte notarié n'est accepté.</span><br><br>
                      Le justificatif de domicile doit être au nom du demandeur. <br><br>Dans le cas
                      contraire, fournir une attestation d'hébergement, une copie de l'identité
                      ainsi qu'un justificatif de domicile de moins de 6 mois au nom de l'hébergeur.document officiel montrant la réalité de la résidence de l'hébergé.<br>
                      <a href="attestation_hebergement.pdf" download="Attestation d'hébergement" class="btn btn-vmv m-3">Modèle d'attestation d'hébergement</a></p>
                  </div>
                </div>

                <hr>

                <p><span class="nom">&nbsp;&nbsp;&nbsp;Contrôle technique en cours de validité&nbsp;&nbsp;&nbsp;</span> / <span class="type">Photocopie</span></p>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="image-doc"><a href="../images/controlTechnic.jpg" target="_blank"><img class="img-responsive" src="../images/controlTechnic.jpg" /></a></div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <p>Ce document n'est pas nécessaire pour les véhicules de moins de 4 ans ou lorsque
                    le contrôle technique n'est pas obligatoire (motos, voiturettes, remorques et engins agricoles).<br><br>
                    <span class="text-vmv">Important: Si le véhicule a fait l'objet d'une contre-visite, vous devez joindre ce document à votre demande.</span></p>
                  </div>
                </div>

                <hr style="border-top: 2px solid rgba(238, 55, 135, 1);">
                <hr style="border-top: 2px solid rgba(238, 55, 135, 1);">
                <hr style="border-top: 2px solid rgba(238, 55, 135, 1);">

                <h1 id="DeclarationDachat" class="text-center">Demande de duplicata | <i>réservé prestataires </i><i class="fa fa-lock" aria-hidden="true"></i></h1>
                <hr>
                <p><span class="nom">&nbsp;&nbsp;&nbsp;Mandat d'immatriculation&nbsp;&nbsp;&nbsp;</span> / <span class="type">Original</span></p>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="image-doc">
                      <a href="../images/mandat.jpg" target="_blank"><img class="img-responsive" src="../images/mandat.jpg" /></a>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <p>Le mandat complété autorise <a class="a-vmv" href="/">Icicartegrise</a> à réaliser les démarches administratives au nom du client.
                    <br>Ne pas oublier de signer le document.
                    <br><a class="btn btn-vmv mt-4" href="cerfa13757.php">Complétez ce document en ligne</a></p>
                  </div>
                </div>

                <hr>

                <p><span class="nom">&nbsp;&nbsp;&nbsp;Déclaration de perte ou vol&nbsp;&nbsp;&nbsp;</span> / <span class="type">Original</span></p>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="image-doc">
                      <a href="../images/perteOuVol.jpg" target="_blank"><img class="img-responsive" src="../images/perteOuVol.jpg" /></a>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <p>Document justifiant de la perte ou du vol de votre carte grise.<br>
                      Pour un vol joindre le procès verbal du dépôt de plainte.
                    <br><a href="cerfa_13753.pdf" download="Declaration_de_perte_ou_de_vol" class="btn btn-vmv m-3">Télécharger ce PDF</a></p>
                  </div>
                </div>

                <hr>

                <p><span class="nom">&nbsp;&nbsp;&nbsp;Justificatif d'identité en cours de validité&nbsp;&nbsp;&nbsp;</span> / <span class="type">Photocopie</span></p>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="image-doc">
                      <a href="../images/identite.jpg" target="_blank"><img class="img-responsive my-8" src="../images/identite.jpg" /></a>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <p>Les justificatifs d'identité suivants sont acceptés :<br><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    La carte d'identité en cours de validité (recto/verso).<br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Le permis de conduire français (photocopie recto).<br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Le passport en cours de validité (photocopie).<br><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Une carte de séjour temporaire, de résident, certificat de résidence de ressortissant algérien, carte de ressortissant d’un Etat membre de l’Union Européenne ou de l’espace économique Européen.<br><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Pour une personne morale ou une entreprise, joindre un extrait k-bis original de
                    moins de 2 ans et un justificatif d'identité du représentant légal.<br><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Pour une association, fournir les status.<br><br>
                    Un justificatif d'identité doit être fourni pour chaque titulaire et co-titulaire.</p>
                  </div>
                </div>

                <hr>

                <p><span class="nom">&nbsp;&nbsp;&nbsp;Justificatif de domicile de moins de 6 mois&nbsp;&nbsp;&nbsp;</span> / <span class="type">Photocopie</span></p>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="image-doc"><a href="../images/justifDom.jpg" target="_blank"><img class="img-responsive my-8" src="../images/justifDom.jpg" /></a></div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <p>Les justificatifs suivants sont acceptés :<br><br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Une facture de gaz, d'électricité, de téléphone fixe ou de téléphone portable.<br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      L'avis d'imposition, l'attestation d'assurance du logement.<br>
                      <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                      Une quittance de loyer délivré par un professionnel de l'immobilier.<br><br>
                      <span class="text-vmv">Attention, aucune facture d'eau ou acte notarié n'est accepté.</span><br><br>
                      Le justificatif de domicile doit être au nom du demandeur. <br><br>Dans le cas
                      contraire, fournir une attestation d'hébergement, une copie de l'identité
                      ainsi qu'un justificatif de domicile de moins de 6 mois au nom de l'hébergeur.document officiel montrant la réalité de la résidence de l'hébergé.<br>
                      <a href="attestation_hebergement.pdf" download="Attestation d'hébergement" class="btn btn-vmv m-3">Modèle d'attestation d'hébergement</a></p>
                  </div>
                </div>

                <hr style="border-top: 2px solid rgba(238, 55, 135, 1);">
                <hr style="border-top: 2px solid rgba(238, 55, 135, 1);">
                <hr style="border-top: 2px solid rgba(238, 55, 135, 1);">

                <h1 id="enregistrementActeDeCession" class="text-center">Enregistrement acte de cession | <i>réservé prestataires </i><i class="fa fa-lock" aria-hidden="true"></i></h1>
                <hr>
                <p><span class="nom">&nbsp;&nbsp;&nbsp;Mandat d'immatriculation&nbsp;&nbsp;&nbsp;</span> / <span class="type">Original</span></p>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="image-doc">
                      <a href="../images/mandat.jpg" target="_blank"><img class="img-responsive" src="../images/mandat.jpg" /></a>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <p>Le mandat complété autorise <a class="a-vmv" href="/">Icicartegrise</a> à réaliser les démarches administratives au nom du client.
                    <br>Ne pas oublier de signer le document.
                    <br><a class="btn btn-vmv mt-4" href="cerfa13757.php">Complétez ce document en ligne</a></p>
                  </div>
                </div>

                <hr>

                <p><span class="nom">&nbsp;&nbsp;&nbsp;Carte grise&nbsp;&nbsp;&nbsp;</span> / <span class="type">Photocopie</span></p>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="image-doc">
                      <a href="../images/certifImmat.jpg" target="_blank"><img class="img-responsive" src="../images/certifImmat.jpg" /></a>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <p>La carte grise doit être <strong>barrée, datée et signée par le ou les vendeurs.</strong>
                    <br>Si la <strong>ligne C.4.1 mentionne un co-titulaire</strong>, il doit également signer.
                    <br>Elle doit porter la mention <strong>"vendu le"</strong> ou <strong>"cédé le"</strong> suivi de la date et de l'heure de la vente.
                    </p>
                  </div>
                </div>

                <hr>

                <p><span class="nom">&nbsp;&nbsp;&nbsp;Déclaration de cession&nbsp;&nbsp;&nbsp;</span> / <span class="type">Original</span></p>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="image-doc">
                      <a href="../images/declarCession.jpg" target="_blank"><img class="img-responsive" src="../images/declarCession.jpg" /></a>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <p>
                    L’acte de cession est à remplir et à signer par le ou les anciens propriétaires ainsi que le ou les acquéreurs.<br>
                    <a href="cerfa13754_02.pdf" download="Declaration_de_cession_vehicule" class="btn btn-vmv m-3">Télécharger ce PDF</a>
                    </p>
                  </div>
                </div>

                <hr>

                <p><span class="nom">&nbsp;&nbsp;&nbsp;Justificatif d'identité en cours de validité&nbsp;&nbsp;&nbsp;</span> / <span class="type">Photocopie</span></p>

                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <div class="image-doc">
                      <a href="../images/identite.jpg" target="_blank"><img class="img-responsive my-8" src="../images/identite.jpg" /></a>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <p>Les justificatifs d'identité suivants sont acceptés :<br><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    La carte d'identité en cours de validité (recto/verso).<br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Le permis de conduire français (photocopie recto).<br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Le passport en cours de validité (photocopie).<br><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Une carte de séjour temporaire, de résident, certificat de résidence de ressortissant algérien, carte de ressortissant d’un Etat membre de l’Union Européenne ou de l’espace économique Européen.<br><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Pour une personne morale ou une entreprise, joindre un extrait k-bis original de
                    moins de 2 ans et un justificatif d'identité du représentant légal.<br><br>
                    <i class="fa fa-angle-right text-vmv" aria-hidden="true"></i>
                    Pour une association, fournir les status.<br><br>
                    Un justificatif d'identité doit être fourni pour chaque titulaire et co-titulaire.</p>
                  </div>
                </div>

                <hr style="border-top: 2px solid rgba(238, 55, 135, 1);">
                <hr style="border-top: 2px solid rgba(238, 55, 135, 1);">
                <hr style="border-top: 2px solid rgba(238, 55, 135, 1);">

                <h1 id="situationsParticulieres" class="text-center">Situations Particulières</h1>

                <hr>

                <h2 class="text-vmv">Si le propriétaire est décédé</h2>
                <p>
                <h3>Le véhicule reste dans la succession</h3><br>
                <h5><i class="fa fa-angle-right text-vmv" aria-hidden="true"></i> Si le véhicule est céder à un héritier non co-titulaire de la carte grise.</h5><br>

Fournir une attestation du notaire<br>
OU un certificat de propriété établi par un juge d’instance<br>
OU un certificat d’hérédité délivré par le Maire désignant tous les héritiers<br><br>

Tout le(s) héritier(s) renonçant au véhicule devront rédiger une lettre de désistement en faveur de la personne qui demande l’immatriculation en son nom. (Ce ou ces lettre(s) sont à joindre à votre demande)<br>
<br>

<h5><i class="fa fa-angle-right text-vmv" aria-hidden="true"></i> Si le véhicule est céder à un héritier co-titulaire de la carte grise.</h5><br>
Fournir une attestation du notaire<br>
OU un certificat de propriété établi par un juge d’instance<br>
OU un certificat d’hérédité délivré par le Maire désignant tous les héritiers<br><br>


La personne survivante doit remplir un acte de cession des héritiers éventuels à son profit.<br> Ou une attestation du notaire ou du maire indiquant que soit les cohéritiers n’ont pas à s’exprimer sur la destination du bien, soit qu’ils ont manifesté leur volonté de se désister.
<br><br>

<h3>Le véhicule est vendu à un tiers</h3><br>
<h5><i class="fa fa-angle-right text-vmv" aria-hidden="true"></i> Si le propriétaire est décédé, le véhicule est vendu à un tiers.</h5>
<br>
<h6>a)	Dans les 3 mois suivants le décès</h6>
<br>
Fournir un certificat de d'hérédité.<br>
L’héritier n’est pas obligé de faire ré-immatriculer le véhicule, la vente s’effectue comme une vente de véhicule d’occasion classique .<br>
<br>

<h6>b)	Plus de 3 mois après le décès</h6><br>

<i class="fa fa-angle-right text-vmv" aria-hidden="true"></i> Si le véhicule n’a pas circulé sur la voie publique : <br><br>
L’héritier n’est pas obligé de faire ré-immatriculer le véhicule, il devra fournir à l’acquéreur une attestation sur l’honneur certifiant que le véhicule n’a pas circulé sur la voie publique depuis le décès du titulaire de la carte grise.
<br><br>
<i class="fa fa-angle-right text-vmv" aria-hidden="true"></i> Si le véhicule à circulé sur la voie publique : <br><br>
L’héritier est obligé de faire ré-immatriculer le véhicule à son nom avant de le revendre.<br>
                  </p>
                  <hr>

                  <h2 class="text-vmv">Si vous êtes en location (longue durée, avec option d'achat ou crédit bail)</h2>
                  <p>Le certificat de vente délivré par l’organisme de crédit remplace l’acte de cession.</p>
                  <hr>
                  <h2 class="text-vmv">Si vous êtes une association ou une entreprise</h2>
                  <p><span class="text-vmv">Pour une entreprise :</span> joindre un extrait K-bis original de moins de 2 ans et un justificatif d’identité en cours de validité du représentant légal.
                  <br>  <span class="text-vmv">Pour une association :</span> joindre les statuts et un justificatif d’identité en cours de validité du président.</p>
                  <hr>
                  <h2 class="text-vmv">Si vous habitez sur un bateau de plaisance</h2>
                  <p><i class="fa fa-angle-right text-vmv" aria-hidden="true"></i> Copie d’assurance du bateau,
<br><i class="fa fa-angle-right text-vmv" aria-hidden="true"></i> Attestation de la capitainerie du port, d’une location permanente ou d’une propriété d’emplacement,
<br><i class="fa fa-angle-right text-vmv" aria-hidden="true"></i> Copie du titre de propriété ou du contrat de location du bateau en cours de validité.</p>
                  <hr>
                  <h2 class="text-vmv">Si vous habitez dans un camping ou dans un hôtel</h2>
                  <p>Fournir une copie de facture de l’hôtel ou du camping à votre nom.</p>
                  <hr>
                  <h2 class="text-vmv">Si vous êtes sans domicile fixe ou sans communes de rattachement</h2>
                  <p>Fournir une attestation de domicile à demander en mairie.</p>
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
    <script type="text/javascript" src="accordion.js"></script>
    <script type="text/javascript" src="situation.js"></script>
    <script type="text/javascript" src="doc.js"></script>
  </body>
</html>
