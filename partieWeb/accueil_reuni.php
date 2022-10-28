<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Culturo</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="./css/header.css" />
  <link rel="stylesheet" href="./css/footer.css" />
  <script src="script.js"></script>
</head>

<body>

<?php include './header_footer/header.html';?>
  <!-- header -->
  <div class="main">

    <div class="container">

      <div class="logo">
        <img class="imglogo" src="images/logo.png" alt="logo">
      </div>

      <div class="intro">
        <div class="leint">
          <h1 class="titreCULT">CULTURO</h1>
          <h2 class="titreE">The European cultural event</h2>
          <p>
            Every year, an European city turns into a cultural meeting.
            This year, from July 21 to 23, come and enjoy the richness offered by Le Puy en Velay in FRANCE.
          </p>
          <h4 class="learn">Learn more</h4>
        </div>
      </div>
      <div classe="tacheorange">
        <img src="images/tachej1.png" id="tache1" alt="tache">
      </div>
    </div>



    <!-- Carte intéractive -->


      <div class="partieMap">
      <div class="containerMap">
              
                <div class="placemap">
                  <img src="https://picsum.photos/500/500" alt="dems">
                </div>


                <div class="contentcontainer">
                  <div class="selection">
                    <p class="titre2" id="select">CULTURO SELECTIONS</p>
                    <div>
                      <p class="titre2" id="ville">PUY EN VELAY</p>
                    </div>
                  </div>

                  <div class="imgcarte">
                    <img src="images/images villes/lepuy.png" alt="imgville">
                  </div>

                  <div class="textville">
                    <p>Le Puy-en-Velay is a French commune, it is the prefecture of the Haute-Loire department in the
                      Auvergne-Rhône-Alpes region. Le Puy-en-Velay had 19,215 inhabitants in 2019 and its inhabitants are
                      called Ponots</p>
                  </div>
                </div>

            
          </div>

          <div class="bouton2">
            <div class="ticket">
              <a class="rose" href="./page_billet.php">TICKETS <br> CULTURO SELECTION</a>
            </div>
          </div>

      </div>
   


    <!-- Carousel A l'affiche -->


    <!-- Map du Puy-en-Velay -->
    <div class="contenairePuy">
      <div>
        <div class="affiche">
          <div class="carousel">
          <?php include './caroussel.php';?>
          <script src="./js/jsCaroussel.js"></script>
          </div>
  
          <div class="description">
            <div class="titre">On display</div>
            <div class="datesfest">
              <h3 id="white2023">2023</h3>
              <h3 class="stars">Harry Styles <span> July 21 </span></h3>
              <h3 class="stars">DJ Snake <span> July 22 </span></h3>
              <h3 class="stars">David Guetta <span> July 23 </span></h3>
              <h3 class="stars">Team G-corp <span> July 21-22-23 </span></h3>
            </div>
          </div>
        </div>
  
      </div>
  
  
  
     
    </div>
     <div class="tachej">
        <img src="images/tachej2.png">
      </div>
  
  
    <div class="contenairePuy">
      <div id="ContenaireProg">
        <div class="programme">
          <div class="titrep"> Culturo Program</div>
          <div class="lieu">
            <div class="theme">
              <p class="art">Art et Sculpture</p>
              <p class="art">Music et dance</p>
              <p class="art">Comedy</p>
              <p class="art">Video Games</p>
              <p class="art">Gastronomy</p>
            </div>
    
            <div class="zone">
              <p class="znom">Old-city</p>
              <p class="znom">Massot Stadium</p>
              <p class="znom">Cinema / Theatre</p>
              <p class="znom"> Jeanne d'Arc Hall</p>
              <p class="znom"> Henry-Vinay Park</p>
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
          In this new event concept, 
          Le Puy-en-Velay move on a cultural meeting where a lot of European artists are going to be. 
          Music, dance, painting, sculpture, comedy, video games or even European gastronomy, you will necessarily find something that interest you in a city 
          transform into a festival . A huge contest is organized : the winner country will be the one who will have convinced the public the most, 
          then it will be allowed to organize the CULTURO event the next year. </br> </br>
          <span>Everybody is invited to share an unforgettable moment amoung european friends !</span>
        </p>
      </div>
      <div class="bouton">
        <div id="tickcult">Tickets </br> <span>CULTURO</span></div>
      </div>
    </div>
    
    

  </div>

  <?php include './header_footer/footer.html';?>

</body>

</html>