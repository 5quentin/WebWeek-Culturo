<?php
    class typeBillets{
        public $type_billets=array();
        public $prix;
        public $lib;
        public $description;
        public $date;

        public function __construct($billets){
           $this->type_billets = $billets['tab_typeBillet'];
           
        }

        public function CreerTypeBillet($prix,$lib,$description,$date){
            $BDD = new ConnexionBDD();
            //print_r( $this->type_billets[0]['lib']);
            $this->prix = $prix;
            $this->lib = $lib;
            $this->description = $description;
            $this->date = $date;
                $this->nbType = count($this->type_billets);
                $v = 0;
                if($this->type_billets!=null){
                    while($v<$this->nbType && $this->lib != $this->type_billets[0]['lib']){
                        $v++;
                        if($this->lib != isset($this->type_billets[$v]['lib'])){
                            
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
                    
                    $this->reqpreparee = $BDD->connection -> prepare("INSERT INTO type_billet(prix,lib,description,date) Values(:prix,:lib,:description,:date)");
                    //$this->reqpreparee->bindValue(':id', $profil['identifiant'], PDO::PARAM_STR);
                    $this->reqpreparee->bindValue(':prix', $this->prix, PDO::PARAM_STR);
                    $this->reqpreparee->bindValue(':lib', $this->lib, PDO::PARAM_STR);
                    $this->reqpreparee->bindValue(':description', $this->description, PDO::PARAM_STR);
                    $this->reqpreparee->bindValue(':date', $this->date, PDO::PARAM_STR);
    
                    $req = $this->reqpreparee->execute();
                    if($req==true){
                       // $coSauv = new funtionSauCo($this->tab_comptes[$v]['id'],'client');
                        //echo"<script>window.location.href='billet.php';</script>";
                        echo "<script>alert('Nouveau type billet créé'</script>";
                    }
        
                }else {
                    echo "<script>alert('Billet déjà existant')";
                } 
            }
    }

?>