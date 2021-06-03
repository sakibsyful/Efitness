<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProteinCalculatorController extends Controller
{
    public function ProteinCalculator(){
        return view("ProteinCalculator");
    }
}
