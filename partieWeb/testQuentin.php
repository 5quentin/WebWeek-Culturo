<?php
include "./include/connexionBDD.php";
include "./POO/typeBillets.php";


$BDDCo = new connexionBDD();

$afficher = (array)$BDDCo;
$afficher2  = $afficher['tab_typeBillet'];

echo($afficher2);
print_r($afficher2[0]['prix']);
print_r($afficher2[0]['lib']);

