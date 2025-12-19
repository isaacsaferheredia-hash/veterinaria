<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mascotas=Mascota::getMascotas();
        return view('mascotas.index',compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mascotas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombreMascota'=>'required',
            'especie'=>'required',
            'raza'=>'required',
            'edad' => 'required|integer|min:0',
            'sexo'=>'required',
            'nombreDueño'=>'required',
            'apellidoDueño'=>'required',
            'telefono'=>'required'
        ]);
        Mascota::createMascota($request->all());
            return redirect()->route('mascotas.index')
                ->with('success','Mascota registrada');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mascota $mascota)
    {
        return view('mascotas.edit',compact('mascota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mascota $mascota)
    {
        $request->validate([
            'nombreMascota'=>'required',
            'especie'=>'required',
            'raza'=>'required',
            'edad' => 'required|integer|min:0',
            'sexo'=>'required',
            'nombreDueño'=>'required',
            'apellidoDueño'=>'required',
            'telefono'=>'required|max:10'
        ]);
        Mascota::updateMascota($mascota,$request->all());
        return redirect()->route('mascotas.index')
            ->with('success','Mascota actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mascota $mascota)
    {
        Mascota::deleteMascota($mascota);
        return redirect()->route('mascotas.index')
            ->with('success','Mascota eliminada');
    }
}
