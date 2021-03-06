<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::where('departure_date','2022-04-22')->get();

        return view('home', compact('trains'));
    }
}
