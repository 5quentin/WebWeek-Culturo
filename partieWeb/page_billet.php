<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Billet Culturo</title>

  <link rel="stylesheet" href="./css/formulaires.css" />
  <link rel="stylesheet" href="./css/header.css" />
  <link rel="stylesheet" type="text/css" href="./css/footer.css" />

</head>

<body>

  <?php include './header_footer/header.php';?>

  <div class="desc">
    <h1 id="prems">There are several formulas,<br> here is the list of them:</h1>
    
    <h1 id="stand">Standard Pass</h1>
    <p>75€ : access to all areas except concert</p>

    <h1 id="vip">VIP Pass ★</h1>
    <p>100€ : all areas except concert + 1 meal + skip the line + front seats</p>

    <h1 id="concert">+10€ for concert access</h1>

    <h1 id="europe">Discover and vote for the works of your country <span id="bleu">!</span><br>Events in collaboration with Culturo <br>will be fixed at <span id="orange">50€</span></h1>

    <h1>Reservation part :</h1>

  </div>

  <div class="container_billet">
    <form class="billet" method="POST" action="page_billet.php" enctype="multipart/form-data"> 
      <img src="./images/logo.png">

      <div class="centre">

        <div class="titre"><h2>What formula do you want ? :</h2></div>

        <p>
          <select id="billet" name="type_billet">
            <?php
            include "./include/connexionBDD.php";
            include "./POO/typeBillets.php";
            
            $BDDCo = new connexionBDD();

            $afficher = (array)$BDDCo;
            $afficher2  = $afficher['tab_typeBillet'];

            for ($i=0 ; $i<count($afficher2) ; $i++){
              echo("<option value='".$afficher2[$i]['lib']."'>  ".$afficher2[$i]['lib']." (".$afficher2[$i]['prix']."€)</option>");
            }
            ?>
          </select>
        </p>
            
        <p class="half">
          <input type="text" name="nom" placeholder="Name..." required>
          <input type="text" name="pnom" placeholder="First Name..." required>
        </p>

        <div>
          <input type="checkbox" id="checkConcert" name="concert" value="Oui">
          <label for="concert">+10€ for concert access</label>
        </div>

        <?php

          include_once('./fonction.php');
          include "./POO/Billets.php";
              
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
        
        if(isset($_POST["reserve"])){
          include "./POO/Billets.php";

          if(isset($_POST["concert"])!=null){
            $select=$_POST["concert"];
          }
          else{
            $select="Non";
          }

          $billet = new Billets($_POST["nom"],$_POST["pnom"],$idCo,$select, (array)$BDDCo);
          $billet->EnsembleBillets((array)$billet, $_POST["type_billet"]);
          $billet->EnregistrementBDD_Billet((array)$billet);
        }
        ?>
      </div>
      
      <div class="boutton">
        <input type="submit" name="reserve" value="Reserve">
      </div>
      
    </form>
  </div>
    <?php include './header_footer/footer.html';?>

    
    <script type="text/javascript" src="./js/scriptVilles.js"></script>
</body>