<?php
include_once "./include/connexionBDD.php";
include_once "./POO/Chanteur.php";
$BDDCo = new connexionBDD();

$requete = "SELECT img FROM `chanteurs`;";
$resultats = $BDDCo->connection->query($requete);
$tab_Slide = $resultats->fetchAll();
$nb_Slide = count($tab_Slide);


for ($i = 0; $i < $nb_Slide; $i++) {
    echo "<img  src='" . $tab_Slide[$i]['img'] . " (" . ($i + 1) . ").png' alt='' class='swiper-slide' >";
}

?>