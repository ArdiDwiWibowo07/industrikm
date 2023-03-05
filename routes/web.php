<?php

use App\Http\Controllers\DatabasesController;
use App\Http\Controllers\IjinController;
use App\Http\Controllers\KapanewonsController;
use App\Http\Controllers\OmzetsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/databases', DatabasesController::class);
Route::resource('/kapanewons', KapanewonsController::class);
Route::resource('/omzets', OmzetsController::class);
Route::resource('/ijins', IjinController::class);