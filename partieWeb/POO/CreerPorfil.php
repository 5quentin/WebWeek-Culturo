<?php
    class Profil{
        public $nom;
        public $prenom;
        public $email;
        public $tel;
        public $mdp;
        public $nbBillet;

        private $identifiant;

        public function setIdentifiant($id_personage){
            $this->identifiant = $id_personage;
        }
        public function getIdentifiant(){
            return $this->identifiant;
        }

        public function __construct($nom,$prenom,$email,$tel,$mdp){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->tel = $tel;
            $this->mdp = $mdp;
        }


        public function AchaBillet($nom,$prenom,$numBillet,$typeBillet, $date){
            echo "Billet pour assister : ".$typeBillet."<br>";
            echo "Nom : ".$nom."<br>";
            echo "Prenom : ".$prenom."<br>";
            echo "Numéro de billet : ".$numBillet."<br>";
            echo "Date de l'évènement : ".$date."<br>";
        }
    }



?>