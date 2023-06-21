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

    /***
     * Fonction permettant de construire un objet de type modele_proprietaire
     */    
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

    /***
     * Fonction permettant de se connecter à la base de données
     */    
    static function connecter() {
        $mysqli = new mysqli(Db::$host, Db::$username, Db::$password, Db::$database);

        if ($mysqli -> connect_errno ) {
            echo "Échec de connexion à la base de données MySQL: ". $mysqli -> connect_error;
            exit();
        } 
        
        return $mysqli;

    }

    /***
     * Fonction permettant de récupérer l'ensemble des propriétaires 
     */
    public static function ObtenirTous() {
        $liste = [];
        $mysqli = self::connecter();

        $resultatRequete = $mysqli->query("SELECT * FROM proprietaires_animaux");

        foreach ($resultatRequete as $enregistrement) {
            $liste [] = new modele_proprietaires($enregistrement['id'], $enregistrement['nom'], $enregistrement['prenom'], $enregistrement['adresse'], $enregistrement['ville'], $enregistrement['code_postal'], $enregistrement['province'], $enregistrement['pays'], $enregistrement['telephone']);
        }
        
        return $liste;
    }

    /***
     * Fonction permettant de récupérer un proprietaire en fonction de son identifiant
     */
    public static function ObtenirUn($id) {
        $mysqli = self::connecter();

        if ($requete = $mysqli->prepare("SELECT * FROM proprietaires_animaux WHERE id=?")) {  // Création d'une requête préparée 
            $requete->bind_param("i", $id); // Envoi des paramètres à la requête

            $requete->execute(); // Exécution de la requête

            $result = $requete->get_result(); // Récupération de résultats de la requête¸
            
            if($enregistrement = $result->fetch_assoc()) { // Récupération de l'enregistrement
                $proprietaire = new modele_proprietaires($enregistrement['id'], $enregistrement['nom'], $enregistrement['prenom'], $enregistrement['adresse'], $enregistrement['ville'], $enregistrement['code_postal'], $enregistrement['province'], $enregistrement['pays'], $enregistrement['telephone']);
            } else {
                //echo "Erreur: Aucun enregistrement trouvé.";  // Pour fins de débogage
                return null;
            }   
            
            $requete->close(); // Fermeture du traitement 
        } else {
            echo "Une erreur a été détectée dans la requête utilisée : ";   // Pour fins de débogage
            echo $mysqli->error;
            return null;
        }

        return $proprietaire;
    }

    /***
     * Fonction permettant d'ajouter un proprietaire
     */
    public static function ajouter($nom, $prenom, $adresse, $ville, $code_postal, $province, $pays, $telephone) {
        $message = '';

        $mysqli = self::connecter();
        
        // Création d'une requête préparée
        if ($requete = $mysqli->prepare("INSERT INTO proprietaires_animaux(nom, prenom, adresse, ville, code_postal, province, pays, telephone) VALUES(?, ?, ?, ?, ?, ?, ?, ?)")) {      

        /************************* ATTENTION **************************/
        /* On ne fait présentement peu de validation des données.     */
        /* On revient sur cette partie dans les prochaines semaines!! */
        /**************************************************************/

        $requete->bind_param("ssssssss", $nom, $prenom, $adresse, $ville, $code_postal, $province, $pays, $telephone);

        if($requete->execute()) { // Exécution de la requête
            $message = "Propriétaire ajouté";  // Message ajouté dans la page en cas d'ajout réussi
        } else {
            $message =  "Une erreur est survenue lors de l'ajout: " . $requete->error;  // Message ajouté dans la page en cas d’échec
        }

        $requete->close(); // Fermeture du traitement

        } else  {
            echo "Une erreur a été détectée dans la requête utilisée : ";   // Pour fins de débogage
            echo $mysqli->error;
            echo "<br>";
            exit();
        }

        return $message;
    }

    /***
     * Fonction permettant d'éditer un proprietaire
     */
    public static function editer($id, $nom, $prenom, $adresse, $ville, $code_postal, $province, $pays, $telephone) {
        $message = '';

        $mysqli = self::connecter();
        
        // Création d'une requête préparée
        if ($requete = $mysqli->prepare("UPDATE proprietaires_animaux SET nom=?, prenom=?, adresse=?, ville=?, code_postal=?, province=?, pays=?, telephone=? WHERE id=?")) {      

        /************************* ATTENTION **************************/
        /* On ne fait présentement peu de validation des données.     */
        /* On revient sur cette partie dans les prochaines semaines!! */
        /**************************************************************/

        $requete->bind_param("ssssssssi", $nom, $prenom, $adresse, $ville, $code_postal, $province, $pays, $telephone, $id);

        if($requete->execute()) { // Exécution de la requête
            $message = "Propriétaire modifié";  // Message ajouté dans la page en cas d'ajout réussi
        } else {
            $message =  "Une erreur est survenue lors de l'édition: " . $requete->error;  // Message ajouté dans la page en cas d’échec
        }

        $requete->close(); // Fermeture du traitement

        } else  {
            echo "Une erreur a été détectée dans la requête utilisée : ";
            echo $mysqli->error;
            echo "<br>";
            exit();
        }

        return $message;
    }

    /***
     * Fonction permettant de supprimer un propriétaire
     */
    public static function supprimer($id) {
        $message = '';

        $mysqli = self::connecter();
        
        // Création d'une requête préparée
        if ($requete = $mysqli->prepare("DELETE FROM proprietaires_animaux WHERE id=?")) {      

        /************************* ATTENTION **************************/
        /* On ne fait présentement peu de validation des données.     */
        /* On revient sur cette partie dans les prochaines semaines!! */
        /**************************************************************/

        $requete->bind_param("i", $id);

        if($requete->execute()) { // Exécution de la requête
            $message = "Propriétaire supprimé";  // Message ajouté dans la page en cas d'ajout réussi
        } else {
            $message =  "Une erreur est survenue lors de la suppression: " . $requete->error;  // Message ajouté dans la page en cas d’échec
        }

        $requete->close(); // Fermeture du traitement

        } else  {
            echo "Une erreur a été détectée dans la requête utilisée : ";
            echo $mysqli->error;
            echo "<br>";
            exit();
        }

        return $message;
    }





}

?>