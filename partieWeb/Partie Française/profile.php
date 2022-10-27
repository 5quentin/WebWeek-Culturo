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
        <div class="space2"></div>
        <li><a href="">Reserved tickets</a></li>
        <div class="space2"></div>
        <input type="button" value="desconnected">
        <div class="space3"></div>
      </ul>
    </div>
  </div> 



  <div class="container">
    <div class="space"></div>
    <form> 

      <div class="centre">

        <div class="titre"><h2>Profile</h2></div>

        <p>
          <input type="text" name="name" placeholder="Jean" required>
        </p>
            
        <p>
          <input type="text" name="firstname" placeholder="Jack" required>
        </p>

        <p>
          <input type="text" name="adresse" placeholder="8 Rue du Cul" required>
        </p>

      </div>

    </form>
  </div>


  <div class="container">
    <div class="space2"></div>
    <form>

      <div class="centre">

        <div class="titre"><h2>Contact</h2></div>

        <p>
          <input type="text" name="Email adress" placeholder="@" required>
        </p>
            
        <p>
          <input type="text" name="Phone number" placeholder="06..." required>
        </p>

      </div>

    </form>
  </div>



  
  <div class="container">
    <div class="space2"></div>
    <form>

      <div class="centre">

        <div class="titre"><h2>Ticketing</h2></div>

        <div class="space"></div>
      </div>

    </form>
  </div>



  <?php include './header_footer/footer.html';?>
</body>

