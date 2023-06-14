<?php
  require_once 'controlleurs/veterinaires.php';
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
              <a class="nav-link active" aria-current="page" href="veterinaire.php">Vétérinaires</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="animaux.php">Animaux</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rendez-vous.php">Rendez-vous</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

      <h1>Liste tes vétérinaires</h1>

      <a href="#" class="btn btn-primary">Ajouter un vétérinaire</a>

      <?php
          $controllerVeterinaires=new ControlleurVeterinaires;
          $controllerVeterinaires->afficherListe();
      ?>     

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  
  </body>

</html>