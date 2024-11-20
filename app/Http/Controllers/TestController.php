<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){

        $x=  "welcome first app";
        $my_num=5;
        $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);

        return view('test')->with('y',$x)->with('my_num',$my_num)->with('cars',$car);
    }
}
