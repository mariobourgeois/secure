<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MonCompteController;

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
    return view('welcome');
});

require __DIR__.'/auth.php';

Route::get("/admin",[DashboardController::class,"index"])->middleware(['auth'])->name('dashboard');

Route::get("/moncompte",[MonCompteController::class,"index"]);

Route::get("/panier",[MonCompteController::class,"panier"])->name("panier");

// Route administration user
Route::get("/admin/user", [UserController::class,"index"])->middleware(['auth'])->name('admin.user');

// Route administration actu
Route::get("/admin/actu-lister", [ActuController::class,"index"])->middleware(['auth'])->name('admin.actu-lister');
Route::get("/admin/actu-editer", [ActuController::class,"editer"])->middleware(['auth'])->name('admin.actu-editer');

// Route de la gestion des droits administrateur
Route::get("/admin/user/right/{id}", [UserController::class,"index"])->middleware(['auth'])->name('admin.user-right');


