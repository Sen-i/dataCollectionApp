<?php

$db = new PDO('mysql:host=DB;dbname=shapeDB','root','password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$sql = "SELECT ID, ShapeName, NumberOfCorners, AreaFormula, Comments FROM shapes";
$result = $db->query($sql);

foreach ($result as $row)
    {
        echo "id: " . $row["ID"]. " - Shape Name: " . $row["ShapeName"]. " " . $row["NumberOfCorners"]. " " . $row["AreaFormula"] . " " . $row["Comments"]."<br>";
    };
