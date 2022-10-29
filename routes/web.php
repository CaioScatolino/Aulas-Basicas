<?php

use App\Http\Controllers\Exercicio1Controller;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index']);
Route::get('/pessoas', [Exercicio1Controller::class, 'pessoas']);
Route::get('/avatares', [SiteController::class, 'exercicio2']);
