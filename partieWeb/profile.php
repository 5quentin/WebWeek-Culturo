<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Culturo</title>
  <link rel="stylesheet" href="./css/index.css" />
  <link rel="stylesheet" href="./css/header.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" type="text/css" href="../css/footer.css" />
  <script src="script.js"></script>
</head>


<body>
  <?php include './header_footer/header.html';?>

  <div class="sideContainer">
    <div class="sidebar">
      <ul>
        <li><a href="">Profile</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">Reserved tickets</a></li>
        <input type="button" value="desconnected">
      </ul>
    </div>
  </div> 



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

      </div>

      <div class="boutton">
        <a href="./inscription.php">Create an account</a>
        <input type="submit" name="connex" value="Sign in">
      </div>
      
    </form>
  </div>

  <?php include './header_footer/footer.html';?>
</body>

