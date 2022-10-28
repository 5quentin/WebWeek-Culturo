<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Création de compte</title>
  <link rel="icon" type="image/png" href="./favicon/favicon.png" sizes="16x16" data-rh="true">
  <link rel="stylesheet" href="./css/formulaires.css" />
  <link rel="stylesheet" href="./css/header.css" />

</head>

<body>

  <?php include './header_footer/header.php';
    include "./include/connexionBDD.php";

    $file ="./sauv.txt";

    if (file_exists($file)==true){
      $read=file($file);

      if($read[0]!="" && $read[0]!="null"){

        if(isset($_POST["profil"])){
          echo '<script>document.location.href="profile.php"</script>';
        } 

        elseif(isset($_POST["billet"])){
          echo '<script>document.location.href="page_billet.php"</script>';
        }
        
        else{
          echo '<script>document.location.href="index.php"</script>';
        } 
      }
    }

  ?>

  <div class="container">
    <div class="space"></div>
    <form class="signin" method="POST" action="connexion.php" enctype="multipart/form-data"> 
      <img src="./images/logo.png">

      <div class="centre">

        <div class="titre"><h2>Connexion :</h2></div>

        <p>
          <input type="email" name="email" placeholder="Email..." required>
        </p>
            
        <p>
          <input type="password" name="mdp" placeholder="Password..." required>
        </p>

        <?php
          if(isset($_POST["connex"])){

            include "./POO/CreerPorfil.php";
            $BDD = new ConnexionBDD(); 
            $BDD->__construct();
            $BDD->connexion($_POST["email"],$_POST["mdp"]);
            }
        ?>

      </div>

      <div class="boutton">
        <a href="./inscription.php">Créer un compte</a>
        <input type="submit" name="connex" value="Sign in">
      </div>
      
    </form>
  </div>


  <?php include './header_footer/footer.html';?>
</body>