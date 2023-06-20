<?php 

require_once "./include/config.php";

class modele_proprietaires {
    public $id;
    public $nom;	
    public $prenom;
    public $adresse;
    public $ville;
    public $code_postal;
    public $province;
    public $pays;
    public $telephone;

    public function __construct($id, $nom, $prenom, $adresse, $ville, $code_postal, $province, $pays, $telephone) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->code_postal = $code_postal;
        $this->province = $province;
        $this->pays = $pays;
        $this->telephone = $telephone;
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

        $resultatRequete = $mysqli->query("SELECT * FROM proprietaires_animaux");

        foreach ($resultatRequete as $enregistrement) {
            $liste [] = new modele_proprietaires($enregistrement['id'], $enregistrement['nom'], $enregistrement['prenom'], $enregistrement['adresse'], $enregistrement['ville'], $enregistrement['code_postal'], $enregistrement['province'], $enregistrement['pays'], $enregistrement['telephone']);
        }
        
        return $liste;
    }
}

?>