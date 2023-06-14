<?php 

    require_once './modeles/rendez-vous.php';

    class ControlleurRendezVous {

        function afficherCarte() {
            $rendez_vous = modele_rendez_vous::ObtenirTous();
            require './vues/rendez-vous/carte.php';
        }
    }

?>