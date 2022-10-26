<?php
    require_once "./include/connexionBDD.php";

    class Profil{
        public $nom;
        public $prenom;
        public $email;
        public $tel;
        public $mdp;
        public $mdpVerif;
        public $nbBillet;
        public $tab_comptes;
        public $nbComptes;
        public $enregistre= false;  
        public $motdepass = false;
        public $reqpreparee;

        private $identifiant;

        public function setIdentifiant($id_compte){
            $this->identifiant = $id_compte;
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


        /*public function AchaBillet($nom,$prenom,$numBillet,$typeBillet, $date){
            echo "Billet pour assister : ".$typeBillet."<br>";
            echo "Nom : ".$nom."<br>";
            echo "Prenom : ".$prenom."<br>";
            echo "Numéro de billet : ".$numBillet."<br>";
            echo "Date de l'évènement : ".$date."<br>";
        }*/

        public function EnregistrementBDD($profil){
            
            $BDD = new ConnexionBDD();
            $this->requete = "SELECT * FROM compte";
            $this->resultats = $BDD->connection->query($this->requete);
            $this->tab_comptes = $this->resultats->fetchAll();
    
            $this->nbComptes = count($this->tab_comptes);
            $v = 0;
            if($this->tab_comptes!=null){
                while($v<$this->nbComptes && $profil['email'] != $this->tab_comptes[$v]['mail']){
                    $v++;
                    if($profil['email'] != isset($this->tab_comptes[$v]['mail'])){
                        
                        $this->enregistre= true;
                        
                    }
                    else{
                        $this->enregistre= false;                        
                        
                    }
                    
                }

            }else{
                $this->enregistre= true;
               // echo "<script>alert('OK')</script>";
            }
            

            if($this->enregistre== true){
                
                $this->reqpreparee = $BDD->connection -> prepare("INSERT INTO compte(nom,prenom,mail,tel,mdp) Values(:nom,:prenom,:mail,:tel,:mdp)");
                $this->reqpreparee->bindValue(':nom', $profil['nom'], PDO::PARAM_STR);
                $this->reqpreparee->bindValue(':prenom', $profil['prenom'], PDO::PARAM_STR);
                $this->reqpreparee->bindValue(':mail', $profil['email'], PDO::PARAM_STR);
                $this->reqpreparee->bindValue(':tel', $profil['tel'], PDO::PARAM_STR);
                $this->reqpreparee->bindValue(':mdp', $profil["mdp"], PDO::PARAM_STR);

                $req = $this->reqpreparee->execute();
                if($req==true){
                    $BDD2 = new ConnexionBDD();
                    $this->requete = "SELECT id FROM `compte` WHERE mail='".$profil['email']."';";
                    $this->resultats = $BDD2->connection->query($this->requete);
                    $idCree = $this->resultats->fetchAll();
                    
                    $coSauv = new funtionSauCo($idCree[0]['id'],'client');
                    //echo"<script>window.location.href='billet.php';</script>";
                }
    
            }else {
                echo "<script>alert('You already have an acount');document.location.href='./connexion.php'; </script>";
            } 
        }
    }

 #/////////////////Vérification formulaire d'inscription des élèves : ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    
                        
        #/////////////////Inscription des élèves après vérification: ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        

                        


?>