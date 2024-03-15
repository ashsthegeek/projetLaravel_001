<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
//Importation Controller Plainte
use App\Http\Controllers\PlainteController;
//Importation Controller Convocation
use App\Http\Controllers\ConvocationController;



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


// ROUTE PLAINTES //
Route::get('/delete-plainte/{id}', [PlainteController::class, 'delete_plainte'])->name('plainte');
Route::get('/update-plainte/{id}', [PlainteController::class, 'update_plainte'])->name('plainte');
Route::post('/update/traitement', [PlainteController::class, 'update_plainte_traitement']);
Route::get('/plainte', [PlainteController::class, 'liste_plainte'])->name('plainte');
Route::get('/ajouter', [PlainteController::class, 'ajouter_plainte'])->name('ajouter_plainte');
Route::post('/ajouter/traitement', [PlainteController::class, 'ajouter_plainte_traitement']);

// ROUTE CONVOCAIION //

Route::get('/convocation', [ConvocationController::class, 'liste_convocation'])->name('convocation');