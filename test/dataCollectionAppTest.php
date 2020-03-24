<?php

require_once ('../getFunctions.php');

use PHPUnit\Framework\TestCase;


class dataCollectionAppTest extends TestCase {

    public function testgetNameImg() {
        $expected = "<img alt=\"Circle\"src=\"Url\" />";
        $actual = getNameImg(["ShapeName" => "Circle", "imgurl" => "Url"]);

        $this->assertSame($expected, $actual);
    }

    public function testErrorWhenString() {
        $this->expectException(TypeError::class);

        getNameImg("For the Error!");
    }

    public function testErrorWhenEmpty() {
        $this->expectException(ArgumentCountError::class);

        getNameImg();
    }

    public function testgetShapeName() {
        $expected = "Circle";
        $actual = getShapeName(["ShapeName" => "Circle"]);

        $this->assertSame($expected, $actual);
    }

    public function testErrorWhenString2() {
        $this->expectException(TypeError::class);

        getShapeName("For the Error!");
    }

    public function testErrorWhenEmpty2() {
        $this->expectException(ArgumentCountError::class);

        getShapeName();
    }

    public function testgetNumberOfCorners() {
        $expected = 0;
        $actual = getNumberOfCorners(["NumberOfCorners" => 0 ]);

        $this->assertSame($expected, $actual);
    }

    public function testErrorWhenString3() {
        $this->expectException(TypeError::class);

        getNumberOfCorners("For the Error!");
    }

    public function testErrorWhenEmpty3() {
        $this->expectException(ArgumentCountError::class);

        getNumberOfCorners();
    }

    public function testgetFormula() {
        $expected = "CircleFormula";
        $actual = getFormula(["AreaFormula" => "CircleFormula"]);

        $this->assertSame($expected, $actual);
    }

    public function testErrorWhenString4() {
        $this->expectException(TypeError::class);

        getFormula("For the Error!");
    }

    public function testErrorWhenEmpty4() {
        $this->expectException(ArgumentCountError::class);

        getFormula();
    }
}
