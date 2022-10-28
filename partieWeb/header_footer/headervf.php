<header>
			<div id="headervide">

			</div>
			<div id="contenaireHeader">
				<div class=tete>
					<div id="contenaireLogo">
						<div class= "hg" >
							<a class="logo" href="index.php"><img src="./images/logonb.png"></a>
							<span id="dates">
								<p >Juil 7-9</p>
								<p>Juil 21-23</p>
							</span>
							
						</div>
					</div>
					

					<div class="menuorange">
						<nav class= "menu">
						<div class="burger"><img src="./images/burger.png"></div>
							<ul>
								<li><a href="indexfr.php#selection">Selections</a></li>
								<li><a href="indexfr.php#onDisplay">A l'affiche</a></li>
								<li><a href="indexfr.php#map">Plan</a></li>
								<li><a href="index.php">Anglais</a></li>
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
			</div>
     		
     	</header>

		<img class="top" src="./images/top.png">

