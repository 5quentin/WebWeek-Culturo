<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Culturo</title>

  <link rel="stylesheet" href="./css/header.css" />
  <link rel="stylesheet" href="./css/formulaires.css" />
  <link rel="stylesheet" type="text/css" href="./css/footer.css" />
  <script src="script.js"></script>
</head>


<body>
  <?php include './header_footer/header.php';

    include "./include/connexionBDD.php";
    include "./POO/typeBillets.php";
    include "./POO/Billets.php";
  
    if (isset($_POST['disconect'])){
          unlink("./sauv.txt");
    }

    $file ="./sauv.txt";

    if (file_exists($file)!=false){
      $file ="./sauv.txt";
      $read=file($file);

      if($read[0]!="" && $read[0]!="null"){
        $idCo = $read[0];
      }

      else {
        echo "<script>alert('Your not connected')</script>";
        echo '<script>document.location.href="connexion.php"</script>';
      }
    }

    else {
      echo "<script>alert('Your not connected')</script>";
      echo '<script>document.location.href="connexion.php"</script>';
    }

    $BDDCo = new connexionBDD();

    $afficher = (array)$BDDCo;
    $afficherCompte = $afficher['tab_comptes'];

    for ($i=0 ; $i<count($afficherCompte) ; $i++){
      if ($idCo==$afficherCompte[$i]['id']){
        $rowActif=$i;
      }
    }

    $nomActif=$afficherCompte[$rowActif]['nom'];
    $pnomActif=$afficherCompte[$rowActif]['prenom'];
    $mailActif=$afficherCompte[$rowActif]['mail'];
    $telActif=$afficherCompte[$rowActif]['tel'];


    $afficherBillet=$afficher['tab_Billet'];

    $proprioBillet=null;
    for ($y=0 ; $y<count($afficherBillet) ; $y++){
      if ($idCo==$afficherBillet[$y]['id_compte']){
        $proprioBillet=$y-1;
      }
    }

    if($proprioBillet!=null){
      $afficherTypeBillet = $afficher['tab_typeBillet'];

      for ($x=0 ; $x<count($afficherTypeBillet) ; $x++){
        if ($afficherBillet[$proprioBillet]['id_type']==$afficherTypeBillet[$x]['id']){
          $nomBillet=$afficherTypeBillet[$x]['lib'];
        }
      }
    

    $TypeBillets = new TypeBillets((array)$BDDCo);

    $billet = new Billets( $afficherBillet[$proprioBillet]['nom'] ,$afficherBillet[$proprioBillet]['prenom'], 4 , $afficherBillet[$proprioBillet]['concert'],(array)$BDDCo);
    $billet->EnsembleBillets((array)$billet, $nomBillet);

    if (isset($_POST['Cancel'])){
      $billet->AnnulationBillet($idCo,$_POST['billetSupr']);
    }
  }
  ?>

  <div class="container">
    <div class="space"></div>
    <form class="profile" method="POST" action="profile.php"> 
      <img src="./images/logo.png">

      <div class="centre">

        <div class="titre"><h2>Profile :</h2></div>

        <p class="half">
          <input type="text" name="nom" placeholder="<?php echo $nomActif; ?>">
          <input type="text" name="pnom" placeholder="<?php echo $pnomActif; ?>">
        </p>

        <p>
          <input type="email" name="mail" placeholder="<?php echo $mailActif; ?>">
        </p>

        <p>
          <input type="text" name="tel" placeholder="<?php echo $telActif; ?>">
        </p>
        
      </div>

      <div class="boutton">
        <input id="disconect" type="submit" name="disconect" value="Diconect">
      </div>
      
    </form>
  </div>

  <div class="container">
    <div class="space2"></div>

    <form class="profile" method="POST" action="profile.php"> 
      <img src="./images/logo.png">

      <div class="centre">

        <div class="titre"><h2>Tickets</h2></div>

        <?php 
          if ($proprioBillet!=null){
            $billet->AffichageBillet((array)$BDDCo);
          }
        ?>

        <div class="titre2"><h2>Cancel a ticket :</h2></div>
        <p>
          <select id="billetSupr" name="billetSupr">
            <?php
            if ($proprioBillet!=null){
              $billet->SelectionBillet((array)$BDDCo);
            }
            ?>
          </select>
        </p>

      </div>

      <div class="boutton">
        <input id="Cancel" type="submit" name="Cancel" value="Cancel">
      </div>

    </form>
  </div>



  <?php include './header_footer/footer.html';?>
</body>

