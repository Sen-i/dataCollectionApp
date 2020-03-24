<?php
/**
 * @param array $shape The shape data for the required image.
 *
 * @return string The Img tag containing the shape and alternate text.
 */
function getNameImg(array $shape): string {
    return "<img alt=\"" . $shape["ShapeName"] . "\"src=\"" . $shape["imgurl"] ."\" />";
}

/**
 * @param array $shape The shape data for which the name is required
 *
 * @return string The name of the shape
 */
function getShapeName(array $shape): string {
    return $shape["ShapeName"];
}

/**
 * @param array $shape The shape data for which the number of corners is required
 *
 * @return string The number of corners in the shape
 */
function getNumberOfCorners(array $shape): int {
    return $shape["NumberOfCorners"];
}

/**
 * @param array $shape The shape data for which the formula is required
 *
 * @return string The formula to calculate the area of the shape
 */
function getFormula(array $shape): string {
    return $shape["AreaFormula"];
}
?>

