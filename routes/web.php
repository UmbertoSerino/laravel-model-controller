<?php

use Illuminate\Support\Facades\Route;
// collegare il controller in cui è stato inserito
use App\Http\Controllers\PageController as PageController;
use App\Http\Controllers\MovieController as MovieController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// inserire il controller e il nome del metodo
Route::get('/', [PageController::class, 'index']);
Route::get('/movies', [MovieController::class, 'index']);
