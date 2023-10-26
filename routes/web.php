<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OperatorController;

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

//opt

    Route::get('operator/dashboard_opt',[OperatorController::class, 'index'])-> name('dashboard_opt');
    Route::get('operator/generate',[OperatorController::class, 'generate'])-> name('generate');



/*mhs*/
Route::middleware(['isMahasiswa'])->group(function(){
    Route::get('mahasiswa/dashboard_mhs',[MahasiswaController::class, 'index'])-> name('dashboard_mhs');
    // Route::get('mahasiswa/update_mhs',[MahasiswaController::class, 'update_mhs'])-> name('update_mhs');
    // Route::get('mahasiswa/irs',[MahasiswaController::class, 'irs'])-> name('irs');
});
