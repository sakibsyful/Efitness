<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmiController extends Controller
{
    public function Bmi(){
        return view("Bmi");
    }
}
