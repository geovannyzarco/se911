<?php
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::get('/tipos-permisos', function () {
        return view('tipos-permisos.index');
    })->name('tipos-permisos.index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/grupos', function () {
        return view('grupos.index');
    })->name('grupos.index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/unidades', function () {
        return view('unidades.index');
    })->name('unidades.index');
});

