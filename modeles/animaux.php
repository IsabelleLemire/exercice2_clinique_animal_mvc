<?php 

require_once "./include/config.php";

class modele_animaux {
    public $id;
    public $nom_animal;	
    public $type_animal;
    public $nom;
    public $prenom;
    public $telephone;

    public function __construct($id, $nom_animal, $type_animal, $nom, $prenom, $telephone) {
        $this->id = $id;
        $this->nom_animal = $nom_animal;
        $this->type_animal = $type_animal;
        $this->nom = $nom;
        $this->prenom = $prenom;
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

        $resultatRequete = $mysqli->query("SELECT animaux.nom_animal, types_animaux.type_animal, proprietaires_animaux.prenom, proprietaires_animaux.nom, proprietaires_animaux.telephone 
        FROM animaux INNER JOIN proprietaires_animaux ON proprietaires_animaux.id = animaux.fk_proprietaire_animal INNER JOIN types_animaux ON types_animaux.id = animaux.fk_type_animal");

        foreach ($resultatRequete as $enregistrement) {
            $liste [] = new modele_animaux($enregistrement['id'], $enregistrement['nom_animal'], $enregistrement['type_animal'], $enregistrement['nom'], $enregistrement['prenom'], $enregistrement['telephone']);
        }
        
        return $liste;
    }
}



?>