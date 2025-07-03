<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;



Route::get('/', [IndexController::class, 'Index']);

Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminController::class, 'login']);
Route::get('/dashboard', function () {
    return 'مرحبا بك في لوحة التحكم';
})->middleware('auth');
Route::get('/index',[IndexController::class,'Index']);
Route::get('/about',[IndexController::class,'About']);


Route::get('/store/create', [ClientController::class, 'create'])->name('store.create');
Route::post('/store', [ClientController::class, 'store'])->name('store.store');
Route::get('/list', [ClientController::class, 'index'])->name('store.index');
Route::get('/store/{etudiant}/edit', [ClientController::class, 'edit'])->name('store.edit');
Route::patch('/store/{etudiant}', [ClientController::class, 'update'])->name('store.update');
Route::delete('/store/{etudiant}', [ClientController::class, 'destroy'])->name('store.destroy');

