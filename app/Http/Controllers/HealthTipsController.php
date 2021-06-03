<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthTipsController extends Controller
{
    public function HealthTips(){
        return view("HealthTips");
    }
}
