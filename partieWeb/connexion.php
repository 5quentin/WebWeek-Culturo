<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign in Culturo</title>

  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/header.css" />

</head>

<body>

  <?php include './header_footer/header.html';?>

  <div class="container">
    <div class="space"></div>
    <form class="signin" method="POST" action="connexion.php" enctype="multipart/form-data"> 
      <img src="./images/logo.png">

      <div class="centre">

        <div class="titre"><h2>Log in :</h2></div>

        <p>
          <input type="email" name="email" placeholder="Email..." required>
        </p>
            
        <p>
          <input type="password" name="mdp" placeholder="Password..." required>
        </p>

        <?php
          if(isset($_POST["connex"])){

            include "./include/connexionBDD.php";
            include "./POO/CreerPorfil.php";
            
            $BDD = new ConnexionBDD(); 
            $BDD->__construct();
            $BDD->connexion($_POST["email"],$_POST["mdp"]);

            }
        ?>

      </div>

      <div class="boutton">
        <a href="./inscription.php">Create an account</a>
        <input type="submit" name="connex" value="Sign in">
      </div>
      
    </form>
  </div>


  <?php include './header_footer/footer.html';?>
</body>