<?php
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::get('/tipos-permisos', function () {
        return view('tipos-permisos.index');
    })->name('tipos-permisos.index');
});

