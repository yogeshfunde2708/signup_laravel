<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/',[UserController::class,'home'])->name('users.home');
Route::get('users/signup',[UserController::class,'signup'])->name('users.signup');
Route::POST('users/store',[UserController::class,'store'])->name('users.store');
Route::get('users/search', [UserController::class, 'search'])->name('users.search');
Route::get('users/clear', [UserController::class, 'clear'])->name('users.clear');
Route::get('users/{id}/edit',[UserController::class,'edit']);
Route::put('users/{id}/update',[UserController::class,'update']);
Route::get('users/{id}/delete',[UserController::class,'delete']);