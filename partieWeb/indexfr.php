<?php
include "./include/connexionBDD.php";
include "./POO/CreerPorfil.php";
include "./POO/typeBillets.php";
include_once "./POO/Billets.php";
include "./POO/ville.php";
include "./POO/Chanteur.php";

$BDDCo = new connexionBDD();
?>

<!doctype html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Culturo</title>

	<link rel="stylesheet" href="./css/index.css">
	<link rel="stylesheet" href="./css/header-footer.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
	<script src="https://kit.fontawesome.com/c6b95d0d70.js" crossorigin="anonymous"></script>

	<link rel="icon" type="image/png" href="./favicon/favicon.png" sizes="16x16" data-rh="true">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
	
	<script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js" integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin="" ;></script>
</head>

<body>
	<!-- header -->
	<?php
	include './header_footer/headerfr.php';
	?>

	<div class="container">
		<div class="logo">
		</div>

		<div class="intro">
			<h1 class="titreCULT">CULTURO</h1>
			<h2 class="titreE">L'évènement culturel européen</h2>
			<p>
				Chaque année, une ville Européenne se transforme en réunion culturelle.
				Cette année, du 21 au 23 juillet 2023, venez profiter de la richesse offerte par Le Puy en Velay en FRANCE.
			</p>
            <a class="learn" href="#textesav">En savoir plus</a>
        </div>
	</div>

	<img src="images/tachej1.png" id="tache1" alt="tache">

	<!-- Carte intéractive -->
	<div id="selection" class="GrandContenaireMap">
		<div class="containerMap">
			<div id="GroupeMap">
				<div id="map"></div>
			</div>

			<div class="contentcontainer">
				<div class="selection">
					<div id="select">
						<p class="titre2">SELECTIONS CULTURO</p>
					</div>
					<div id="ville">
						<p class="titre2" id="nomVille">PUY EN VELAY</p>
					</div>
				</div>

				<div class="imgcarte" id="imgVille">
					<img src="images/images villes/ville_1.jpg" alt="imgville">
				</div>

				<div class="textville" id="txtVille">
					<p>Le Puy-en-Velay est une commune française, elle est la préfecture du département
						de la Haute-Loire en région Auvergne-Rhône-Alpes. Le Puy-en-Velay comptait 19 215 habitants en 2019
						et ses habitants sont appelés Ponots.</p>
				</div>
			</div>
		</div>
		<div class="bouton">
			<a href="./page_billetfr.php">TICKETS <br><span>SELECTION CULTURO</span> </a>
		</div>
	</div>

	<div id="onDisplay" class="contenairePuy">
		<div class="affiche">
			<div class="BlocCarousel">
				<div class="swiper">
					<div class="swiper-wrapper">
						<?php include "caroussel.php"; ?>
					</div>

					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>
			</div>
			<script src="./js/jsCaroussel.js"></script>

			<div class="description">
				<div class="titre">
					<h1>À l'affiche</h1>
				</div>
				<div class="datesfest">
					<div>
						<h3 id="white2023">2023</h3>
						<h3 class="stars">Harry Styles <span>21 Juillet</span></h3>
						<h3 class="stars">DJ Snake <span>22 Juillet</span></h3>
						<h3 class="stars">David Guetta <span>23 Juillet</span></h3>
						<h3 class="stars">Team G-corp <span>21-22-23 Juillet</span></h3>
					</div>
				</div>
			</div>
		</div>
	</div>

	<img id="tache2" src="images/tacheb1.png">

	<img id="tache3" src="images/tachej2.png">

	<div id="mapp" class="programme">
		<div id="ContenaireProg">
			<div class="gauche">
				<div class="titrep">
					<h1>Programme Culturo</h1>
				</div>
				<div class="lieu">
					<div class="theme">
						<div>
							<p>Art et Sculpture</p>
						</div>
						<div>
							<p>Music et dance</p>
						</div>
						<div>
							<p>Comedie</p>
						</div>
						<div>
							<p>Jeux Video</p>
						</div>
						<div>
							<p>Gastronomie</p>
						</div>
					</div>
					<div class="zone">
						<p>Vieille-Ville</p>
						<p>Stade Massot</p>
						<p>Cinéma / Théâtre</p>
						<p>Salle Jeanne d'Arc</p>
						<p>Jardin Henry-Vinay</p>
					</div>
				</div>
			</div>
			<div class="carteGoogle">
				<iframe id="cartep" src="https://www.google.com/maps/d/u/0/embed?mid=1FTtEFXZnueJnDdwJH6z0oobDlxwj7RE&ehbc=2E312F" width="400" height="550"></iframe>
			</div>
		</div>
	</div>

	<div class="buy">
		<div class="textSavoir">
			<p id="textesav">
				Dans ce tout nouveau concept d'événement, la ville du Puy-en-Velay se transforme en réunion culturelle où des dizaines
				d'artiste européens seront présent. Chant, danse, peinture, sculpture, comédie, jeux vidéos ou encore gastronomie européenne,
				vous trouverez forcément votre bonheur dans une ville transformé en festival. Un grand concours est organisé : le pays gagnant
				sera celui qui aura le plus convaincu le publique, il obtiendra alors le droit d'organiser l'événement CULTURO de l'année suivante. </br> </br>
				<span>Petits et grands sont donc invités à venir partager un moment inoubliable entre amis européens !</span>
			</p>
		</div>

		<div class="bouton">
			<a class="rose" href='page_billetfr.php'>Tickets </br> <span>CULTURO</span></a>
		</div>
	</div>

	<script src="./js/webWeek.js"></script>
	<script>
		function ecrirLog() {
			<?php
			$NomVille = json_encode($BDDCo);
			echo "var TabVille = " . $NomVille . ";\n";
			?>
			TabVilleSelect = TabVille['tab_ville'];

			for (let i = 0; i < TabVilleSelect.length; i++) {
				console.log(TabVilleSelect.length);
				if (TabVilleSelect[i]['numVille'] == valI) {
					NumVilleSelect = TabVilleSelect[i + 1];
				}
			}
			return NumVilleSelect;
		}
	</script>

	<?php include './header_footer/footerfr.html'; ?>
</body>

</html>