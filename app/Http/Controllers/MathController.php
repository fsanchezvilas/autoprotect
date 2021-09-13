<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function index(){
        return view('index');
    }

    public function square (Request $request){
        $square = $request->square;
    return view('index')->with('square',$square);
    }
}
