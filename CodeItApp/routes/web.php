<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvisController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Models\Service;
use Illuminate\Http\Request;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Define the /client route
Route::get('/client', [App\Http\Controllers\ClientController::class, 'index'])->name('client');
Route::get('/responsable', [App\Http\Controllers\ResponsableController::class, 'index'])->name('responsable');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
//Route::get('/users', [App\Http\Controllers\AdminController::class, 'show']);
Route::get('/demandes', [App\Http\Controllers\ClientController::class, 'demandes'])->name('demandes');
Route::get('/client', [ServiceController::class, 'show'])->name('client');
Route::get('/users', [UserController::class, 'show'])->name('users');
Route::post('/users/block/{id}', [UserController::class, 'block'])->name('users.block');
Route::get('/reviews', [AvisController::class, 'getAllAvis'])->name('reviews');















