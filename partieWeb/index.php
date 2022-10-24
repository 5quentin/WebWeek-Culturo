<?php
include "./include/connexionBDD.php";
include "./POO/CreerPorfil.php";


$BDDCo = new connexionBDD();

$Eleve1 = new Profil('Beyler','Wilson','beyler.wilson@gmail.com','0783442122','2020','2020');
$Eleve1->AchaBillet('BEYLER','Olivier',24,'Le Puy en Velay place VIP','24/06/2002');
$Eleve1->setIdentifiant('0');
$Eleve1->EnregistrementBDD((array)$Eleve1);

?>

<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/c6b95d0d70.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="https://static.files.bbci.co.uk/core/website/assets/static/icons/favicon/news/favicon-16.8a240ceacc28296a851d.png" sizes="16x16" data-rh="true">

    <title>Carte</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js" integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin="" ;></script>
    <link rel="stylesheet" href="./index.css" />
  </head>

  <body>
    <header>
      <div id="header">
        <div id="logo">
          <p>B</p>
          <p>B</p>
          <p>C</p>
          <div class="connexion"><i class="fa-solid fa-user"></i>
            <p>Sign in</p>
          </div>
        </div>

        <nav id="navMenu">
          <ul>
            <li class="menu"><a href="#">Home</a></li>
            <li class="menu"><a href="#">News</a></li>
            <li class="menu"><a href="#">Sport</a></li>
            <li class="menu"><a href="#">Reel</a></li>
            <li class="menu"><a href="#">Worklife</a></li>
            <li class="menu"><a href="#">Travel</a></li>
          </ul>
          <p>...</p>
        </nav>
        <i class="fa-solid fa-magnifying-glass"></i>
      </div>

    </header>

    <div id="main">

      <article id="articleMap">
        <div id="GroupeMap">
          <div id="map" class="mapContainer">
          </div>
          <span class="recouverement">
            <h2>Map of France</h2>
          </span>
        </div>


        <div id="contenairePays">
          <h2>Ville où se déroule l'évènements:</h2>
          <div id="blocNomVille">
          </div>
          <div id="blocImgVille"></div>
          <div id="blocDescripVille"></div>
        </div>
      </article>

    </div>
    <?php $text1 = array(1, 2, 3, 3, 5);
    print_r($Eleve1) ; ?>

    <script src="./Departements.js"></script>
    <script src="./webWeek.js"></script>

    <script>
      <?php
        $NomVille = json_encode($tab_villes);
        echo "var TabVille = " . $NomVille . ";\n";
      ?>
      console.log(TabVille[1]['nom']);
    </script>
  </body>

</html>