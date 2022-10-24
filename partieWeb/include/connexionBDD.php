<?php
// Connexion PDO
//Connexion à la page fonction qui contien la function session 
//session_start();
//include('./fonction.php');
//conserverIndentifiant();

$connection = new PDO('mysql:host=localhost;port=3306;dbname=Culturo','root','');
$requete='SELECT * FROM ville';  
$resultats=$connection->query($requete);
$tab_villes=$resultats->fetchAll();
$resultats->closeCursor();

?>