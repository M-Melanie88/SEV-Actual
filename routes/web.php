<?php

use App\Http\Controllers\AsignacionbienesController;
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
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::Resource('Dashboard', DashboardController::class);

Route::Resource('EquiposPrestados', EquiposprestadosController::class);
Route::controller(EquiposprestadosController::class)->group(function(){
    Route::get('/EquiposPrestados','index');
    Route::post('/EquiposPrestados', 'store');
    Route::post('/EquiposPrestados/{id}', 'update');
    Route::post('/EquiposPrestados/{id}', 'destroy');
    Route::get('/EquiposPrestados/mostrarPdf/{id}', 'mostrarPdf');
});
Route::Resource('CatalogoNombres', CatalogonombresController::class);
Route::Resource('Usuarios', UsuariosController::class);
Route::Resource('CatalogoLogos', CatalogologosController::class);
Route::Resource('CatalogoFirmantes', CatalogofirmantesController::class);
Route::Resource('CatalogoEquipos', TiposequiposController::class);
Route::Resource('CatalogoConsumibles', TiposconsumiblesController::class);
 Route::Resource('ValesConsumibles',ValesconsumiblesController::class);
 Route::Resource('AsignacionBienes',AsignacionbienesController::class);
Route::controller(ValesconsumiblesController::class)->group(function(){
    Route::get('/ValesConsumibles','index');
    Route::post('/ValesConsumibles', 'store');
    Route::post('/ValesConsumibles/{id}', 'update');
    Route::post('/ValesConsumibles/{id}', 'destroy');
    Route::get('/ValesConsumibles/mostrarPdf/{id}', 'mostrarPdf');
        
 

});

Route::controller(AsignacionbienesController::class)->group(function(){
    Route::get('/AsignacionBienes','index');
    Route::post('/AsignacionBienes', 'store');
    Route::post('/AsignacionBienes/{id}', 'update');
    Route::post('/AsignacionBienes/{id}', 'destroy');
    Route::get('/AsignacionBienes/mostrarPdf/{id}', 'mostrarPdf');
});
// Route::Resource('ValesConsumibles',ValesconsumiblesController::class);


// Route::get('/Dashboard', [DashboardController::class, 'eventos']);
// Route::get('/eventos-prestamos', [EquiposprestadosController::class, 'eventos']);
Route::get('/eventos-prestamos', [EquiposprestadosController::class, 'estadosPorDia']);
Route::get('/equipos-por-dia', [EquiposprestadosController::class, 'equiposPorDia']);


