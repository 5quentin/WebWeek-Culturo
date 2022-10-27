<?php
    class Ville
    {
        public $nomVille;
        public $paysVille;
        public $img;
        public $presentation;
        public $tabVille = array();
        public $nbVille;
        public $reqpreparee;

        public function AjouterVille($nomVille, $paysVille, $img, $presentation, $tabVille)
        {
            $BDD = new ConnexionBDD();
            //print_r( $this->type_billets[0]['lib']);
            $this->nomVille = $nomVille;
            $this->paysVille = $paysVille;
            $this->img = $img;
            $this->enregistre= false;
            $this->presentation = $presentation;
            $this->tabVille = $tabVille['tab_ville'];
            $this->nbVille = count($this->tabVille);

            $v = 0;
            if ($this->tabVille != null) {
                while ($v < $this->nbVille && $this->nomVille != $this->tabVille[$v]['nom']) {
                    $v++;
                    if ($this->nomVille == $this->tabVille[$v]['nom']) {
                        $this->enregistre = false;
                        
                    } else {
                        $this->enregistre = true;
                    }
                    
                }
            } else {
                $this->enregistre = true;
                // echo "<script>alert('OK')</script>";
            }


            if ($this->enregistre == true) {
                
                $this->reqpreparee = $BDD->connection->prepare("INSERT INTO ville(nom,pays,image,presentation) Values(:nom,:pays,:image,:presentation);");
                
                $this->reqpreparee->bindValue(':nom', $this->nomVille, PDO::PARAM_STR);
                $this->reqpreparee->bindValue(':pays', $this->paysVille, PDO::PARAM_STR);
                $this->reqpreparee->bindValue(':image', $this->img, PDO::PARAM_STR);
                $this->reqpreparee->bindValue(':presentation', $this->presentation, PDO::PARAM_STR);

                $req = $this->reqpreparee->execute();
                if ($req == true) {

                    // $coSauv = new funtionSauCo($this->tab_comptes[$v]['id'],'client');
                    //echo"<script>window.location.href='billet.php';</script>";
                    echo "<script>alert('Nouveau Ville créé');</script>";
                }
            }else{
                echo "<script>alert('Ville déjà existante');</script>";
            }
        }

        public function SuprimerVille($nomVille){
            $BDD = new ConnexionBDD();
    
            $this->reqpreparee = $BDD->connection -> prepare("DELETE FROM `ville` WHERE `nom`= '".$nomVille."';");
    
            $req = $this->reqpreparee->execute();
            if($req==true){
                echo "<script>alert('Ville Sup')</script>";
            }
        }
    }
?>
