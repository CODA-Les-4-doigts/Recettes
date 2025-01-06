<?php
?>
<h1 class="text-center">Création de recette</h1>
<form>
    <div class="mb-3">
        <label for="recette-name" class="form-label">Nom de la recette</label>
        <input type="text" class="form-control" id="recette-name" placeholder="Entrez ici le nom de la recette">
    </div>


    <select class="form-select" aria-label="Default select example">
        <div>
            <option selected>Ajoutez un ingrédient </option>
            <input type="text" class="form-control" placeholder="Quantité"><button type="button" id="btn-ingredient">+</button>
        </div></select>
        <ul id="list-ingredient" class="list-group">
        </ul>


    <div class="mb-3">
        <label for="recette-description" class="form-label">Préparation</label>
        <textarea class="form-control" id="description" rows="3"></textarea>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
        <label class="form-check-label" for="flexCheckChecked">
            Recette publier
        </label>
    </div>
    <button type="button" class="btn">Créer</button>
</form>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const recetteNameElement = document.querySelector('#recette-name')
        const listIngredientElement = document.querySelector('#list-ingredient')
        const btnListElement = document.querySelector("#btn-ingredient")
        const descriptionElement = document.querySelector("#description")



    })



</script>