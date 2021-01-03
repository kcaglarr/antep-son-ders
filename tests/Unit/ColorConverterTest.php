<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ColorConverterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function completeHexTest() {
        $this->assertEquals('FFFFFF',completeHex('FFF'));
    }

    public function checkHexFormatTest() {
        //ÖDEV
        hex2rgba('FFFF');
    }

    public function hex2RgbaText() {
        $this->assertEquals('rgba(255,255,255,0.3)',hex2Rgba('#FFF', '0.3'));
        $this->assertEquals('rgba(255,255,255,1)',$this->hex2Rgba('#FFFFFF', '1'));
    }
}
