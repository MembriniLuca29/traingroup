<?php

use App\Http\Controllers\Guest\PassengerController;
use Illuminate\Support\Facades\Route;
use App\Models\Passenger;

Route::get('/passengers', function () {
    $passengers = Passenger::all();
    dd($passengers); 
})->name('passengers.index');


Route::get('/', [PassengerController::class, 'index'])->name('home');