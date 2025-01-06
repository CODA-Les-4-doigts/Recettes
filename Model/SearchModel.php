<?php

// Fonction pour établir une connexion à la base de données
function get_db_connection()
{
    $dsn = 'mysql:host=localhost;dbname=your_database;charset=utf8mb4';
    $username = 'your_username';
    $password = 'your_password';

    try {
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}

// Fonction pour effectuer une recherche dans la base de données
function search_articles($query)
{
    $db = get_db_connection();

    $sql = "SELECT * FROM articles WHERE recette LIKE :query OR content LIKE :query";
    $stmt = $db->prepare($sql);
    $stmt->execute(['query' => '%' . $query . '%']);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}