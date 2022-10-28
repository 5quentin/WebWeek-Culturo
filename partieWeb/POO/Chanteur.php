<?php
require_once "./include/connexionBDD.php";
    class Chanteur{
        public $nomArtiste;
        public $imgArtiste;
        public $tabArtiste = array();
        public $nbArtiste;

        public function AjouterArtiste($nomArtiste,$cheminImg,$tab_Artiste){
            $BDD = new ConnexionBDD();
            $this->nomArtiste= $nomArtiste;
            $this->imgArtiste= $cheminImg;
            $this->enregistre= false;
            $this->tabArtiste= $tab_Artiste['tab_chanteur'];
            $this->nbArtiste = count($this->tabArtiste);

            $v = 0;
            if ($this->tabArtiste != null) {
                while ($v < $this->nbArtiste && $this->nomArtiste != $this->tabArtiste[$v]['nom']) {
                    $v++;
                    if ($this->nomArtiste == isset($this->tabArtiste[$v]['nom'])) {
                       // echo "<script>alert('cfygtvyuj')</script>";
                       $this->enregistre = false;
                       
                       
                    } else {
                        $this->enregistre = true;
                        
                    }
                    
                }
            } else {
                $this->enregistre = true;
                
               
            }

            if ($this->enregistre == true) {
                
                $this->reqpreparee = $BDD->connection->prepare("INSERT INTO chanteurs(nom,img) Values(:nom,:img);");
                
                $this->reqpreparee->bindValue(':nom', $this->nomArtiste, PDO::PARAM_STR);
                $this->reqpreparee->bindValue(':img', $this->imgArtiste, PDO::PARAM_STR);
                $req = $this->reqpreparee->execute();

                print_r($this->reqpreparee->execute());
                if ($req == true) {

                    // $coSauv = new funtionSauCo($this->tab_comptes[$v]['id'],'client');
                    //echo"<script>window.location.href='billet.php';</script>";
                    echo "<script>alert('Nouveau chanteur')</script>";
                }
                print_r($this->reqpreparee) ;

            }else{
                echo "<script>alert('Chanteur déjà existant')</script>";
            }

        }

        public function SuprimerChanteur($nomArtiste){
            $BDD = new ConnexionBDD();
    
            $this->reqpreparee = $BDD->connection -> prepare("DELETE FROM `chanteurs` WHERE `nom`= '".$nomArtiste."';");
    
            $req = $this->reqpreparee->execute();
            if($req==true){
                echo "<script>alert('Chanteur Sup')</script>";
            }
        }

        public function SelectionChanteur($ensembillet){
            $this->tab_chanteur = $ensembillet['tab_chanteur'];
            for($i=0;$i<count($this->tab_chanteur);$i++){
                echo "<option value='".$this->tab_chanteur[$i]['nom']."'>".$this->tab_chanteur[$i]['nom']."</option>";
            }
        }
    }


?>