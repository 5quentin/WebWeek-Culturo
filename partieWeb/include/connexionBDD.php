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
        public $nbComptes;
        public $motDePasse=false;


        public function __construct()
        {
            $this->connection = new PDO('mysql:host=localhost;port=3306;dbname=Culturo', 'root', 'root');
            
            $this->requete = "SELECT * FROM type_billet";
            $this->resultats = $this->connection->query($this->requete);
            $this->tab_typeBillet = $this->resultats->fetchAll();

            $this->requete = "SELECT * FROM billet";
            $this->resultats = $this->connection->query($this->requete);
            $this->tab_Billet = $this->resultats->fetchAll();

            $this->requete = "SELECT * FROM `compte`;";
            $this->resultats = $this->connection->query($this->requete);
            $this->tab_comptes = $this->resultats->fetchAll();
        }

        ///////////////////////////////////////////////

        public function connexion($email, $mdp){

            $this->nbComptes = count($this->tab_comptes);

            for ($v = 0; $v < $this->nbComptes; $v++) {

                if ($email == $this->tab_comptes[$v]['mail']) {

                    if ($this->tab_comptes[$v]['mdp'] == $mdp) {
                        $this->motDePasse = true;
                        if($this->tab_comptes[$v]['mail']=="admin@admin.culturo"){
                            $coSauv = new funtionSauCo($this->tab_comptes[$v]['id'],'');
                            echo '<script>document.location.href="profile.php"</script>';
                        }else{
                            $coSauv = new funtionSauCo($this->tab_comptes[$v]['id'],'client');
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