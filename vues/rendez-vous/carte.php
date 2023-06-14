<h2>Affichage en mode carte</h2>

<?php foreach ($rendez_vous as $un_rendez_vous) { 
?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Date : <?=$un_rendez_vous->date_rv ?></h5>
            <hr>
            <h5 class="card-title">Heure : <?=$un_rendez_vous->heure_rv ?> h</h5>
            <h5 class="card-title">Durée : <?=$un_rendez_vous->dure_rv ?></h5>
            <hr>
            <p class="card-text">Nom de l'animal : <?=$un_rendez_vous->nom_animal ?></p>
            <p class="card-text">Raison de la visite : <br>
            <?=$un_rendez_vous->raison_rv ?></p>
            <hr>
            <p class="card-text">Vétérinaire : <?=$un_rendez_vous->nom_veterinaire ?></p>
        </div>
    </div>
       
<?php }
?>