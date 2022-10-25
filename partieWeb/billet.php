<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Billet Culturo</title>

  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/header.css" />

</head>

<body>

  <?php include './header_footer/header.html';?>

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
    <form class="billet" method="POST" action="inscription.php" enctype="multipart/form-data"> 
      <img src="./images/logo.png">

      <div class="centre">

        <div class="titre"><h2>What formula do you want ? :</h2></div>

        <p>
          <select id="billet">
            <option>VIP Pass</option>
            <option>Standard Pass</option>
            <option value="euro">Culturo's Selections</option>
          </select>
        </p>

        <p id="ville">
          <select>
            <option>---Choose a city---</option>
            <option>Le Puy en Velay</option>
            <option>La ville Allemande là</option>
            <option>Sienna</option>
          </select>
        </p>
            
        <p>
          <input type="text" name="nom" placeholder="Name of the incumbent..." required>
        </p>
            

        <div>
          <input type="checkbox" id="checkConcert" name="concert" value="concert">
          <label for="concert">+10€ for concert access</label>
        </div>

      </div>
      

      <div class="boutton">
        <p><span id="prix">100</span>€</p>
        <input type="submit" name="connex" value="Reserve">
      </div>
      
    </form>
  </div>
    <?php include './header_footer/footer.html';?>

    
    <script type="text/javascript" src="./js/scriptVilles.js"></script>
</body>