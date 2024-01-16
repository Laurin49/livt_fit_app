<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PracticeWorkoutController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\WorkoutController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/show', [IndexController::class, 'show'])->name('index.show');
Route::get('/create', [IndexController::class, 'create'])->name('index.create');

Route::resource('/workouts', WorkoutController::class)
  ->only('create', 'store', 'edit', 'update', 'destroy')
  ->middleware('auth');
  Route::resource('/workouts', WorkoutController::class)
  ->only('index', 'show');

Route::get('login', [AuthController::class, 'create'])->name('login');
Route::post('login', [AuthController::class, 'store'])->name('login.store');
Route::delete('logout', [AuthController::class, 'destroy'])->name('logout');

Route::resource('user-account', UserAccountController::class)->only(['create', 'store']);

Route::prefix('practice')
  ->name('practice.')
  ->middleware('auth')
  ->group(function() {
    Route::resource('workout', PracticeWorkoutController::class);
  });