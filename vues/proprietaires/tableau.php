<h2>Affichage en mode Tableau</h2>

<table class="table">

    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code Postal</th>
            <th>Province</th>
            <th>Pays</th>
            <th>Téléphone</th>
            <th>Actions</th>
        </tr>
    </thead>

    <?php 
        foreach ($proprietaires as $proprietaire) {
    ?>
        <tbody>
            <td><?=$proprietaire->nom ?></td>
            <td><?=$proprietaire->prenom ?></td>
            <td><?=$proprietaire->adresse ?></td>
            <td><?=$proprietaire->ville ?></td>
            <td><?=$proprietaire->code_postal ?></td>
            <td><?=$proprietaire->province ?></td>
            <td><?=$proprietaire->pays ?></td>
            <td><?=$proprietaire->telephone ?></td>
            <td>
                <a href="fiche_proprietaire.php?id=<?= $proprietaire->id ?>">Afficher</a>
                | 
                <a href="edition_proprietaire.php?id=<?= $proprietaire->id ?>">Modifier</a> 
                | 
                <a href="suppression_proprietaire.php?id=<?= $proprietaire->id ?>">Supprimer</a>
            </td>
            
        </tbody>

    <?php } ?>



</table>