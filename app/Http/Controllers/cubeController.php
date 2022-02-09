<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cubeController extends Controller
{
    public function index(Request $request){
        $defNum = $request->input('number');

        return $defNum *$defNum * $defNum;
    }
}
