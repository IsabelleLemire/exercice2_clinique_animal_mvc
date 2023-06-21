<div class="card">
    <h1>Éditer un propriétaire</h1>
    <form method="POST">
        <div>
            <label for="nom">Nom*</label>
            <input type="text" id="nom" name="nom" required minlength="2" maxlength="50" value="<?= $proprietaire->nom ?>"  >
        </div>

        <div>
            <label for="prenom">Prénom*</label>
            <input type="text" id="prenom" name="prenom" required minlength="2" maxlength="50" value="<?= $proprietaire->prenom ?>" >
        </div> 

        <div>
            <label for="adresse">Adresse*</label>
            <input type="text" id="adresse" name="adresse" required minlength="2" maxlength="255" value="<?= $proprietaire->adresse ?>"  >
        </div> 

        <div>
            <label for="ville">Ville*</label>
            <input type="text" id="ville" name="ville" required minlength="2" maxlength="50" value="<?= $proprietaire->ville ?>" >
        </div> 

        <div>
            <label for="code_postal">Code Postal*</label>
            <input type="text" id="code_postal" name="code_postal" required minlength="2" maxlength="7" value="<?= $proprietaire->code_postal ?>" >
        </div>             

        <div>
            <label for="province">Province*</label>
            <input type="text" id="province" name="province" required minlength="2" maxlength="50" value="<?= $proprietaire->province ?>"  >
        </div>  

        <div>
            <label for="pays">Pays*</label>
            <input type="text" id="pays" name="pays" required minlength="2" maxlength="50" value="<?= $proprietaire->pays ?>" >
        </div>  

        <div>
            <label for="telephone">Numéro de téléphone*</label>
            <input type="text" id="telephone" name="telephone" required minlength="2" maxlength="20" value="<?= $proprietaire->telephone ?>" >
        </div>  

        <button name="boutonEditer" type="submit" class="btn btn-primary">Modifier le propriétaire</button>
    </form>
</div>