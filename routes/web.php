<?php

use App\Http\Controllers\CatalogofirmantesController;
use App\Http\Controllers\CatalogologosController;
use App\Http\Controllers\CatalogonombresController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EquiposprestadosController;
use App\Http\Controllers\TiposconsumiblesController;
use App\Http\Controllers\TiposequiposController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ValesconsumiblesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;



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
    return view(view: 'Dashboard');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
 Route::Resource('Dashboard', DashboardController::class);

Route::Resource('EquiposPrestados', EquiposprestadosController::class);
Route::Resource('CatalogoNombres', CatalogonombresController::class);
Route::Resource('Usuarios', UsuariosController::class);
Route::Resource('CatalogoLogos', CatalogologosController::class);
Route::Resource('CatalogoFirmantes', CatalogofirmantesController::class);
Route::Resource('CatalogoEquipos', TiposequiposController::class);
Route::Resource('CatalogoConsumibles', TiposconsumiblesController::class);
Route::Resource('ValesConsumibles',ValesconsumiblesController::class);
});

require __DIR__.'/auth.php';




