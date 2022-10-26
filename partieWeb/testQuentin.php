<?php
include "./include/connexionBDD.php";
include "./POO/CreerPorfil.php";
include "./POO/typeBillets.php";
include "./POO/Billets.php";

$BDDCo = new connexionBDD();

$TypeBillets = new TypeBillets((array)$BDDCo);

$billet = new Billets('lol','lol', 2, (array)$BDDCo);
$billet->EnsembleBillets((array)$billet, 'Le Puy-En-Velay VIP');
$billet->EnregistrementBDD_Billet((array)$billet);
$billet->AffichageBillet((array)$BDDCo);

?>

