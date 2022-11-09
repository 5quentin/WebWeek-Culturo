<?php
include "./include/connexionBDD.php";
include "./POO/CreerPorfil.php";
include "./POO/typeBillets.php";
include_once "./POO/Billets.php";
include "./POO/ville.php";
include "./POO/Chanteur.php";

$BDDCo = new connexionBDD();
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Culturo</title>
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/c6b95d0d70.js" crossorigin="anonymous"></script>

    <link rel="icon" type="image/png" href="./favicon/favicon.png" sizes="16x16" data-rh="true">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <link rel="stylesheet" href="./css/cssCarousel.css">
    <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js" integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin="" ;></script>
    <link rel="stylesheet" href="css/indexCorect.css">

</head>

<body>
    <!-- header -->
    <?php
    include './header_footer/header.php';
    ?>

    <div class="container">
        <div class="logo">
        </div>

        <div class="intro">
            <h1 class="titreCULT">CULTURO</h1>
            <h2 class="titreE">The European cultural event</h2>
            <p>
                Every year, an European city turns into a cultural meeting.
                This year, from July 21 to 23, come and enjoy the richness offered by Le Puy en Velay in FRANCE.
            </p>
            <h4 class="learn">Learn more</h4>
        </div>
    </div>

    <img src="images/tachej1.png" id="tache1" alt="tache">

    <!-- Carte intéractive -->
    <div id="selection" class="GrandContenaireMap">
        <div class="containerMap">
            <div id="GroupeMap">
                <div id="map"></div>
            </div>

            <div class="contentcontainer">
                <div class="selection">
                    <div id="select">
                        <p class="titre2"> CULTURO SELECTIONS</p>
                    </div>
                    <div id="ville">
                        <p class="titre2" id="nomVille">PUY EN VELAY</p>
                    </div>
                </div>

                <div class="imgcarte" id="imgVille">
                    <img src="images/images villes/ville_1.jpg" alt="imgville">
                </div>

                <div class="textville" id="txtVille">
                    <p>Le Puy-en-Velay is a French commune, it is the prefecture of the Haute-Loire department in the
                        Auvergne-Rhône-Alpes region. Le Puy-en-Velay had 19,215 inhabitants in 2019 and its inhabitants are
                        called Ponots</p>
                </div>
            </div>
        </div>
        <div class="bouton">
            <a href="./page_billet.php">TICKETS <br><span>CULTURO SELECTION</span> </a>
        </div>
    </div>

    <div id="onDisplay" class="contenairePuy">
        <div class="affiche">
            <div class="BlocCarousel">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <?php include "caroussel.php"; ?>
                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <script src="./js/jsCaroussel.js"></script>

            <div class="description">
                <div class="titre">
                    <h1>On display</h1>
                </div>
                <div class="datesfest">
                    <div>
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

    <img id="tache2" src="images/tacheb1.png">

    <img id="tache3" src="images/tachej2.png">

    <div id="mapp" class="programme">
        <div id="ContenaireProg">
            <div class="gauche">
                <div class="titrep">
                    <h1>Culturo Program</h1>
                </div>
                <div class="lieu">
                    <div class="theme">
                        <div>
                            <p>Art and Sculpture</p>
                        </div>
                        <div>
                            <p>Music et dance</p>
                        </div>
                        <div>
                            <p>Comedy</p>
                        </div>
                        <div>
                            <p>Video Games</p>
                        </div>
                        <div>
                            <p>Gastronomy</p>
                        </div>
                    </div>
                    <div class="zone">
                        <p>Old-city</p>
                        <p>Massot Stadium</p>
                        <p>Cinema / Theatre</p>
                        <p>Jeanne d'Arc Hall</p>
                        <p>Henry-Vinay Park</p>
                    </div>
                </div>
            </div>
            <div class="carteGoogle">
                <iframe id="cartep" src="https://www.google.com/maps/d/u/0/embed?mid=1FTtEFXZnueJnDdwJH6z0oobDlxwj7RE&ehbc=2E312F" width="400" height="550"></iframe>
            </div>
        </div>
    </div>

    <div class="buy">
        <div class="textSavoir">
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
            <a class="rose" href='page_billet.php'>Tickets </br> <span>CULTURO</span></a>
        </div>
    </div>

    <script src="./js/webWeek.js"></script>
    <script>
        function ecrirLog() {
            <?php
            $NomVille = json_encode($BDDCo);
            echo "var TabVille = " . $NomVille . ";\n";
            ?>
            TabVilleSelect = TabVille['tab_ville'];

            for (let i = 0; i < TabVilleSelect.length; i++) {
                console.log(TabVilleSelect.length);
                if (TabVilleSelect[i]['numVille'] == valI) {
                    NumVilleSelect = TabVilleSelect[i + 1];
                }
            }
            return NumVilleSelect;
        }
    </script>

    <?php include './header_footer/footer.html'; ?>
</body>

</html>