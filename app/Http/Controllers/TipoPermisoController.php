<?php

namespace App\Http\Controllers;


use App\Models\TipoPermiso;
use Illuminate\Http\Request;

class TipoPermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos = TipoPermiso::orderBy('id')->paginate(10);
        return view('tipos_permisos.index',compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipos_permisos.created');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo'=>'required|string|max:100',
        ]);
        TipoPermiso::create($request->all());
        return redirect()->route('tipos-permisos.index')->with('message','Tipo de permiso creado.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoPermiso $tipos_permiso)
    {
        return view('tipos_permisos.edit',['tipoPermiso'=>$tipos_permiso]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoPermiso $tipos_permiso)
    {
        $request->validate([
            'tipo'=>'required|string|max:100',
        ]);

        $tipos_permiso->update($request->all());
        return redirect()->route('tipos-permisos.index')->with('message','Actualizado Correctamenete');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoPermiso $tipos_permiso)
    {
        $tipos_permiso->delete();
        return redirect()->route('tipos-permisos.index')->with('message','Elimanado correctamente');
    }
}
