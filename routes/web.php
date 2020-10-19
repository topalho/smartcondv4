<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdministradorasController;
use App\Http\Controllers\BoletosController;
use App\Http\Controllers\UnidadesController;
use App\Http\Controllers\CondominiosController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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
    return view('teste');
});
Route::get('/layout', function () {
    return view('vendor.adminlte.page');
});
Route::get('/admin',[UserController::class, 'dashboard'])->name('admin');
Route::post('/admin/login/do',[UserController::class, 'login'])->name('admin.login.do');




Route::get('/administradoras',[AdministradorasController::class, 'index'])->name('administradoras.index');
Route::get('/condominios',[CondominiosController::class, 'index'])->name('condominios.index');
Route::get('/unidades',[UnidadesController::class, 'index'])->name('unidades.index');
Route::get('/boletos',[BoletosController::class, 'index'])->name('boletos.index');
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/login',[LoginController::class, 'index'])->name('login.index');



