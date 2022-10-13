<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Felhasználók route
Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);

Route::get('/userprofile', [App\Http\Controllers\UserController::class, 'userprofile'])->name('userprofile');

//tesztelés volt
Route::get('/aboutus', [App\Http\Controllers\AboutUsController::class, 'index']);

//kirkieg 1 import
Route::get('/familydataimport', [App\Http\Controllers\FamilydataController::class, 'index']);

//kir törzsadat  import
Route::get('/masterdataimport', [App\Http\Controllers\MasterdataController::class, 'masterdata']);

//szociális import
Route::get('/socialdataimport', [App\Http\Controllers\SocialdataController::class, 'socialdata']);

//gondviselő import
Route::get('/guardiandataimport', [App\Http\Controllers\GuardiandataController::class, 'guardiandata']);

//minta
//Route::get('/testuserdata', [App\Http\Controllers\UserController::class, 'testuserdata']);
