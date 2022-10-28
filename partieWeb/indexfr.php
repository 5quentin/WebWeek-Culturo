<?php
  include "./include/connexionBDD.php";
  include "./POO/CreerPorfil.php";
  include "./POO/typeBillets.php";
  include "./POO/Billets.php";
  include "./POO/ville.php";
  include "./POO/Chanteur.php";
  
  $BDDCo = new connexionBDD();
?>

<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Culturo</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="./css/header.css" />
  <link rel="stylesheet" type="text/css" href="./css/footer.css" />
  <script src="https://kit.fontawesome.com/c6b95d0d70.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/png" href="./favicon/favicon.png" sizes="16x16" data-rh="true">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
  <link rel="stylesheet" href="./css/cssCarousel.css">
  <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js" integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin="" ;></script>

</head>

<body>

  <?php include './header_footer/headervf.php'; ?>
  <!-- header -->
  <div class="main">

    <div class="container">

      <div class="logo">
        <img class="imglogo" src="images/logo.png" alt="logo">
      </div>

      <div class="intro">
        <div class="leint">
          <h1 class="titreCULT">CULTURO</h1>
          <h2 class="titreE">L'évènement culturel européen</h2>
          <p>
          Chaque année, une ville Européenne se transforme en réunion culturelle.
            Cette année, du 21 au 23 juillet 2023, venez profiter de la richesse offerte par Le Puy en Velay en FRANCE.
          </p>
          <h4 class="learn">En savoir plus</h4>
        </div>
      </div>
      <div classe="tacheorange">
        <img src="images/tachej1.png" id="tache1" alt="tache">
      </div>
    </div>



    <!-- Carte intéractive -->


    <div id="selection" class="GrandContenaireMap">
      <div class="containerMap">

        <div id="GroupeMap">
          <div id="map">
          </div>
        </div>

        <div class="contentcontainer">
          <div class="selection">
            <div id="select">
              <p class="titre2">SELECTIONS CULTURO </p>
            </div>
            
            <div id="ville">
              <p class="titre2" id="nomVille">PUY EN VELAY</p>
            </div>
          </div>

          <div class="imgcarte" id="imgVille">
            <img src="images/images villes/ville_1.jpg" alt="imgville">
          </div>

          <div class="textville" id="txtVille">
            <p>Le Puy-en-Velay est une commune française, elle est la préfecture du département 
                        de la Haute-Loire en région Auvergne-Rhône-Alpes. Le Puy-en-Velay comptait 19 215 habitants en 2019 
                        et ses habitants sont appelés Ponots.</p>
          </div>
        </div>
        
      </div>

      <div class="bouton2">
        <div class="ticket">
          <a class="rose" href="./page_billet.php">TICKETS<br><span>SELECTION CULTURO</span> </a>
        </div>
      </div>

    </div>

    <!-- Map du Puy-en-Velay -->
     <div id="onDisplay" class="contenairePuy">
        <div class="affiche">
          <div class="carousel">
            <script src="./js/jsCaroussel.js"></script>
            <?php include "caroussel.php";?>
          </div>
  
          <div class="description">
            <div class="titre">A l'affiche</div>
            <div class="datesfest">
              <h3 id="white2023">2023</h3>
              <h3 class="stars">Harry Styles <span> 21 Juillet</span></h3>
              <h3 class="stars">DJ Snake <span>  22 Juillet</span></h3>
              <h3 class="stars">David Guetta <span>  23 Juillet</span></h3>
              <h3 class="stars">Team G-corp <span>  21-22-23Juillet </span></h3>
            </div>
          </div>
  
      </div>
  
  
  
     
    </div>
     <div class="tachej">
        <img src="images/tachej2.png">
      </div>
  
  
    <div id="mapp" class="contenairePuy">
      <div id="ContenaireProg">
        <div class="programme">
          <div class="titrep">Programme Culturo </div>
          <div class="lieu">
            <div class="theme">
              <p class="art">Art and Sculpture</p>
              <p class="art">Musique et danse</p>
              <p class="art">Comedie</p>
              <p class="art">Jeux Video</p>
              <p class="art">Gastronomie</p>
            </div>
    
            <div class="zone">
              <p class="znom">Vieille-Ville</p>
              <p class="znom">Stade Massot</p>
              <p class="znom">Cinéma / Théâtre</p>
              <p class="znom"> Salle Jeanne d'Arc</p>
              <p class="znom"> Jardin Henry-Vinay</p>
            </div>

          </div>
        </div>
        <div>
          <iframe id="cartep"
            src="https://www.google.com/maps/d/u/0/embed?mid=1FTtEFXZnueJnDdwJH6z0oobDlxwj7RE&ehbc=2E312F"
            width="400" height="550"></iframe>
        </div>
      </div>   
    </div>

    <div class="Buy">
      <div class="TextSavoir">
        <p id="textesav">
            Dans ce tout nouveau concept d'événement, la ville du Puy-en-Velay se transforme en réunion culturelle où des dizaines 
            d'artiste européens seront présent. Chant, danse, peinture, sculpture, comédie, jeux vidéos ou encore gastronomie européenne, 
            vous trouverez forcément votre bonheur dans une ville transformé en festival. Un grand concours est organisé : le pays gagnant 
            sera celui qui aura le plus convaincu le publique, il obtiendra alors le droit d'organiser l'événement CULTURO de l'année suivante.  </br> </br>
          <span>Petits et grands sont donc invités à venir partager un moment inoubliable entre amis européens !</span>
        </p>
      </div>
      <div class="bouton2">
        <div class="ticket">
          <a class="rose">Tickets</br> <span>CULTURO</span></a>
        </div>
      </div>
    </div>

  </div>

  <?php /*include './header_footer/footer.html';*/ ?>

  <script src="./js/webWeek.js"></script>
  <script>
    function ecrirLog(){
      <?php
    $NomVille = json_encode($BDDCo);
    echo "var TabVille = " . $NomVille . ";\n";
    ?>
    TabVilleSelect=TabVille['tab_ville'];
    
    for(let i=0; i<TabVilleSelect.length;i++){
      console.log(TabVilleSelect.length);
      if(TabVilleSelect[i]['numVille']==valI){
        NumVilleSelect =TabVilleSelect[i+1]; 
      }
    }
    return NumVilleSelect;
    }

  </script>
  </script>
</body>

</html>