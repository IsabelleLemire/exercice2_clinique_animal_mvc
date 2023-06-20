<?php 

    require_once './modeles/proprietaires.php';

    class ControlleurProprietaires {

        function afficherListe() {
            $proprietaires = modele_proprietaires::ObtenirTous();
            require './vues/proprietaires/liste.php';
        }

        function afficherTableau() {
            $proprietaires = modele_proprietaires::ObtenirTous();
            require './vues/proprietaires/tableau.php';
        }
    }

?>