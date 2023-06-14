<?php 

    require_once './modeles/animaux.php';

    class ControlleurAnimaux {

        function afficherListe() {
            $animaux = modele_animaux::ObtenirTous();
            require './vues/animaux/liste.php';
        }

        function afficherTableau() {
            $animaux = modele_animaux::ObtenirTous();
            require './vues/animaux/tableau.php';
        }
    }

?>