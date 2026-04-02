<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::get('/ingresos',[HomeController::class, 'ingresos'])->name('ingresos');
Route::get('/compras',[HomeController::class, 'compras'])->name('compras');
Route::get('/ropa',[HomeController::class, 'ropa'])->name('ropa');
Route::get('/login',[HomeController::class, 'login'])->name('login');