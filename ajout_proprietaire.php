<?php
    require_once 'controlleurs/proprietaires.php';
    
    if (isset($_POST['boutonAjouter'])) {        
        $controllerProprietaires=new ControlleurProprietaires;
        $controllerProprietaires->ajouter();
    }
?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ajout Propriétaire / Clinique veterinaire ABC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css" />
	  <link rel="stylesheet" href="css/styles.css" />
  </head>

  <body>

    <div class="container">
        <h2>Ajouter un propriétaire</h2>

        <form method="POST" class="form-add-client">
            <div>
                <label for="nom">Nom*</label>
                <input type="text" id="nom" name="nom" required minlength="2" maxlength="50" >
            </div>

            <div>
                <label for="prenom">Prénom*</label>
                <input type="text" id="prenom" name="prenom" required minlength="2" maxlength="50" >
            </div> 

            <div>
                <label for="adresse">Adresse*</label>
                <input type="text" id="adresse" name="adresse" required minlength="2" maxlength="255" >
            </div> 

            <div>
                <label for="ville">Ville*</label>
                <input type="text" id="ville" name="ville" required minlength="2" maxlength="50" >
            </div> 

            <div>
                <label for="code_postal">Code Postal*</label>
                <input type="text" id="code_postal" name="code_postal" required minlength="2" maxlength="7" >
            </div>             

            <div>
                <label for="province">Province*</label>
                <input type="text" id="province" name="province" required minlength="2" maxlength="50" >
            </div>  

            <div>
                <label for="pays">Pays*</label>
                <input type="text" id="pays" name="pays" required minlength="2" maxlength="50" >
            </div>  

            <div>
                <label for="telephone">Numéro de téléphone*</label>
                <input type="text" id="telephone" name="telephone" required minlength="2" maxlength="20" >
            </div>  


            <button name="boutonAjouter" type="submit" class="btn btn-primary">Ajouter</button><br>
        </form>

        <a href="proprietaires.php">Retour à la liste des propriétaires</a>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  
  </body>

</html>