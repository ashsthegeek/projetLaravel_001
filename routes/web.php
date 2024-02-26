<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
//Importation Controller Plainte
use App\Http\Controllers\PlainteController;

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
    return view('login');
});
//Route qui permet de mettre la page de connection comme Accueil


Route::get('/register', [ClientController::class, 'form_register']);
Route::get('/login', [ClientController::class, 'form_login']);

//Route formulaire de d'inscription
Route::post('/register/traitement', [ClientController::class, 'traitement_register']);

//Route formulaire de connection
Route::post('/login/traitement', [ClientController::class, 'traitement_login']);

//Route vers la page d'accueil Home
Route::get('/home', function(){ return view('home'); });

//Route::get('/', function(){ return view('home'); });

//Route de Deconnection
Route::get('/logout', [ClientController::class, 'logout']);

// ==================================== //
Route::get('/plainte', [PlainteController::class, 'index_plainte']);

