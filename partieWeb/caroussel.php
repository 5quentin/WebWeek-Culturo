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
                          echo"<img  src='".$tab_Slide[3]['img']." (4).png' alt='' class='carrousel' id='lastSlide'>";
                          for($i=0;$i<$nb_Slide;$i++){

                                  echo"<img  src='".$tab_Slide[$i]['img']." (".($i+1).").png' alt='' class='carrousel' >";    
                              
                          }
                          echo"<img  src='".$tab_Slide[0]['img']." (1).png' alt='' class='carrousel' id='firstSlide'>";
                          
                      ?>
                  </div>

  </div>
  <script src="./js/jsCaroussel.js"></script>
  <script>
        const carouselSlide = document.querySelector('#cadre');
        const carouselImages = document.querySelectorAll('#cadre img');

        ////////////////////////////
        


        /////////////////
        let counter = 0;
        var size = carouselImages[0].clientWidth;

        carouselSlide.style.transform = 'translateX('+(-size*counter)+'px)';

        //////////////////

        carouselSlide.addEventListener('transitionend',()=>{
            if(carouselImages[counter].id=='lastSlide'){
                carouselSlide.style.transition= "none";
                counter  = 0;
                carouselSlide.style.transform = 'translateX('+(-size*counter)+'px)';
                //alert(counter);
            }
            if(carouselImages[counter].id=='firstSlide'){
                carouselSlide.style.transition= "none";
                counter  = carouselImages.length -counter;
                carouselSlide.style.transform = 'translateX('+(-size*counter)+'px)';
                //alert(counter);
            }
        });  
        const time =3000;
        function SlideAuto(){
            
            const carouselSlide = document.querySelector('#cadre');
            const carouselImages = document.querySelectorAll('#cadre img');
            if(counter< carouselImages.length - 1){
                 carouselSlide.style.transition = "transform 0.4s ease-in-out";
                 counter++;
                carouselSlide.style.transform='translateX('+(-size*counter)+'px)';
            }
            setTimeout("SlideAuto()", time);
            
        }
        window.onload= SlideAuto();
        activationSlideBTN();             
</script>


