<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Admin Culturo</title>
    <link rel="icon" type="image/png" href="./favicon/favicon.png" sizes="16x16" data-rh="true">
    <link rel="stylesheet" href="./css/header-footer.css" />
    <link rel="stylesheet" href="./css/formulaires.css" />
</head>


<body>
    <?php

    include './header_footer/headerfr.php';

    include "./include/connexionBDD.php";
    include "./POO/ville.php";
    include "./POO/typeBillets.php";
    include "./POO/Chanteur.php";

    $BDDCo = new connexionBDD();
    $guest = new Chanteur();
    $file = "./sauv.txt";

    if (file_exists($file) == true) {
        $read = file($file);

        if ($read[0] != "5") {
            echo '<script>document.location.href="index.php"</script>';
        }
    } else {
        echo '<script>document.location.href="index.php"</script>';
    }
    
    if (isset($_POST['addSing'])) {

        // taille autorisées (min & max -- en octets)
        $file_min_size = 0;
        $file_max_size = 10000000;
        // On vérifie la présence d"un fichier à uploader
        if (($_FILES["image"]["size"] > $file_min_size) && ($_FILES["image"]["size"] < $file_max_size)) :
            // dossier où sera déplacé le fichier; ce dossier doit exister
            $content_dir = './images_stars/';
            $tmp_file = $_FILES["image"]["tmp_name"];
            if (!is_uploaded_file($tmp_file)) {
                echo "Fichier non trouvé";
            }
            // on vérifie l"extension
            $path = $_FILES["image"]["name"];
            $ext = pathinfo($path, PATHINFO_EXTENSION); // on récupère l"extension
            if (!strstr($ext, "jpg") && !strstr($ext, "png") && !strstr($ext, "webp") && !strstr($ext, "jpeg")) {
                echo "EXTENSION " . $ext . " NON AUTORISEE";
            }

            // Si le formulaire est validé, on copie le fichier dans le dossier de destination
            if (empty($errors)) {
                $name_file = md5(uniqid(rand(), true)) . "." . $ext; // on crée un nom unique en conservant l"extension
                if (!move_uploaded_file($tmp_file, $content_dir . $name_file)) {
                    echo "Il y a des erreurs! Impossible de copier le fichier dans le dossier cible";
                }
            }
            // On récupère l"url du fichier envoyé
            $get_the_file = $content_dir . $name_file;

        elseif ($_FILES["upfiles"]["size"] > $file_max_size) :
            echo "le fichier dépasse la limite autorisée";
        else :
            echo "Pas de fichier joint";
        endif;
        ///////////////////////////////
        $guest->AjouterArtiste($_POST['nomSing'], $get_the_file, (array)$BDDCo);
    
    }

    if (isset($_POST['addTicket'])) {
        $billet = new typeBillets((array)$BDDCo);
        $billet->CreerTypeBillet($_POST['prix'], $_POST['nomBillet'], $_POST['descBillet'], $_POST['date']);
    }

    if (isset($_POST['suprVille'])){
        $ville = new Ville();
        $ville->SuprimerVille($_POST['villeSupr']);
    }
    
    if (isset($_POST['suprGuest'])){
        
        $guest->SuprimerChanteur($_POST['guestSupr']);
    }
    ?>

    <div class="container">
        <div class="space"></div>
        <form class="adminSuprVille" method="POST" action="admin.php" enctype="multipart/form-data">
            <img src="./images/logo.png">
            <div class="centre">

                <div class="titre">
                    <h2>Suprimer une ville :</h2>
                </div>
                <p>
                    <select id="villeSupr" name="villeSupr">
                        <?php
                        $ville = new Ville();
                        $ville->SelectionVille((array)$BDDCo);
                        ?>
                    </select>
                </p>
            </div>

            <div class="boutton">
                <input id="Cancel" type="submit" name="suprVille" value="Delete city">
            </div>
        </form>

        <div class="space2"></div>
        <form class="adminType" method="POST" action="admin.php">
            <img src="./images/logo.png">

            <div class="centre">

                <div class="titre">
                    <h2>Nouveau Ticket : </h2>
                </div>

                <p>
                    <input type="text" name="nomBillet" placeholder="Name of the ticket..." required>
                </p>

                <p>
                    <textarea name="descBillet" placeholder="Description of the ticket..."></textarea>
                </p>

                <p class="half">
                    <input type="number" name="prix" placeholder="Price of the ticket..." required>
                    <input type="date" name="date" placeholder="Date of the event..." required>
                </p>


            </div>

            <div class="boutton">
                <input type="submit" name="addTicket" value="Add Ticket">
            </div>

        </form>

        <div class="space2"></div>
        <form class="adminSing" method="POST" action="admin.php" enctype="multipart/form-data">
            <img src="./images/logo.png">

            <div class="centre">

                <div class="titre">
                    <h2>Nouvel Artiste : </h2>
                </div>

                <p>
                    <input type="text" name="nomSing" placeholder="Name or nickame of the artiste.." required>
                </p>

                <input id="file" type="file" name="image">

            </div>

            <div class="boutton">
                <input type="submit" name="addSing" value="Add Sing">
            </div>

        </form>
        
        <form class="adminSuprSing" method="POST" action="admin.php" enctype="multipart/form-data">
            <div class="centre">

                <div class="titre2">
                    <h2>Suprimer un invité :</h2>
                </div>
                <p>
                    <select id="guestSupr" name="guestSupr">
                        <?php
                        $guest->SelectionChanteur((array)$BDDCo);
                        ?>
                    </select>
                </p>
            </div>

            <div class="boutton">
                <input id="Cancel" type="submit" name="suprGuest" value="Delete guest">
            </div>
        </form>
    </div>

    <?php include './header_footer/footerfr.html'; ?>
</body>