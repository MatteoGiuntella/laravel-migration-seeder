<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trains;

class TrainsController extends Controller
{
 
    public function index()
    {
        // SELECT * FROM movies
        $trains = Trains::all();
        // OPPURE
        // $movies = Movie::all();

        // resources/views/movies/index.blade.php
        return view('welcome', compact('trains'));
    }
}
