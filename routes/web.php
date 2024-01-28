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
});

require __DIR__.'/auth.php';