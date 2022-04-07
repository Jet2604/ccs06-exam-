<?php

use Illuminate\Support\Facades\Route;
use App\Https\Controllers\PlayersController;

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

Route::get('start', [PlayerController::class, 'start']);
Route::post('enter-attempts', [PlayerController::class, 'enterAttempts']);
Route::post('compute-power', [PlayerController::class, 'computePower']);