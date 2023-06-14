<?php 

require_once "./include/config.php";

class modele_rendez_vous {
    public $id;
    public $date_rv;	
    public $heure_rv;
    public $dure_rv;
    public $nom_animal;
    public $raison_rv;
    public $nom_veterinaire;

    public function __construct($id, $date_rv, $heure_rv, $dure_rv, $nom_animal, $raison_rv, $nom_veterinaire) {
        $this->id = $id;
        $this->date_rv = $date_rv;
        $this->heure_rv = $heure_rv;
        $this->dure_rv = $dure_rv;
        $this->nom_animal = $nom_animal;
        $this->raison_rv = $raison_rv;
        $this->nom_veterinaire= $nom_veterinaire;
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

        $resultatRequete = $mysqli->query("SELECT rv.*, a.nom_animal, v.prenom_veterinaire, v.nom_veterinaire FROM `liste_rendez-vous` rv 
        INNER JOIN animaux a ON a.id = rv.fk_animal
        INNER JOIN veterinaires v ON v.id = rv.fk_veterinaire
        WHERE (MONTH(rv.date_rv) = 5 OR MONTH(rv.date_rv) = 6)
        ORDER BY rv.date_rv, rv.heure_rv ASC;");

        foreach ($resultatRequete as $enregistrement) {
            $liste [] = new modele_rendez_vous($enregistrement['id'], $enregistrement['date_rv'], $enregistrement['heure_rv'], $enregistrement['dure_rv'], $enregistrement['nom_animal'], $enregistrement['raison_rv'], $enregistrement['nom_veterinaire']);
        }
        
        return $liste;
    }
}



?>