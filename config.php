<?php

$db = new PDO('mysql:host=DB;dbname=shapeDB','root','password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `ID`, `ShapeName`, `NumberOfCorners`, `AreaFormula`, `Comments` FROM `shapes`");
$query->execute();
$result = $query->fetchAll();

foreach ($result as $row)
    {
        echo "id: " . $row["ID"]. " - Shape Name: " . $row["ShapeName"]. " " . $row["NumberOfCorners"]. " " . $row["AreaFormula"] . " " . $row["Comments"]."<br>";
    };
