<?php 

    require_once './modeles/proprietaires.php';

    class ControlleurProprietaires {

        /***
         * Fonction permettant de récupérer l'ensemble des propriétaires et de les afficher sous forme de liste
         */
        function afficherListe() {
            $proprietaires = modele_proprietaires::ObtenirTous();
            require './vues/proprietaires/liste.php';
        }

        /***
        * Fonction permettant de récupérer l'ensemble des PROPRIÉTAIRES et de les afficher sous forme de tableau
        */
        function afficherTableau() {
            $proprietaires = modele_proprietaires::ObtenirTous();
            require './vues/proprietaires/tableau.php';
        }

        /***
         * Fonction permettant de récupérer un propriétair à partir de l'identifiant (id) 
         * inscrit dans l'URL, et l'affiche sous forme de carte
         */
        function afficherFiche() {
            if(isset($_GET["id"])) {
                $proprietaire = modele_proprietaires::ObtenirUn($_GET["id"]);
                if($proprietaire) {  // ou if($proprietaire != null)
                    require './vues/proprietaires/fiche.php';
                } else {
                    $erreur = "Aucun propriétaire trouvé";
                    require './vues/erreur.php';
                }
            } else {
                $erreur = "L'identifiant (id) du propriétaire à afficher est manquant dans l'url";
                require './vues/erreur.php';
            }
        }

        /***
         * Fonction permettant de récupérer un proprietaire à partir de l'identifiant (id) 
         * inscrit dans l'URL, et l'affiche dans un formulaire pour édition
         */
        function afficherFormulaireEdition(){
            if(isset($_GET["id"])) {
                $proprietaire = modele_proprietaires::ObtenirUn($_GET["id"]);
                if($proprietaire) {  // ou if($proprietaire != null)
                    require './vues/proprietaires/formulaireEdition.php';
                } else {
                    $erreur = "Aucun propriétaire trouvé";
                    require './vues/erreur.php';
                }
            } else {
                $erreur = "L'identifiant (id) du proprietaire à afficher est manquant dans l'url";
                require './vues/erreur.php';
            }
        }

        /***
         * Fonction permettant de récupérer un proprietaire à partir de l'identifiant (id) 
         * inscrit dans l'URL, et l'affiche dans un formulaire pour suppression
         */
        function afficherFormulaireSuppression(){
            if(isset($_GET["id"])) {
                $proprietaire = modele_proprietaires::ObtenirUn($_GET["id"]);
                if($proprietaire) {  // ou if($proprietaire != null)
                    require './vues/proprietaires/formulaireSuppression.php';
                }
            } else {
                $erreur = "L'identifiant (id) du proprietaire à afficher est manquant dans l'url";
                require './vues/erreur.php';
            }
        }

        /***
         * Fonction permettant d'ajouter un proprietaire
         */
        function ajouter() {
            if(isset($_POST['nom']) && isset($_POST['prenom']) 
                && isset($_POST['adresse']) && isset($_POST['ville']) 
                && isset($_POST['code_postal']) && isset($_POST['province']) 
                && isset($_POST['pays']) && isset($_POST['telephone'])) {

                $message = modele_proprietaires::ajouter($_POST['nom'], 
                                                    $_POST['prenom'], 
                                                    $_POST['adresse'], 
                                                    $_POST['ville'], 
                                                    $_POST['code_postal'],
                                                    $_POST['province'],
                                                    $_POST['pays'],
                                                    $_POST['telephone']);
                echo $message;
            } else {
                $erreur = "Impossible d'ajouter un propriétaire. Des informations sont manquantes";
                require './vues/erreur.php';
            }
        }

        /***
         * Fonction permettant de modifier un proprietaire
         */
        function editer() {
            if(isset($_GET['id']) && isset($_POST['nom']) && isset($_POST['prenom']) 
                && isset($_POST['adresse']) && isset($_POST['ville']) 
                && isset($_POST['code_postal']) && isset($_POST['province']) 
                && isset($_POST['pays']) && isset($_POST['telephone'])) {

                $message = modele_proprietaires::editer($_GET['id'],
                                                    $_POST['nom'],
                                                    $_POST['prenom'],
                                                    $_POST['adresse'],
                                                    $_POST['ville'],
                                                    $_POST['code_postal'],
                                                    $_POST['province'],
                                                    $_POST['pays'],
                                                    $_POST['telephone']);
                echo $message;
            } else {
                $erreur = "Impossible de modifier le propriétaire. Des informations sont manquantes";
                require './vues/erreur.php';
            }
        }

        /***
         * Fonction permettant de supprimer un propriétaire
         */
        function supprimer() {
            if(isset($_GET['id'])) {
                $message = modele_proprietaires::supprimer($_GET['id']);
                echo $message;
            } else {
                $erreur = "Impossible de supprimer le propriétaire. Des informations sont manquantes";
                require './vues/erreur.php';
            }
        }


    }

?>