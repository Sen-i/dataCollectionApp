<?php

//$db = new PDO('mysql:host=DB;dbname=shapeDB','root','password');
//$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

/**
 * @return PDO A database instance
 */

function connectDB(): PDO {
    $database = new PDO("mysql:host=DB;dbname=shapeDB", "root", "password");
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $database;
}

/**
 * @param PDO $database The database you would like to get the data from.
 *
 * @return array The shapes in the database.
 */

function getFromDatabase(PDO $database): array {
    $query = $database->prepare("SELECT * FROM `shapes`");
    $query->execute();
    return $query->fetchAll();
}
