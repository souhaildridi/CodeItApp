<?php

use App\Http\Controllers\AvisController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{id}/block', [UserController::class, 'block'])->name('users.block');


Route::get('/profile', [ProfilController::class, 'show'])->name('profile.show');
Route::get('/profile/edit', [ProfilController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [ProfilController::class, 'update'])->name('profile.update');



Route::post('/services/{serviceId}/reserve', [UserController::class, 'reserveService'])->name('services.reserve');
Route::post('/services/{serviceId}/reviews', [AvisController::class, 'store'])->name('reviews.store');
Route::get('/services/search', [ServiceController::class, 'search'])->name('services.search');

