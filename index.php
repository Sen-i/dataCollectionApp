<?php
require_once "config.php";
$query = $db->prepare("SELECT * FROM `shapes`");
$query->execute();
$shapes = $query->fetchAll();

//foreach ($shapes as $row)
//{
//    echo "id: " . $row["ID"]. " - Shape Name: " . $row["ShapeName"]. " " . $row["NumberOfCorners"]. " " . $row["AreaFormula"] . " " . $row["Comments"]."<br>";
//};
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Collection of Shapes</title>
    </head>
    <body>
        <header>
            <h1>Collection of shapes</h1>
        </header>
        <main>
            <section class ="shapeContainer">
                <?php foreach ($shapes as $shape) { ?>
                    <div class="shape">
                        <img alt="<?php echo $shape["ShapeName"] ?> Artwork" src="<?php echo $shape["imgurl"] ?>" />
                        <h3>
                            Number of corners -<?php echo $shape["NumberOfCorners"].'<br>'; ?> The area formula - <?php echo $shape["AreaFormula"]; ?>
                        </h3>
                    </div>
                <?php } ?>
            </section>
        </main>
    </body>
</html>