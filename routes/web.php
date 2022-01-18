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
    return redirect()->route('homepage');
});


Route::get('/Home',[App\Http\Controllers\SiteController::class,'index' ])->name('homepage');
Route::get('/About',[App\Http\Controllers\SiteController::class,'about' ])->name('details');
Route::get('/Artist-Listing',[App\Http\Controllers\SiteController::class,'artistlist' ])->name('artists');
Route::get('/Music-Listing',[App\Http\Controllers\SiteController::class,'musiclibrary' ])->name('musics');
