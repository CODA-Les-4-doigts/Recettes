<?php
?>
<h1 class="text-center">Création de recette</h1>
<form>
    <div class="mb-3">
        <label for="recette-name" class="form-label">Nom de la recette</label>
        <input type="text" class="form-control" id="recette-name" placeholder="Entrez ici le nom de la recette">
    </div>
    <select class="form-select" aria-label="Default select example">
        <option selected>Séléctionnez les </option>
        <option value="1">One</option>

    </select>

    <div class="mb-3">
        <label for="recette-description" class="form-label">Préparation</label>
        <textarea class="form-control" id="recette-description" rows="3"></textarea>
    </div>
    <button type="button" class="btn">Créer</button>
</form>