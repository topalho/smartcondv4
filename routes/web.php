<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdministradorasController;
use App\Http\Controllers\BoletosController;
use App\Http\Controllers\UnidadesController;
use App\Http\Controllers\CondominiosController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerfilController;
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

// Rotas da página principal

Route::get('/', function () {
    return view('portal.dashboard.index');
});

//Rotas dos controladores
Route::get('/administradoras',[AdministradorasController::class, 'index'])->name('administradoras.index');
Route::get('/condominios/index',[CondominiosController::class, 'index'])->name('condominios.index');
Route::get('/unidades',[UnidadesController::class, 'index'])->name('unidades.index');
Route::get('/perfil',[PerfilController::class, 'index'])->name('perfil.index');
Route::get('/boletos',[BoletosController::class, 'index'])->name('boletos.index');
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard2',[DashboardController::class, 'dashboardv2'])->name('dashboard.index2');
Route::get('/login',[LoginController::class, 'index'])->name('login.index');
Route::get('/condominios/create',[CondominiosController::class, 'create'])->name('condominios.create');
Route::get('/condominios',[CondominiosController::class, 'store'])->name('condominios.create.put');
Route::get('/unidades/create',[UnidadesController::class, 'create'])->name('unidades.create');



