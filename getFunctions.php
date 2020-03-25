<?php
/**
 * @param array $shape The shape data for the required image.
 *
 * @return string The Img tag containing the shape and alternate text.
 */

function getNameImg(array $shape): string {
    return "<img alt='" . $shape["ShapeName"] . "'src='" . $shape["imgurl"] ."' />";
}
?>

