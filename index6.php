<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, minimal-ui">

    <link rel="canonical" href="https://www.icicartegrise.fr/" />

    <title>Ici Carte Grise</title>
    <meta name="description" content="La société Icicartegrise a pour mission de faciliter l'accès aux démarches de carte grise à ses clients." />
    <meta name="keywords" content="Icicartegrise, carte grise">
    <meta name="twitter:description" content="" />
    <meta property="og:description" content="La société Icicartegrise a pour mission de faciliter l'accès aux démarches de carte grise à ses clients." />
    <meta property="og:title" content="Icicartegrise" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.icicartegrise.fr/" />
    <meta property="og:site_name" content="Ici Carte Grise" />
    <meta property="og:locale" content="fr_FR" />
    <meta name="author" content="Jeremy Boiselet" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/icicartegrise.css" />
    <link rel="stylesheet" href="css/btn-footer.css" />
    <style>
      @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300,800);

      .inputBox {
        background: rgba(128, 128, 128, 0.5);
        text-align: center;
        height: auto;
        width: auto;
        margin-top: 100px;
      }

      .inputBox span {
        position: relative;
        display: inline-block;
        margin: 10px 10px;
      }


      .gate {
        display: inline-block;
        width: 215px;
        padding: 10px 0 10px 15px;
        font-family: "Open Sans", sans;
        font-weight: 400;
        color: #377D6A;
        background: #efefef;
        border: 0;
        border-radius: 3px;
        outline: 0;
        text-indent: 65px;
        transition: all .3s ease-in-out;
      }
      .gate::-webkit-input-placeholder {
        color: #efefef;
        text-indent: 0;
        font-weight: 300;
      }
      .gate + label {
        display: inline-block;
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 15px;
        text-shadow: 0 1px 0 rgba(19, 74, 70, 0.4);
        background: #ea076b;
        color: white;
        transition: all .4s ease-in-out;
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px;
        transform-origin: left bottom;
        z-index: 99;
      }
      .gate + label:before, .gate + label:after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-radius: 3px;
        background: #ea076b;
        color: white;
        transform-origin: left bottom;
        transition: all .4s ease-in-out;
        pointer-events: none;
        z-index: -1;
      }
      .gate + label:before {
        background: rgba(3, 36, 41, 0.2);
        color: white;
        z-index: -2;
        right: 20%;
      }

      span:nth-child(2) .gate {
        text-indent: 85px;
      }

      span:nth-child(2) .gate:focus,
      span:nth-child(2) .gate:active {
        text-indent: 0;
      }

      .gate:focus,
      .gate:active {
        color: #377D6A;
        text-indent: 0;
        background: #fff;
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
      }
      .gate:focus::-webkit-input-placeholder,
      .gate:active::-webkit-input-placeholder {
        color: #aaa;
      }
      .gate:focus + label,
      .gate:active + label {
        transform: rotate(-66deg);
        border-radius: 3px;
      }
      .gate:focus + label:before,
      .gate:active + label:before {
        transform: rotate(10deg);
      }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  </head>

  <body>
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top">
      <button class="navbar-toggler navbar-toggler-right nav-hamburger" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container">
        <a class="navbar-brand" href="/"><img id="logo" src="images/logo2.png" style="max-width: 300px;" alt="Logo" /></a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="stroke ml-auto">
            <li>
              <a href="/concept">Concept</a>
            </li>
            <li>
              <a href="/contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="header-box">
      <div class="container">
        <div class="row">
          <div class="col-md-3 offset-md-8 col-xs-4 offset-xs-6">
            <p class="tel">
              <i class="fa fa-phone" aria-hidden="true"></i> 0899 252 272 (0.30€ / min)
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <img class="image-responsive" alt="logoBox" src="/images/icicartegrise_logo+baseline_vecto+personnage_rvb.png" />
          </div>
          <div class="col-md-8 col-sm-8 col-xs-12">
            <?php
              if(isset($_POST['erreur']))
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      '.$_POST['erreur'].'
                    </div>';
            ?>
            <div class="inputBox">
              <form id="pas-de-box" action="php/verificationBox.php" method="post">
                <span>
                  <input class="gate" id="box" type="text" name="box" placeholder="Saississez votre N° de Box" onkeyup='this.value=this.value.toUpperCase()' /><label for="box">N° Box <i data-toggle="tooltip" data-placement="right" data-html="true" title="<img src='/images/box.png' alt='box'>">?</i></label>
                </span>
                <button id="submit" class="btn-vmv disabled" disabled type="submit">OK</button>
                <a class="btn-vmv mb-2 float-right" style="font-size: 14px;" href="/lieu-de-vente">Je n'ai pas de box</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer>
      <?php require_once('templates/top-footer.html'); ?>
      <?php require_once('templates/bottom-footer.html'); ?>
    </footer>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/tooltip.js"></script>
    <script type="text/javascript" src="js/accueil.js"></script>
  </body>
</html>
