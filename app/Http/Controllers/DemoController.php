<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){
        return "<h1>Hello demo world</h1>";
    }

    public function readParam($name){
        return "<h1>Hello $name</h1>";
    }
}
