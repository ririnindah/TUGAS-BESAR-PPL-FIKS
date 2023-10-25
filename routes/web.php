<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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
Route::middleware(['isOperator'])->group(function(){
    Route::get('/dashboard_opt',[OperatorController::class, 'index'])-> name('dashboard_opt');
    Route::get('/generate',[OperatorController::class, 'generate'])-> name('generate');
});


/*mhs*/
Route::middleware(['isMahasiswa'])->group(function(){
    Route::get('/dashboard_mhs',[MahasiswaController::class, 'index'])-> name('dashboard_mhs');
    Route::get('/update_mhs',[MahasiswaController::class, 'update_mhs'])-> name('update_mhs');
    Route::get('/irs',[MahasiswaController::class, 'irs'])-> name('irs');
});
