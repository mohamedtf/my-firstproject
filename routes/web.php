<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminController::class, 'login']);
Route::get('/dashboard', function () {
    return 'مرحبا بك في لوحة التحكم';
})->middleware('auth');
Route::get('/index',[IndexController::class,'Index']);
Route::get('/about',[IndexController::class,'About']);

Route::get('/store/create',[ClientController::class ,'create']);
Route::post('/store',[ClientController::class ,'store']);
Route::get('/list',[ClientController::class ,'list']);
Route::get('/store/{id}/edit',[ClientController::class ,'edit'])->name('store.edit');
Route::patch('/store/{id}/edit',[ClientController::class ,'update'])->name('store.update');
Route::delete('/store/{id}/destroy',[ClientController::class ,'destroy'])->name('store.destroy');

