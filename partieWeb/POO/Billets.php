<?php
    require_once "./include/connexionBDD.php";

    class Billets extends typeBillets{
        public $nom;
        public $prenom;
        public $id_compte;
        public $id_type;
        public $concert;
        public $prorioBillet;
        public $prorioBillet2;
        public $supBillet;
        public $type_billets = array();
        public $nbtypeBillets = array();
        public $tab_Billet = array();

        private $identifiant;

        public function setIdentifiant($id_billet){
            $this->identifiant = $id_billet;
        }
        public function getIdentifiant(){
            return $this->identifiant;
        }

        public function __construct($nom,$prenom,$id_compte,$concert,$typeBillets){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->id_compte = $id_compte;
            $this->concert = $concert;
            parent::__construct($typeBillets);
            
        }
        
       public function EnsembleBillets($billets,$nomBillet){
            $this->nbtypeBillets = $billets['type_billets'];
            for($i=0;$i<count($this->nbtypeBillets);$i++){
                if($nomBillet == $this->nbtypeBillets[$i]['lib'] ){
                    $this->id_type = $this->nbtypeBillets[$i]['id'];
                    $this->type_billets = $this->nbtypeBillets[$i]['lib'];
                    //print_r($this->nbtypeBillets[$i]['lib']);
                }
                
            }
            
        }
        public function AffichageBillet($ensembillet){
            $this->tab_Billet = $ensembillet['tab_Billet'];
            for($i=0;$i<count($ensembillet['tab_Billet']);$i++){
                
                if($this->id_compte == $this->tab_Billet[$i]['id_compte']){
                    echo"<br>";
                    echo "Billet pour assister : ".$this->type_billets."<br>";
                    echo "Nom : ".$this->tab_Billet[$i]['nom']."<br>";
                    echo "Prenom : ".$this->tab_Billet[$i]['prenom']."<br>";
                    echo "Numéro de billet : ".$this->tab_Billet[$i]['id']."<br>";
                    echo "Concert : ".$this->tab_Billet[$i]['concert']."<br>";
                    echo "Date : ";
                    for($y=0;$y<count($this->nbtypeBillets);$y++){
                        if($this->id_type == $this->nbtypeBillets[$y]['id']){
                            print_r($this->nbtypeBillets[$y]['date']);
                        }
                    }
                    echo"<br>";
                    echo "Numéro de billet : ".$this->tab_Billet[$i]['id']."<br>";
                    echo"<br>";
                }
            }
            

        }

        public function EnregistrementBDD_Billet($billet){
            
            $BDD = new ConnexionBDD();
            $this->requete = "SELECT * FROM billet";
            $this->resultats = $BDD->connection->query($this->requete);
            $this->tab_billetBDD = $this->resultats->fetchAll();
            $this->prorioBillet = $this->nom.$this->prenom;
            $this->nbBillet = count($this->tab_billetBDD);

            $v = 0;
            if($this->tab_billetBDD!=null){
                while($v<$this->nbBillet ){
                    $v++;
                    $this->prorioBillet2 = $this->tab_billetBDD[$v-1]['nom'].$this->tab_billetBDD[$v-1]['prenom'];
                    //print_r($this->prorioBillet2);
                    //echo "<script>alert('OK')</script>";
                    if($this->prorioBillet == $this->prorioBillet2){
                        $this->enregistre= false;
                        echo "<script>alert('OK')</script>";
                        break;
                    }
                    else{
                                                
                        $this->enregistre= true;
                    }
                    
                }
                
            }else{
                $this->enregistre= true;
               // echo "<script>alert('OK')</script>";
            }

            if($this->enregistre== true){
               
                $this->reqpreparee = $BDD->connection -> prepare("INSERT INTO billet(nom,prenom,id_compte,id_type,concert) Values(:nom,:prenom,:id_compte,:id_type,:concert)");
                //$this->reqpreparee->bindValue(':id', $profil['identifiant'], PDO::PARAM_STR);
                $this->reqpreparee->bindValue(':nom', $billet['nom'], PDO::PARAM_STR);
                $this->reqpreparee->bindValue(':prenom', $billet['prenom'], PDO::PARAM_STR);
                $this->reqpreparee->bindValue(':id_compte', $billet['id_compte'], PDO::PARAM_INT);
                $this->reqpreparee->bindValue(':id_type', $billet['id_type'], PDO::PARAM_INT);
                $this->reqpreparee->bindValue(':concert', $billet['concert'], PDO::PARAM_STR);

                $req = $this->reqpreparee->execute();
                if($req==true){
                    echo "<script>alert('Billet Enregistré')</script>";
                }
    
            }  else{
                echo "<script>alert('Billet déjà existant')</script>";
                
            }
        }

        public function SelectionBillet($ensembillet){
            $this->tab_Billet = $ensembillet['tab_Billet'];
            for($i=0;$i<count($ensembillet['tab_Billet']);$i++){
                
                if($this->id_compte == $this->tab_Billet[$i]['id_compte']){
                    echo "<option value='".$this->tab_Billet[$i]['id']."'>Ticket number : ".$this->tab_Billet[$i]['id']."</option>";
                }
            }
        }

        public function AnnulationBillet($id_compte,$idBillet){
            $BDD = new ConnexionBDD();

            $this->reqpreparee = $BDD->connection -> prepare("DELETE FROM `billet` WHERE id=".$idBillet." AND `id_compte`=".$id_compte.";");

            $req = $this->reqpreparee->execute();
            if($req==true){
                echo "<script>alert('Billet sup')</script>";
                //echo "<script>document.location.href='profile.php'</script>";
            }
        }
    }


?>