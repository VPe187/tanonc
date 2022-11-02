<?php

use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MasterdataImport;
use App\Imports\FamilydataImport;
use App\Imports\SocialdataImport;
use App\Imports\GuardiandataImport;
use Illuminate\Support\Facades\Auth;
use App\Models\Masterdata;

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
Route::post('/userprofile', [App\Http\Controllers\UserController::class, 'userprofilestore'])->name('userprofilestore');

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

// tanuló egyedi lekérdezés
Route::get('/uniquedataquery', [App\Http\Controllers\MasterdataController::class, 'student']);


// egyetlen tanuló adatainak lekérése az oktazon alapján
Route::get('/studentedit/{oktazon}', [App\Http\Controllers\MasterdataController::class, 'studentedit']);
// egyetlen tanuló adatainak lekérése a vezetéknév alapján
Route::get('/studentedit/{tanulonev}', [App\Http\Controllers\MasterdataController::class, 'studenteditname']);
//minta
//Route::get('/testuserdata', [App\Http\Controllers\UserController::class, 'testuserdata']);
//Route::get('')


Route::post('/studentquery', [App\Http\Controllers\MasterdataController::class, 'uniquedata']);

//Bejelentkezett felhasználó jelszavának módosítása
Route::get('change_password',[App\Http\Controllers\UserController::class, 'changepassword'])->name('change_password');
Route::post('update_password',[App\Http\Controllers\UserController::class, 'updatepassword'])->name('update_password');

/*
|--------------------------------------------------------------------------
| Import Routes
|--------------------------------------------------------------------------
| 
| Masterdata importálás
*/


Route::post('/masterdataimport', function() {
    if(null == request()->file)
    {
        return redirect()->back();
    }    
    $fileName = time().'_'.request()->file->getClientOriginalName();
    request()->file('file')->storeAs($fileName, 'public');

    Excel::import(new MasterdataImport(), request()->file('file'));
    return redirect()->back()->with('message','Az adatok feltöltése sikeresen megtörtént!');
    });

/*
*Familydata importálás
*/
Route::post('/familydataimport', function() {
    if(null == request()->file)
    {
        return redirect()->back();
    }    
    $fileName = time().'_'.request()->file->getClientOriginalName();
    request()->file('file')->storeAs($fileName, 'public');

    Excel::import(new FamilydataImport(), request()->file('file'));
    return redirect()->back()->with('message','Az adatok feltöltése sikeresen megtörtént!');
    });
/*
*Socialdata importálás
*/
    Route::post('/socialdataimport', function() {
        if(null == request()->file)
        {
            return redirect()->back();
        }    
        $fileName = time().'_'.request()->file->getClientOriginalName();
        request()->file('file')->storeAs($fileName, 'public');
    
        Excel::import(new SocialdataImport(), request()->file('file'));
        return redirect()->back()->with('message','Az adatok feltöltése sikeresen megtörtént!');
        });


        /*
*Guardiandata importálás
*/
    Route::post('/guardiandataimport', function() {
        if(null == request()->file)
        {
            return redirect()->back();
        }    
        $fileName = time().'_'.request()->file->getClientOriginalName();
        request()->file('file')->storeAs($fileName, 'public');
    
        Excel::import(new GuardiandataImport(), request()->file('file'));
        return redirect()->back()->with('message','Az adatok feltöltése sikeresen megtörtént!');
        });