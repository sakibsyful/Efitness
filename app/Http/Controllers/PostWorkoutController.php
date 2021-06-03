<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostWorkoutController extends Controller
{
    public function PostWorkout(){
        return view("PostWorkout");
    }
}
