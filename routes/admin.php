<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/categorias', function () {
        return view('categorias.index');
    })->name('categorias.index');
});
