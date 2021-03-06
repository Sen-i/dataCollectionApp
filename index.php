<?php

require_once "config.php";
require_once "getFunctions.php";

$db = connectDB();
$shapes = getShapes($db);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Collection of Shapes</title>
        <link rel="stylesheet" type="text/css" href="normalize.css">
        <link rel="stylesheet" type="text/css" href="shapeCollectionDesign.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header>
            <h1>
                Collection of shapes
            </h1>
        </header>
        <main>
            <section class ="shapeContainer">
                <?php foreach ($shapes as $shape) { ?>
                    <div class="shape">
                        <div class="imgcontainer">
                            <?php echo getNameImg($shape); ?>
                        </div>
                        <div class="datacontainer">
                            <h2>
                                <?php echo $shape["ShapeName"]; ?>
                            </h2>
                            <h3>
                                Number of corners :- <?php echo $shape["NumberOfCorners"]; ?>
                            </h3>
                            The area formula :- <?php echo $shape["AreaFormula"] ?>
                        </div>
                    </div>
                <?php } ?>
            </section>
        </main>
    </body>
</html>
