<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainsController;


    // Route::get('/', function(){
        
    //     return 'ciao';
    // });
    Route::get('/', [TrainsController::class, 'index'])->name('trains');