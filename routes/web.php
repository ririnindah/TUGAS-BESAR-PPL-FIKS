<?php

use App\Http\Middleware\isOperator;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/',[LoginController::class,'index']);
Route::post('/',[LoginController::class,'authenticate']);

Route::get('/logout',[LoginController::class,'getLogout']);

//opt

// Route::middleware(['isOperator'])->group(function(){
//     Route::get('operator/dashboard_opt',[OperatorController::class, 'index'])-> name('dashboard_opt');
//     Route::get('operator/generate',[OperatorController::class, 'generate'])-> name('generate');
// });

Route::get('operator/dashboard_opt',[OperatorController::class, 'index'])-> name('dashboard_opt');
Route::get('operator/generate',[OperatorController::class, 'generate'])-> name('generate');
    



//mhs

// Route::middleware(['isMahasiswa'])->group(function(){
//     Route::get('mahasiswa/dashboard_mhs',[MahasiswaController::class, 'index'])-> name('dashboard_mhs');
//     Route::get('mahasiswa/update_mhs',[MahasiswaController::class, 'update_mhs'])-> name('update_mhs');
//     Route::get('mahasiswa/irs',[MahasiswaController::class, 'irs'])-> name('irs');
// });

Route::get('mahasiswa/dashboard_mhs',[MahasiswaController::class, 'index'])-> name('dashboard_mhs');