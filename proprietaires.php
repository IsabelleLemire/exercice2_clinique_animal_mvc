<?php
  require_once 'controlleurs/proprietaires.php';
?> 

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vétérinaire / Clinique veterinaire ABC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css" />
	  <link rel="stylesheet" href="css/styles.css" />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Clinique Vétérianire ABC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="veterinaire.php">Vétérinaires</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="animaux.php">Animaux</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rendez-vous.php">Rendez-vous</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="proprietaires.php">Propriétaires</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

      <h1>Liste des propriétaires</h1>

      <a href="ajout_proprietaire.php" class="btn btn-primary">Ajouter un propriétaire</a>

      <?php
          $controllerProprietaires=new ControlleurProprietaires;
          $controllerProprietaires->afficherTableau();
      ?>     

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  
  </body>

</html>