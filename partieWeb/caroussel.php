<?php
include_once "./include/connexionBDD.php";
include_once "./POO/Chanteur.php";
$BDDCo = new connexionBDD();

$requete = "SELECT img FROM `chanteurs`;";
$resultats = $BDDCo->connection->query($requete);
$tab_Slide= $resultats->fetchAll();   
$nb_Slide=count($tab_Slide);           
?>

  <div id ="bando">
                  <i class="fas fa-arrow-left" id="past"></i>
                  <i class="fas fa-arrow-right" id="next"></i>
                  
                  <div id="cadre">
                      <?php
                          echo"<img  src='".$tab_Slide[3]['img']." (4).webp' alt='' class='carrousel' id='lastSlide'>";
                          for($i=0;$i<$nb_Slide;$i++){

                                  echo"<img  src='".$tab_Slide[$i]['img']." (".($i+1).").webp' alt='' class='carrousel' >";    
                              
                          }
                          echo"<img  src='".$tab_Slide[0]['img']." (1).webp' alt='' class='carrousel' id='firstSlide'>";
                          
                      ?>
                  </div>

  </div>
  


