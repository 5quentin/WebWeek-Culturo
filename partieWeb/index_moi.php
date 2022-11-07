<?php
include "./include/connexionBDD.php";
include "./POO/CreerPorfil.php";
include "./POO/typeBillets.php";
include "./POO/Billets.php";
include "./POO/ville.php";
include "./POO/Chanteur.php";

$BDDCo = new connexionBDD();
$TypeBillets = new TypeBillets((array)$BDDCo);
$Ville1 = new Ville();
$billet = new Billets('Beyler','Olivier', 2,'true', (array)$BDDCo);
$Chant1 = new Chanteur();
$Eleve1 = new Profil('Astier', 'Quentin', 'beyler.wilson@gmail.com', '0904889033', 'ZZZ', 'Z');

// $billet->EnsembleBillets((array)$billet, 'Le Puy-En-Velay VIP');
// $billet->EnregistrementBDD_Billet((array)$billet);
// $billet->AffichageBillet((array)$BDDCo);



// $billet->AnnulationBillet(4,3);
// //$TypeBillets->CreerTypeBillet(80,'Paris','Visite de la ville de Paris' ,'23/04/20');
// $TypeBillets->SuprimerTypeBillet(4);
// echo "<br>";
// echo "<br>";
// echo "<br>";

$Chant1->AjouterArtiste('Jack','./imag.png',(array)$BDDCo);
$Chant1->SuprimerChanteur('Amir');

// echo "<br>";
// echo "<br>";
// echo "<br>";

// $Ville1->AjouterVille("Le Puy-en-Velay","France","","Le Puy-en-Velay, anciennement Le Puy, est une commune française, préfecture du département de la Haute-Loire en région Auvergne-Rhône-Alpes. Le Puy-en-Velay comptait 19 215 habitants en 2019 et ses habitants sont appelés Ponots.",(array)$BDDCo,1);
// $Ville1->AjouterVille("Ségovie","Espagne","","Garde est une ville située dans le centre de la région de Beira, entre le Plateau Guarda-Sabugal et la Serra da Estrela. Il est la plus haute ville du Portugal, étant situé à 1056 mètres. Guard est une distance d'environ 219 km de Porto et 356 kilomètres de la ville de Lisbonne. Le District de Guarda est bordé au nord par le district de Bragança, au sud avec le district de Castelo Branco et l'ouest avec les districts de Coimbra et Viseu.",(array)$BDDCo,3);
// $Ville1->AjouterVille("Guarda","Portugal","","Le Puy-en-Velay, anciennement Le Puy, est une commune française, préfecture du département de la Haute-Loire en région Auvergne-Rhône-Alpes. Le Puy-en-Velay comptait 19 215 habitants en 2019 et ses habitants sont appelés Ponots.",(array)$BDDCo,3);
// $Ville1->AjouterVille("Sienne","Italie","","Sienne, ville située en Toscane, au centre de l'Italie, se caractérise par ses bâtiments médiévaux en briques. Sur la Piazza del Campo, la place centrale en forme de coquillage, se dressent le Palazzo Pubblico, l'hôtel de ville gothique, et la Torre del Mangia, tour étroite du XIVe siècle offrant une vue panoramique depuis son sommet en travertin blanc.",(array)$BDDCo,4);
// $Ville1->AjouterVille("Gummersebach","Allemange","","Gummersbach est une ville allemande du Haut-Berg, au sud-est du land de Rhénanie-du-Nord-Westphalie. Elle est située à 50 km à l'Est de Cologne. Dans le passé, la ville était surnommée « la ville des tilleuls », la rue principale étant bordée de ces arbres.",(array)$BDDCo,5);
// $Ville1->AjouterVille("Deurne","Pays-Bas","","Deurne est une commune et un village des Pays-Bas de la province du Brabant-Septentrional. ",(array)$BDDCo,6);
// $Ville1->AjouterVille("Halmstad","Suède","","Halmstad est une ville de l'ouest de la Suède, chef-lieu de la commune du même nom. Elle se situe dans le comté de Halland, sur les rives du Cattégat à l'embouchure de Nissan, entre les villes de Falkenberg, au nord, et de Laholm, au sud. En 2005, on y dénombrait environ 55 000 habitants.",(array)$BDDCo,7);
// $Ville1->AjouterVille("Vresse-sur-Semois","Belgique","","Vresse-sur-Semois est une commune francophone de Belgique située en Wallonie dans la province de Namur, ainsi qu’une localité où siège son administration. Sa langue traditionnelle était le champenois.",(array)$BDDCo,8);
// $Ville1->AjouterVille("Leoben","Autriche","","Leoben est une ville de Styrie dans le centre de l'Autriche sur la rivière Mur. C'est la 19ᵉ ville la plus peuplée de son pays. Leoben est un centre industriel local et abrite l'université de Leoben, spécialisée dans l'exploitation de mines.",(array)$BDDCo,9);
// $Ville1->AjouterVille("Zakopane","Pologne","","Zakopane est une station de ski du sud de la Pologne, aux pieds des Tatras. Elle constitue un point de départ apprécié pour les sports d'hiver, ainsi que pour l'alpinisme et la randonnée en été. Les stations de ski voisines, Kasprowy Wierch et Gubałówka, sont accessibles via un téléphérique et un funiculaire, et offrent une vue panoramique sur la montagne. La ville est également connue pour ses chalets en bois du début du XXe siècle, symboles de l'architecture de Zakopane.",(array)$BDDCo,10);
// $Ville1->AjouterVille("Kilkenny","Irlande","","Kilkenny est une ville de 26 512 habitants de la République d'Irlande sur la Nore située à 150 km au sud-ouest de Dublin dans la province du Leinster. Kilkenny est le chef-lieu du comté du même nom.",(array)$BDDCo,11);
// $Ville1->AjouterVille("Kolding","Danemark","","Kolding est une ville portuaire du Danemark dans la région du Danemark-du-Sud. La ville compte 57 540 habitants au 1ᵉʳ janvier 2012.",(array)$BDDCo,12);
// $Ville1->AjouterVille("Sisak","Croatie","","Sisak est une ville et une municipalité située en Croatie centrale à la confluence des rivières Kupa, Save et Odra. Elle est le chef-lieu du Comitat de Sisak-Moslavina.",(array)$BDDCo,13);
// $Ville1->AjouterVille("Kutná Hora","République tchèque","","Kutná Hora est une ville de la région de Bohême centrale, en Tchéquie, et le chef-lieu du district de Kutná Hora. Sa population s'élevait à 20 450 habitants en 2022.",(array)$BDDCo,14);
// //$Ville1->SuprimerVille('Barcelone');

// $Eleve1->setIdentifiant('0');
// $Eleve1->EnregistrementBDD((array)$Eleve1);

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
  <link rel="stylesheet" href="./css/index.css" />
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

  <script  src="./js/webWeek.js" ></script>

  <script>
    function ecrirLog(){
      <?php
    $NomVille = json_encode($BDDCo);
    echo "var TabVille = " . $NomVille . ";\n";
    ?>
    TabVilleSelect=TabVille['tab_ville'];
    
    for(let i=1; i<TabVilleSelect.length;i++){
      console.log(TabVilleSelect.length);
      if(TabVilleSelect[i]['numVille']==valI){
        NumVilleSelect =TabVilleSelect[i]; 
      }
    }
    return NumVilleSelect;
    }

  </script>
</body>

</html>