<?php

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

function getShapes(PDO $database): array {
    $query = $database->prepare("SELECT `ID`, `ShapeName`, `NumberOfCorners`, `AreaFormula`, `Comments`,`imgurl` FROM `shapes`");
    $query->execute();
    return $query->fetchAll();
}
