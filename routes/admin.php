<?php
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::middleware(['auth'])->group(function(){
    Route::get('/categorias', function(){
        return view('admin.categorias');
=======
Route::middleware(['auth'])->group(function () {
    Route::get('/categorias', function () {
        return view('categorias.index');
>>>>>>> 74b9d32aba8160aefcc3884eb4b533601e3528e0
    })->name('categorias.index');
});
