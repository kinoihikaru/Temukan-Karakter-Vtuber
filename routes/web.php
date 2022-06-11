<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\MetodeController;
use App\Http\Controllers\TestMetodeController;

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

Route::get('/', [ViewController::class, 'home' ] )->name('home');

Route::get('/test', [ViewController::class, 'test' ])->name('test');

Route::post('/getData',[MetodeController::class,'__construct'])->name("data");

Route::post('/viewKarakter',[MetodeController::class,'viewKarakter'])->name("karakter");
Route::post('/viewTableKarakter',[MetodeController::class,'viewTableKarakter'])->name("t_karakter");
Route::post('/viewBigfive',[MetodeController::class,'viewBigfive'])->name("bigfive");
Route::post('/viewGenre',[MetodeController::class,'viewGenre'])->name("genre");

Route::get('/viewUser',[MetodeController::class,'viewUser'])->name("ser");

Route::post('/user-save' ,[MetodeController::class, 'store'])->name('user.save');

Route::get('/getDataCoba1',[CobaController::class,'getDaCoba1']);

Route::get('/testSAW' ,[TestMetodeController::class, 'testSAW']);
Route::get('/testTopsis' ,[TestMetodeController::class, 'testTopsis']);
