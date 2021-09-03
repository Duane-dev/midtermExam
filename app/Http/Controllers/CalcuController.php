<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcuController extends Controller
{

    public function PerimeterOfRectangle($n1,$n2){

        $result = $n1 *2 + $n2 * 2;
    	return $result;
    }

    public function VolumeOfCubold($n1,$n2,$n3){

        $result = $n1 *  $n2 * $n3;
    	return $result;
    }

    public function AreaOfSquare($n1){

        $result = $n1 **2;
    	return $result;
    }
  
}
