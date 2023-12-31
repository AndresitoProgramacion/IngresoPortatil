<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\controladorPortatil;
use App\Http\Controllers\RegisteredUserController;
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


Route::view('/', 'auth.login')->name('welcome');


Route::view('/login' , 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);


Route::get("/portatiles", [controladorPortatil::class, 'index'])->name("portatil.index");
// Route::patch();
// Route::delete('users/{portwt}', function ($id) {

// });();

// route('por.dele', $portatilg)
