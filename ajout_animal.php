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

    <div class="container-fluid">
        <h2>Ajouter un client</h2>

        <form method="POST" class="form-add-client">
            <div>
                <label for="nom">Nom de l'animal*</label>
                <input type="text" id="nom" name="nom" required minlength="2" maxlength=" " >
            </div>

            <div>
                <label for="birthday">Date de naissance de l'animal*</label>
                <input type="date" id="birthday" name="birthday" required>
            </div>

            <div>
                <label for="type-select">Choisi le type d'animal</label>
                <select name="animals" id="type-select" required>
                    <option value="">Choisir</option>
                    <option value="chat">Chat</option>
                    <option value="chien">Chien</option>
                    <option value="oiseaux">Oiseaux</option>
                    <option value="serpent">Serpent</option>
                    <option value="grand-animaux">Grand animaux</option>
                </select> 
            </div>

            <div>  
                <label for="nom">Nom du propriétaire*</label>
                <input type="text" id="nom" name="nom" required>            
            </div>

            <div>  
                <label for="telephone">Numéro de téléphone*</label>
                <input type="phone" id="telephone" name="telephone" required>            
            </div>   

            <button name="boutonAjouter" type="submit" class="btn btn-primary">Ajouter</button><br>
        </form>

        <a href="animaux.php">Retour à la liste des animaux</a>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  
  </body>

</html>