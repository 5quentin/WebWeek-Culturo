
<?php
// Connexion PDO
//Connexion à la page fonction qui contien la function session 
include('./fonction.php');
//session_start();

//conserverIndentifiant();

    class ConnexionBDD
    {
        public $connection;
        public $coSauv;
        public $requete;
        public $resultats;
        public $tab_typeBillet;
        public $tab_Billet;
        public $tab_ville;
        public $tab_chanteur;
        public $nbComptes;
        public $motDePasse=false;
        public $MAC;

        public function __construct()
        {
            //$this->connection = new PDO('mysql:host=localhost;port=3306;dbname=maboyer_culturo','maboyer_culturo', 'mevtrdems');
            $this->connection = new PDO('mysql:host=localhost;port=3306;dbname=culturo','root', '');
            $this->MAC = exec('getmac');
            $this->MAC = strtok($this->MAC, ' ');
            $this->requete = "SELECT * FROM type_billet";
            $this->resultats = $this->connection->query($this->requete);
            $this->tab_typeBillet = $this->resultats->fetchAll();

            $this->requete = "SELECT * FROM billet";
            $this->resultats = $this->connection->query($this->requete);
            $this->tab_Billet = $this->resultats->fetchAll();


            $this->requete = "SELECT * FROM ville";
            $this->resultats = $this->connection->query($this->requete);
            $this->tab_ville = $this->resultats->fetchAll();
        

            $this->requete = "SELECT * FROM `compte`;";
            $this->resultats = $this->connection->query($this->requete);
            $this->tab_comptes = $this->resultats->fetchAll();

            $this->requete = "SELECT * FROM `chanteurs`;";
            $this->resultats = $this->connection->query($this->requete);
            $this->tab_chanteur= $this->resultats->fetchAll();
        }

        //////////////////////////////////////////////

        public function connexion($email, $mdp){

            $this->nbComptes = count($this->tab_comptes);

            for ($v = 0; $v < $this->nbComptes; $v++) {

                if ($email == $this->tab_comptes[$v]['mail']) {

                    if ($this->tab_comptes[$v]['mdp'] == $mdp) {
                        $this->motDePasse = true;
                        if($this->tab_comptes[$v]['mail']=="admin@admin.culturo"){
                            unlink("./mac.txt");
                            $coSauv = new funtionSauCo($this->tab_comptes[$v]['id'],'',$this->MAC);
                            echo '<script>document.location.href="admin.php"</script>';
                        }else{
                            if(file_exists("./mac.txt")){
                                unlink("./mac.txt");
                            }
                            
                            $coSauv = new funtionSauCo($this->tab_comptes[$v]['id'],'client',$this->MAC);
                            echo '<script>alert("'.$this->MAC.'")</script>';
                            echo '<script>document.location.href="profile.php"</script>';
                        }
                        
                    } else {
                        $this->motDePasse = false;
                    }
                }
            }

            if ($this->motDePasse == false){
                echo "<h3 id='error'>Password or Email incorect</h3>";
            }
        }

        public function affichageCompteActif ($idActif){
            $nomActif=$this->tab_comptes[$idActif]['nom'];
            echo $nomActif;
        }
    }
?>