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
          <input type="password" name="Password" placeholder="Conirm..." required>
        </p>

      </div>

      <div class="boutton">
        <a href="./connexion.php">Already have an account? Sign in.</a>
        <input type="submit" name="connex" value="Sign up">
      </div>
      
    </form>
  </div>

</body>