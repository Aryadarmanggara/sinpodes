<?php

use App\Http\Controllers\AdminIdentitasDesaController;
use App\Http\Controllers\AdminSejarahDesaController;
use App\Http\Controllers\AdminVisiMisiController;
use App\Http\Controllers\DashboardController;
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

Route::resource('/', DashboardController::class);

//PROFIL DESA
Route::resource('sejarah', AdminSejarahDesaController::class);
Route::resource('identitas_desa', AdminIdentitasDesaController::class);
Route::resource('visi_misi', AdminVisiMisiController::class);
