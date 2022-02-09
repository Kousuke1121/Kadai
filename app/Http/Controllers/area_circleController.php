<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class area_circleController extends Controller
{
    public function index(Request $request){
        $defNum = $request->input('number');

        return $defNum *$defNum * 3.14;
    }
}
