<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccionController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/empleados', fn() => view('empleados.index'))->name('empleados.index');
});

Route::middleware(['auth'])->group(function () {
   Route::get('/solicitudes', \App\Livewire\Solicitudes\Index::class)->name('solicitudes.index');
});
