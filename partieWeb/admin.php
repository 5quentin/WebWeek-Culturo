<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Admin Culturo</title>

    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" type="text/css" href="./css/footer.css" />
</head>


<body>
    <?php 
    
    include './header_footer/header.php';
    include "./include/connexionBDD.php";
    include "./POO/ville.php";

    $BDDCo = new connexionBDD();

    
    if (isset($_POST['addCity'])) {

        // taille autorisées (min & max -- en octets)
        $file_min_size = 0;
        $file_max_size = 10000000;
        // On vérifie la présence d"un fichier à uploader
        if (($_FILES["imageVille"]["size"] > $file_min_size) && ($_FILES["imageVille"]["size"] < $file_max_size)) :
        // dossier où sera déplacé le fichier; ce dossier doit exister
        $content_dir = "./images/images villes/";
        $tmp_file = $_FILES["imageVille"]["tmp_name"];
        if( !is_uploaded_file($tmp_file) ){
            echo "Fichier non trouvé";
        }
        // on vérifie l"extension
        $path = $_FILES["imageVille"]["name"];
        $ext = pathinfo($path, PATHINFO_EXTENSION); // on récupère l"extension
        if(!strstr($ext, "jpg")&& !strstr($ext, "png")&& !strstr($ext, "webp")&& !strstr($ext, "jpeg")){
            echo "EXTENSION ".$ext." NON AUTORISEE";
        }
                            
        // Si le formulaire est validé, on copie le fichier dans le dossier de destination
        if(empty($errors)){
            $name_file = md5(uniqid(rand(), true)).".".$ext; // on crée un nom unique en conservant l"extension
            if( !move_uploaded_file($tmp_file, $content_dir . $name_file) ){
                echo "Il y a des erreurs! Impossible de copier le fichier dans le dossier cible";
            }
        } 
        // On récupère l"url du fichier envoyé
        $get_the_file = $content_dir.$name_file;
                        
        elseif($_FILES["upfiles"]["size"] > $file_max_size):
            echo "le fichier dépasse la limite autorisée";
        else: 
            echo "Pas de fichier joint";
        endif;

        $ville=new Ville();
        $ville->AjouterVille($_POST['nom'],$_POST['pays'],$get_the_file,$_POST['desc'],(array)$BDDCo);
    }
    ?>

    <div class="container">
        <div class="space"></div>
        <form class="adminVille" method="POST" action="admin.php" enctype="multipart/form-data">
            <img src="./images/logo.png">

            <div class="centre">

                <div class="titre">
                    <h2>City</h2>
                </div>

                <p class="half">
                    <input type="text" name="nom" placeholder="Name of the city..." required>
                    <input type="text" name="pays" placeholder="Name of the contry..." required>
                </p>

                <p>
                    <textarea name="desc" placeholder="Description of the city..."></textarea>
                </p>

                <input id="file" type="file" name="imageVille">

            </div>

            <div class="boutton">
                <input type="submit" name="addCity" value="Add city">
            </div>

        </form>
    </div>

    <?php include './header_footer/footer.html'; ?>
</body>