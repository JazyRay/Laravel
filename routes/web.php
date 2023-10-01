<?php

use App\Http\Controllers\PasienController;
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

Route::get('/pasien', [PasienController::class, 'index'])->name('pasien');
Route::get('/tambahpasien', [PasienController::class, 'tambahpasien'])->name('tambahpasien');
Route::post('/insertdata', [PasienController::class, 'insertdata'])->name('insertdata');
Route::get('/showdata/{id}', [PasienController::class, 'showdata'])->name('showdata');
Route::post('/updatedata/{id}', [PasienController::class, 'updatedata'])->name('updatedata');
Route::get('/deletedata/{id}', [PasienController::class, 'deletedata'])->name('deletedata');


