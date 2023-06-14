<h2>Afficahge en mode liste</h2>

<ul>
    <?php foreach ($animaux as $animal) { ?>
        <li><?= $animal->nom_animal ?> (<? $animal->animal ?>)</li>

    <?php }?>
</ul>