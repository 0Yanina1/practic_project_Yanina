<?php

use App\Http\Controllers\User\CreateController;
use App\Http\Controllers\User\DestroyController;
use App\Http\Controllers\User\EditController;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\User\ShowController;
use App\Http\Controllers\User\StoreController;
use App\Http\Controllers\User\UpdateController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
//Route::group([
//    'middleware' => [
//        'role:manager|admin|developer',
//        'auth',
//        'web'
//    ],
//
//    'prefix' => 'admin'
//    ], function () {

    Route::get('/users', [IndexController::class, '__invoke'])->name('user.index');;
    Route::get('/users/create', [CreateController::class, '__invoke'])->name('user.create');;
    Route::post('/users', [StoreController::class, '__invoke'])->name('user.store')->middleware('auth');;
    Route::get('/users/{user}', [ShowController::class, '__invoke'])->name('user.show')->middleware('auth');;
    Route::get('/users/{user}/edit', [EditController::class, '__invoke'])->name('user.edit')->middleware('auth');;
    Route::get('/users/{user}/edit_pass', [EditController::class, 'edit_pass'])->name('user.edit_pass')->middleware('auth');;
    Route::patch('/users/update_password/{user}', [UpdateController::class, 'update_password'])->name('user.update_password')->middleware('auth');;
    Route::patch('/users/{user}', [UpdateController::class, '__invoke'])->name('user.update')->middleware('auth');;
    Route::delete('/users/{user}', [DestroyController::class, '__invoke'])->name('user.delete')->middleware('auth');;
//});

Route::get('/home', [\App\Http\Controllers\User\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
