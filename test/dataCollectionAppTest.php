<?php

require_once ('../getFunctions.php');

use PHPUnit\Framework\TestCase;

class dataCollectionAppTest extends TestCase {

    public function testgetNameImg_Sucess() {
        $expected = "<img alt='Circle'src='Url' />";
        $actual = getNameImg(["ShapeName" => "Circle", "imgurl" => "Url"]);

        $this->assertSame($expected, $actual);
    }

    public function testgetNameImg_Error_String() {
        $this->expectException(TypeError::class);

        getNameImg("For the Error!");
    }

    public function testgetNameImg_Error_Empty() {
        $this->expectException(ArgumentCountError::class);

        getNameImg();
    }

}
