<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RepresentativeController;
use Illuminate\Support\Facades\Route;

Route::prefix('client')->group(function (){
   Route::post('/create', [ClientController::class, 'createClient']);
   Route::put('/update', [ClientController::class, 'updateClient']);
   Route::delete('/delete/{id}', [ClientController::class, 'deleteClient']);
   Route::get('/list', [ClientController::class, 'listClients']);
});
Route::prefix('representative')->group(function (){
   Route::post('/create', [RepresentativeController::class, 'createRepresentative']);
});
Route::prefix('city')->group(function (){
    Route::post('/create', [CityController::class, 'createCity']);
});
