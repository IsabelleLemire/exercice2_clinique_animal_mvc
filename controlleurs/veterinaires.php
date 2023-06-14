<?php 

    require_once './modeles/veterinaires.php';

    class ControlleurVeterinaires {

        function afficherListe() {
            $veterinaires = modele_veterinaires::ObtenirTous();
            require './vues/veterinaires/liste.php';
        }
    }

?>