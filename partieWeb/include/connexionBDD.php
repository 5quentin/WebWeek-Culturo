<?php
// Connexion PDO
//Connexion à la page fonction qui contien la function session 
//session_start();
//include('./fonction.php');
//conserverIndentifiant();
    class ConnexionBDD
    {
        public $connection;
        public $requete;
        public $resultats;
        public $tab_typeBillet;
        public $tab_Billet;
        public $nbComptes;
        public $motDePasse=false;

        public function __construct()
        {
            $this->connection = new PDO('mysql:host=localhost;port=3306;dbname=Culturo', 'root', '');

            $this->requete = "SELECT * FROM type_billet";
            $this->resultats = $this->connection->query($this->requete);
            $this->tab_typeBillet = $this->resultats->fetchAll();

            $this->requete = "SELECT * FROM billet";
            $this->resultats = $this->connection->query($this->requete);
            $this->tab_Billet = $this->resultats->fetchAll();
        }

        //////////////////////////////////////////////

        public function connexion($email, $mdp){

            $this->requete = "SELECT mail , mdp FROM `compte`;";
            $this->resultats = $this->connection->query($this->requete);
            $this->tab_comptes = $this->resultats->fetchAll();

            $this->nbComptes = count($this->tab_comptes);

            for ($v = 0; $v < $this->nbComptes; $v++) {

                if ($email == $this->tab_comptes[$v]['mail']) {

                    if ($this->tab_comptes[$v]['mdp'] == $mdp) {
                        $this->motDePasse = true;
                    } else {
                        $this->motDePasse = false;
                        echo "<h3 id='error'>Password incorect</h3>";
                    }
                }
            }

            if ($this->motDePasse == false) {
                echo "<h3 id='error'>Email incorect</h3>";
            }
        }
    }
?>