<?php
class funtionSauCo{
    //public $Indentifiant;
    public $fichier_Im;
    public $fichier_Mac;
    public function __construct($donnees,$client,$MacRentree)
    {
        $fichier_Mac= "./mac.txt";
        
            if($client=="client"){
                if(!isset($_SESSION['Id_Co_Clients'])){
                    $fichier_Im="./sauv.txt";
                    if(file_exists($fichier_Im)){
                        $donnees = file_get_contents($fichier_Im);
                        $Indentifiant = (int)$donnees;
                    }else{
                        $myfile = fopen($fichier_Im,'w');
                        fclose($myfile);
                        $Indentifiant = $donnees;
                    }
                    if(file_exists($fichier_Mac)){
                        $VarMAC = file_get_contents($fichier_Mac);
                        $MAC = $VarMAC;
                    }else{
                        $myfile = fopen($fichier_Mac,'w');
                        fclose($myfile);
                        $MAC = $MacRentree;
                    }
        
                    $_SESSION['Id_Co_Clients']=$Indentifiant;
                    $_SESSION['MAC_Co_Clients']=$MacRentree;
                    file_put_contents($fichier_Im,$Indentifiant);
                    file_put_contents($fichier_Mac,$MAC);
                   
                }
            }else{
                if(!isset($_SESSION['Id_Co_Managers'])){
                    $fichier_Im="./sauv.txt";
                
                    if(file_exists($fichier_Im)){
                        $donnees = file_get_contents($fichier_Im);
                        $Indentifiant = (int)$donnees;
                    }else{
                        $myfile = fopen($fichier_Im,'w');
                        fclose($myfile);
                        $Indentifiant = $donnees;
                    }
        
                    $_SESSION['Id_Co_Managers']=$Indentifiant;
                    file_put_contents($fichier_Im,$Indentifiant);
                }
            }
            
    }

} 
   
 

?>
