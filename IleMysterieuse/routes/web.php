<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlgorithmeController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/descriptionJV', [App\Http\Controllers\HomeController::class, 'description'])->name('descriptionJV');
Route::get('/home/leLivre', [App\Http\Controllers\HomeController::class, 'leBonLivre'])->name('leLivre');
Route::get('/EnigmeAlgorithmique', [AlgorithmeController::class, 'index'])->name('index');
Route::get('/EnigmeAlgorithmique/exo1', [AlgorithmeController::class, 'exo1'])->name('exo1');
Route::get('/EnigmeAlgorithmique/exo2', [AlgorithmeController::class, 'exo2'])->name('exo2');
