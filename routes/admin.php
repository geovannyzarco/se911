<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoPermisoController;

Route::middleware(['auth'])->group(function(){
    Route::get('/categorias', function(){
        return view('admin.categorias');
    })->name('categorias.index');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/grupos', function(){
        return view('admin.grupos');
    })->name('grupos.index');
});

Route::resource('tipos-permisos', TipoPermisoController::class);

