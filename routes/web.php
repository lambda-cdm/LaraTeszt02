<?php

use App\Http\Controllers\SzamoloController;
use Illuminate\Support\Facades\Route;

Route::get('/szamitas', [SzamoloController::class, "szamitas"]);
