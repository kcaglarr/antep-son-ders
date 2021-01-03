<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorConverterController extends Controller
{
    public function hex2rgba($hex, $a = 0) {
        //#FFFFFF
        $hex = ltrim($hex,'#');

        if (strlen($hex) == 3) {
            $hex = $this->completeHex($hex);
        }

        $this->checkHexFormat($hex);

        $hexArray = str_split($hex,2);
        $hexArray = array_map(function ($hex){
            return hexdec($hex);
        }, $hexArray);

        $hexArray['alpha'] = $a;

        return "rgb($hexArray[0], $hexArray[1], $hexArray[2], $hexArray[alpha])";
    }

    function completeHex($hex) {
        //#FFF -> #FFFFFF
        return $hex[0].$hex[0].$hex[1].$hex[1].$hex[2].$hex[2];
    }

    //Error handling
    function checkHexFormat($hex) {
        if (strlen($hex) != 6) {
            throw new \Exception('Hex code can be 6 digits');
        }

        if (ctype_digit($hex) == true) {
            throw new \Exception('Invalid format');
        }
    }
}


///TEST EDILMESI ISTENEN DURUMLAR
/// 1- FFF -> FFFFFF
/// 2- rgba(255,255,255,0.3) Eşit mi? #FFF, 0.3
/// 3- rgba(255,255,255,1) Eşit mi? #FFFFFF, 1
