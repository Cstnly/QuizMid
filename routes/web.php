<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;


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

//insert
Route::get('/create', [KaryawanController::class, 'index'])->name('getCreatePage');
Route::post('/create-karyawan', [KaryawanController::class, 'createKaryawan'])->name('createBook');

//View
Route::get('/get-karyawans', [KaryawanController::class, 'getKaryawans'])->name('getKaryawans');

//Update
Route::get('/update-karyawan/{id}', [KaryawanController::class, 'getKaryawanById'])->name('getKaryawanById');

Route::patch('/update-karyawan/{id}', [KaryawanController::class, 'updateKaryawan'])->name('updateKaryawan');

//Delete
Route::delete('/delete-karyawan/{id}', [KaryawanController::class, 'deleteKaryawan'])->name('delete');



