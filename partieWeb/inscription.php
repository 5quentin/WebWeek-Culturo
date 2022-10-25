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

  <?php include './header_footer/header.html';?>

  <div class="container">
    <div class="space"></div>
    <form class="signup" method="POST" action="inscription.php"> 
      <img src="./images/logo.png">

      <div class="centre">

        <div class="titre"><h2>Sign up :</h2></div>

        <p class="half">
          <input type="text" name="nom" placeholder="* Name..." required>
          <input type="text" name="pnom" placeholder="* First Name..." required>
        </p>

        <p>
          <input type="email" name="mail" placeholder="* Email..." required>
        </p>

        <p>
          <input type="text" name="tel" placeholder="* Phone..." required>
        </p>

        <p class="half">
          <input type="password" name="mdp" placeholder="* Password..." required>
          <input type="password" name="mdpconf" placeholder="* Confirm..." required>
        </p>

        <?php
          if(isset($_POST["inscr"])){

            if($_POST["mdp"]==$_POST["mdpconf"]){

            include "./include/connexionBDD.php";
            include "./POO/CreerPorfil.php";

            $BDDCo = new connexionBDD();
            $Eleve1 = new Profil($_POST["nom"],$_POST["pnom"],$_POST["mail"],$_POST["tel"],$_POST["mdp"],$_POST["mdpconf"]);
            $Eleve1->setIdentifiant('2');
            $Eleve1->EnregistrementBDD((array)$Eleve1);

            }
            else {
              echo "<h3 id='error'>incorrect password confirmation<h3>";
            }
          }
        ?>
      </div>

      <div class="boutton">
        <a href="./connexion.php">Already have an account? Sign in.</a>
        <input type="submit" name="inscr" value="Sign up">
      </div>
      
    </form>
  </div>

  <?php include './header_footer/footer.html';?>
  
</body>