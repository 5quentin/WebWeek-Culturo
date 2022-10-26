<div id ="bando">
                <i class="fas fa-arrow-left" id="past"></i>
                <i class="fas fa-arrow-right" id="next"></i>
                
                <div id="cadre">
                    <?php 
                        echo"<img  src='".$tab_Slide[$nb_Slide-1]['link']."' alt='".$tab_Slide[$nb_Slide-1]['alt']."' class='carrousel' id='lastSlide'>";
                        for($i=0;$i<$nb_Slide;$i++){

                                echo"<img  src='".$tab_Slide[$i]['link']."' alt='".$tab_Slide[$i]['alt']."' class='carrousel' >";    
                            
                        }
                        echo"<img  src='".$tab_Slide[0]['link']."' alt='".$tab_Slide[0]['alt']."' class='carrousel' id='firstSlide'>";
                    ?>
                </div>

</div>

<script>
    	window.onload = function() {
		var elements = document.getElementsByClassName('typewrite');
		for (var i=0; i<elements.length; i++) {
			var toRotate = elements[i].getAttribute('data-type');
			var period = elements[i].getAttribute('data-period');
			if (toRotate) {
			  new TxtType(elements[i], JSON.parse(toRotate), period);
			}
		}
	};
</script>