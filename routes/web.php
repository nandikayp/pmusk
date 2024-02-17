<?php

use App\Http\Controllers\SoalCon;
use App\Http\Controllers\UserCon;
use App\Http\Controllers\LoginCon;
use App\Http\Controllers\RegisterCon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardCon;

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
    return view('home');
});

Route::post('actionlogin', [LoginCon::class, 'actionlogin'])->name('actionlogin');
Route::get('dashboard', [DashboardCon::class, 'index'])->name('dashboard')->
middleware('auth');
Route::get('actionlogout', [LoginCon::class, 'actionlogout'])->name('actionlogout')->
middleware('auth');

Route::get('register', [RegisterCon::class, 'register'])->name('register');
Route::post('register/action', [RegisterCon::class, 'actionregister'])-> name('actionregister');


Route::get('/user/tampil', [UserCon::class, 'index'])->name('indexUser')->middleware('auth');
Route::get('/user/input', [UserCon::class, 'input'])->name('inputUser')->middleware('auth');
Route::post('/user/storeinput', [UserCon::class, 'storeinput'])->name('storeInputUser')->middleware('auth');
Route::get('/user/update/{id}', [UserCon::class, 'update'])->name('updateUser')->middleware('auth');
Route::post('/user/storeupdate', [UserCon::class, 'storeupdate'])->name('storeUpdateUser')->middleware('auth');
Route::get('/user/delete/{id}', [UserCon::class, 'delete'])->name('deleteUser')->middleware('auth');


Route::get('/soal', [SoalCon::class, 'index'])->name('indexSoal')->middleware('auth');
Route::get('/soal/input', [SoalCon::class, 'input'])->name('inputSoal')->middleware('auth');
Route::post('/soal/storeinput', [SoalCon::class, 'storeinput'])->name('storeInputSoal')->middleware('auth');
Route::get('/soal/update/{id}', [SoalCon::class, 'update'])->name('updateSoal')->middleware('auth');
Route::post('/soal/storeupdate', [SoalCon::class, 'storeupdate'])->name('storeUpdateSoal')->middleware('auth');
Route::get('/soal/delete/{id}', [SoalCon::class, 'delete'])->name('deleteSoal')->middleware('auth');


