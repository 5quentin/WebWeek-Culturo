<?php
// Connexion PDO
//Connexion à la page fonction qui contien la function session 
//session_start();
//include('./fonction.php');
//conserverIndentifiant();
class ConnexionBDD{
   public $connection;
   
   public function __construct()
   {          
       $this->connection = new PDO('mysql:host=localhost;port=3306;dbname=Culturo','root','');
   }
//////////////////////////////////////////////


  /*  public $requete='SELECT * FROM ville';  
    public $resultats=$connection->query($requete);
    public $tab_villes=$resultats->fetchAll();
    public $resultats = $resultats->closeCursor();

    public $requete2='SELECT * FROM compte';  
    public $resultats2=$connection->query($requete);
    public $tab_comptes=$resultats->fetchAll();
     $resultats->closeCursor();



    public $nbVilles = count($tab_villes);
    public $nbComptes = count($tab_comptes);*/
}

?>