<?php

use App\Http\Controllers\OwnerController;
use App\Models\Car;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use App\Models\Owner;

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

Route::middleware('auth')->group(function () {
    Route::resource('cars', CarController::class);
    Route::resource('owners', OwnerController::class);

});

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('cars', CarController::class);
//Route::resource('owners', OwnerController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
