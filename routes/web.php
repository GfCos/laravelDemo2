<?php

use Illuminate\Support\Facades\Route;
use App\Models\Person;
use App\Http\Controllers\PersonController;

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

Route::get('/', function () {
    return view('welcome',['persons' => Person::all(), 'titre' => "des gens"]);
})->name('accueil');
Route::get('/allPersons',[PersonController::class, 'index']);

Route::get('/ajouter',[PersonController::class, 'create'])->name('ajouter.personne');

Route::post('/ajouter',[PersonController::class, 'store']);

Route::get('/edit/{id}',[PersonController::class, 'edit'])->name('editer.personne');

Route::patch('/edit/{id}',[PersonController::class, 'update'])->name('modifier.personne');

Route::get('/effacer/{id}',[PersonController::class, 'destroy'])->name('effacer.personne');