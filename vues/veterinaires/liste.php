    <h2>Affichage en mode liste</h2>
    <ul>
        <?php foreach ($veterinaires as $veterinaire) { ?>
            <li><?= $veterinaire->nom_veterinaire ?> <?=$veterinaire->prenom_veterinaire ?></li>

        <?php }?>
    </ul>