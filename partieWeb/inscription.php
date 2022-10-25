<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign up Culturo</title>

  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/header.css" />

</head>

<body>

  <?php include './header_footer/header.php';?>

  <div class="container">
    <form class="signup" method="POST" action="inscription.php" enctype="multipart/form-data"> 
      <img src="./images/logo.png">

      <div class="centre">

        <div class="titre"><h2>Sign up :</h2></div>

        <p class="half">
          <input type="text" name="nom" placeholder="Name..." required>
          <input type="text" name="pnom" placeholder="First Name..." required>
        </p>
            
        <p>
          <input type="text" name="mdp" placeholder="Password..." required>
        </p>

        <p class="half">
          <input type="password" name="Password" placeholder="Password..." required>
          <input type="password" name="Password" placeholder="Confirm..." required>
        </p>

      </div>

      <div class="boutton">
        <a href="./connexion.php">Already have an account? Sign in.</a>
        <input type="submit" name="inscr" value="Sign up">
      </div>
      
    </form>
  </div>


  <?php
    if(isset($_POST["inscr"])){

      include "./include/connexionBDD.php";
      include "./POO/CreerPorfil.php";

      $BDDCo = new connexionBDD();

      $Eleve1 = new Profil('Beyler','Wilson','beyler.wilson@gmail.com','0783442122','2020','2020');
      $Eleve1->AchaBillet('BEYLER','Olivier',24,'Le Puy en Velay place VIP','24/06/2002');
      $Eleve1->setIdentifiant('0');
      $Eleve1->EnregistrementBDD((array)$Eleve1);

    }
  ?>

</body>