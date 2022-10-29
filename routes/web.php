<?php

use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MasterdataImport;
use App\Imports\FamilydataImport;
use App\Imports\SocialdataImport;
use App\Imports\GuardiandataImport;

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
Route::post('/userprofileedit', [App\Http\Controllers\UserController::class, 'userprofileedit'])->name('userprofileedit');

////rólunk
Route::get('/aboutus', [App\Http\Controllers\AboutUsController::class, 'index']);

// kirkieg 1 import
Route::get('/familydataimport', [App\Http\Controllers\FamilydataController::class, 'index']);

//kir törzsadat  import
Route::get('/masterdataimport', [App\Http\Controllers\MasterdataController::class, 'masterdata']);   



//[App\Http\Controllers\MasterdataController::class, 'masterdata']);

//szociális import
Route::get('/socialdataimport', [App\Http\Controllers\SocialdataController::class, 'socialdata']);

//gondviselő import
Route::get('/guardiandataimport', [App\Http\Controllers\GuardiandataController::class, 'guardiandata']);

//adatvédelmi nyilatkozat
Route::get('/privacy', [App\Http\Controllers\FooterController::class, 'privacy']);

//family data manuális
Route::get('/familydatamanual', [App\Http\Controllers\FamilydataManualController::class, 'index']);

//gondviselő data manuális
Route::get('/guardiandatamanual', [App\Http\Controllers\GuardiandataManualController::class, 'index']);

//minta
//Route::get('/testuserdata', [App\Http\Controllers\UserController::class, 'testuserdata']);