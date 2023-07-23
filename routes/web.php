<?php

use App\Http\Controllers\LocatarioController;
use App\Http\Controllers\FiadorController;
use App\Http\Controllers\ProprietarioController;


use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::resource('locatarios', LocatarioController::class);
Route::resource('fiadores', FiadorController::class);
Route::resource('proprietarios', ProprietarioController::class);


// Route::get('/proprietarios/create', 'ProprietarioController@create')->name('proprietarios.create');;;

// // Rota pública para a view "create" do Locatário
// Route::get('/locatarios/create', 'LocatarioController@create')->name('locatarios.create');;;

// // Rota pública para a view "create" do Fiador
// Route::get('/fiadores/create', 'FiadorController@create')->name('fiadores.create');;



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
