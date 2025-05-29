<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EquiposprestadosController;
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
Route::Resource('Dashboard', DashboardController::class);

Route::get('/', function () {
    return view('Dashboard');
});


Route::Resource('EquiposPrestados', EquiposprestadosController::class);



