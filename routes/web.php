<?php
/*
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
*/

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;
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

Route::get('/', [Authcontroller::class, 'index'])->name('claro.index');
Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('claro.login');
Route::get('/registro', [Authcontroller::class, 'create'])->name('claro.registro');
Route::get('/registro/{id}/cavs',[Authcontroller::class, 'cavs']);
Route::post('/registro', [Authcontroller::class, 'store'])->name('claro.store'); 


Route::middleware('auth')->group(function () {
    
    Route::get('/dashboard', function () { return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::view('/activaciones', 'panel.activaciones')->name('activaciones');
    Route::view('/jugar', 'panel.jugar')->name('jugar');
    Route::view('/premios', 'panel.premios')->name('premios');
    Route::view('/ganadores', 'panel.ganadores')->name('ganadores');
    Route::view('/tyc', 'panel.tyc')->name('terminosycondiciones');
    Route::view('/perfil', 'panel.perfil')->name('perfil');

    Route::view('/dashboard-admin','panel.dashboard_admin' )->name('dashboard_admin');
    Route::view('/activaciones_admin', 'panel.activaciones_admin')->name('activaciones_admin');
    Route::view('/jugar_admin', 'panel.jugar_admin')->name('jugar_admin');
    Route::view('/premios_admin', 'panel.premios_admin')->name('premios_admin');
    Route::view('/ganadores_admin', 'panel.ganadores_admin')->name('ganadores_admin');
    Route::view('/tyc_admin', 'panel.tyc_admin')->name('tyc_admin');
    Route::view('/usuarios', 'panel.usuarios')->name('usuarios');
/*
    Route::get('/activaciones', function(){ Gate::authorize(ability:'Vendedor');})->name('activaciones');
    Route::get('/jugar', function(){Gate::authorize(ability:'Vendedor');})->name('jugar');
    Route::get('/premios', function(){Gate::authorize(ability:'Vendedor');})->name('premios');
    Route::get('/ganadores', function(){Gate::authorize(ability:'Vendedor');})->name('ganadores');
    Route::get('/tyc', function(){Gate::authorize(ability:'Vendedor');})->name('terminosycondiciones');
    Route::get('/perfil', function(){Gate::authorize(ability:'Vendedor');})->name('perfil');

    Route::get('/dashboard_admin', function(){ Gate::authorize(ability:'Administrador');})->name('dashboard_admin');
    Route::get('/activaciones_admin', function(){ Gate::authorize(ability:'Administrador');})->name('activaciones_admin');
    Route::get('/jugar_admin', function(){ Gate::authorize(ability:'Administrador');})->name('jugar_admin');
    Route::get('/premios_admin', function(){ Gate::authorize(ability:'Administrador');})->name('premios_admin');
    Route::get('/ganadores_admin', function(){ Gate::authorize(ability:'Administrador');})->name('ganadores_admin');
    Route::get('/tyc_admin', function(){ Gate::authorize(ability:'Administrador');})->name('tyc_admin');
    Route::get('/usuarios', function(){ Gate::authorize(ability:'Administrador');})->name('usuarios');
    */
});

require __DIR__.'/auth.php';
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
