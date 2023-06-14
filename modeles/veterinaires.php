<?php 

require_once "./include/config.php";

class modele_veterinaires {
    public $id;
    public $nom_veterinaire;	
    public $prenom_veterinaire;

    public function __construct($id, $nom_veterinaire, $prenom_veterinaire) {
        $this->id = $id;
        $this->nom_veterinaire = $nom_veterinaire;
        $this->prenom_veterinaire = $prenom_veterinaire;
    }

    static function connecter() {
        $mysqli = new mysqli(Db::$host, Db::$username, Db::$password, Db::$database);

        if ($mysqli -> connect_errno ) {
            echo "Échec de connexion à la base de données MySQL: ". $mysqli -> connect_error;
            exit();
        } 
        
        return $mysqli;

    }

    public static function ObtenirTous() {
        $liste = [];
        $mysqli = self::connecter();

        $resultatRequete = $mysqli->query("SELECT * FROM veterinaires ORDER BY nom_veterinaire, prenom_veterinaire");

        foreach ($resultatRequete as $enregistrement) {
            $liste [] = new modele_veterinaires($enregistrement['id'], $enregistrement['nom_veterinaire'], $enregistrement['prenom_veterinaire']);
        }
        
        return $liste;
    }
}



?>