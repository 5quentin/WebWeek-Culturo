		<header>
     		<div class=tete>
		     	<div class= "hg" >
		     		<a class="logo" href="acceuil.html"><img src="./images/logonb.png"></a>
		     		<p id="dates">Juil 7-9 <br> Juil 21-23</p>
	     		</div>

	     		<div class="menuorange">
		     		<nav class= "menu">
						<div class="burger"><img src="./images/burger.png"></div>
		     			<ul>
		     				<li><a href="#selection">Selections</a></li>
		     				<li><a href="#onDisplay">On display</a></li>
		     				<li><a href="map">Map</a></li>
		     				<li><a>Langue</a></li>
							 <?php
								$file ="./sauv.txt";
								if (file_exists($file)!=false){
									$file ="./sauv.txt";
									$read=file($file);
									if($read[0]==5){
										echo '<li><a href="admin.php">Admin</a></li>';
									}
								}
							?>
		     				<li id="profil"><form method="post" action="./connexion.php"><input name="profil" type="submit" value="Profile"></input></form></li>
		     				<li id="billeterie"><form method="post" action="./connexion.php"><input name="billet" type="submit" value="Ticketing"></input></form></li>
		     			</ul>
		     		</nav>
	     		</div>
     		</div>
     	</header>

		<img class="top" src="./images/top.png">

