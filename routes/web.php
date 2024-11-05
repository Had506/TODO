<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriController;
use App\Http\Controllers\TodoController;


Route::get('/',[TodoController::class,'index'])->name('index');
Route::resource('/categori',CategoriController::class);
Route::resource('/todo',TodoController::class);


