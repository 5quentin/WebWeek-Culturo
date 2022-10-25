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

  <?php include './header_footer/header.php';?>

  <div class="container">
    <form class="signin" method="POST" action="inscription.php" enctype="multipart/form-data"> 
      <img src="./images/logo.png">

      <div class="centre">

        <div class="titre"><h2>Create an account :</h2></div>

        <p>
          <input type="text" name="email" placeholder="Email..." required>
        </p>
            
        <p>
          <input type="text" name="mdp" placeholder="Password..." required>
        </p>

      </div>

      <div class="boutton">
        <a href="./inscription.php">Create an account</a>
        <input type="submit" name="connex" value="Sign in">
      </div>
      
    </form>
  </div>

</body>