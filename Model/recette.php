<?php

function getAllIngredients($pdo){
    $query = "SELECT * FROM ingredients";

    $statement = $pdo->prepare($query);

    try{
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
        return $e->getMessage();
    }
}

function createRecette(PDO $pdo, string $nomDeplat, string $description){
    $state = $pdo->prepare('INSERT INTO plat (`nom_plat`, `description`) VALUES (:nom_plat, :description)');
    $state->bindParam(':nom_plat', $nomDeplat);
    $state->bindParam(':description', $description);
    try{
        $state->execute();
        return (int)$pdo->lastInsertId();
    }catch(PDOException $e){
        return $e->getMessage();
    }
}

function linkPlatToRecette(PDO $pdo, string $idPlat, string $idIngredient, string $quantity){
    $state = $pdo ->prepare('INSERT INTO recette (`id_plat`,`id_ingredient`,`quantite`) VALUES (:idPlat,:idIngredient,:quantite)');
        $state->bindParam(':idPlat', $idPlat);
    $state->bindParam(':idIngredient', $idIngredient);
    $state->bindParam(':quantite', $quantity);
    try{
        $state->execute();
        return true;
    }catch (Exception $e){
        return $e->getMessage();
    }
}