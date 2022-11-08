<?php
class funtionSauCo{
    public $Indentifiant;
    public $fichier_Im;
    public $MAC;
    public function __construct($donnees,$client,$MacRentree)
    {
        
        if(!isset($_SESSION['MAC_Co_Clients'])){
            
            if($_SESSION['MAC_Co_Clients'] != $MacRentree){
                unlink("./sauv.txt");
            }
        }
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
                    $_SESSION['MAC_Co_Clients']=$MacRentree;
                    file_put_contents($fichier_Im,$Indentifiant);
                    echo '<script>console.log("L adresse MAC de l utilisateur est : '.$_SESSION['MAC_Co_Clients'].'")</script>';
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
