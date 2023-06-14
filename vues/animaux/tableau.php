<h2>Affichage en mode Tableau</h2>

<table class="table">

    <thead>
        <tr>
            <th>Nom de l'animal</th>
            <th>Type</th>
            <th>Nom du propriétaire</th>
            <th>Nom de famille du propriétaire</th>
            <th>Téléphone du propriétaire</th>
        </tr>
    </thead>

    <?php 
        foreach ($animaux as $animal) {
    ?>
        <tbody>
            <td><?=$animal->nom_animal ?></td>
            <td><?=$animal->type_animal ?></td>
            <td><?=$animal->nom ?></td>
            <td><?=$animal->prenom ?></td>
            <td><?=$animal->telephone ?></td>
            
        </tbody>

    <?php } ?>



</table>