<?php
class funtionSauCo{
    //public $Indentifiant;
    public $fichier_Im;

    public function __construct($donnees,$client)
    {
        
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
        
                    $_SESSION['Id_Co_Clients']=$Indentifiant;
                    file_put_contents($fichier_Im,$Indentifiant);
                   
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
