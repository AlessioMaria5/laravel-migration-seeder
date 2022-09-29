<?php

namespace App\Http\Controllers;

use App\SeedTrain;
use App\Train;
use Illuminate\Http\Request;

class SeedTrainController extends Controller
{
    public function index(){

        $mytrains = SeedTrain::all();

        return view('TrainsJumbo', compact('mytrains')); 
    }
}
