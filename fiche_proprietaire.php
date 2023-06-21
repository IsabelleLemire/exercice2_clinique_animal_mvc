<?php
    require_once 'controlleurs/proprietaires.php';
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fiche propriétaire / Clinique veterinaire ABC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/styles.css" />
  </head>
 <body>
     
    <div class="container">
        <h1>Fiche détaillée du propriétaire</h1>

        <?php
            $controllerProprietaires=new ControlleurProprietaires;
            $controllerProprietaires->afficherFiche();
        ?>

        <a href="proprietaires.php">Retour à la liste des proprietaires</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  
    </body>

</html>


