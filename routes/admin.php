<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function(){
    Route::get('/categorias', function(){
        return view('admin.categorias');
    })->name('categorias.index');
});
