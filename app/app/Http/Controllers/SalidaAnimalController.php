<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\SalidaAnimal;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSalidaAnimalRequest;
use App\Http\Requests\UpdateSalidaAnimalRequest;

class SalidaAnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salidas = SalidaAnimal::all();
        return view("salidaAnimales.index", compact('salidas'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $id = $request->input('id');
        $animal = Animal::find($id);

        return view("salidaAnimales.create", compact( 'animal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(SalidaAnimal::$rules);
        $salida = SalidaAnimal::create($request->all());

        return redirect()->route('salidaAnimales.index')->with('success', 'Salio created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SalidaAnimal $salidaAnimal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $salida = SalidaAnimal::find($id);
        $tiposSalida = ['Adopción','Muerte', 'Otro','Retorno a su hogar'];
        return view("salidaAnimales.edit", compact('salida','tiposSalida')); //devuelve form 

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $salida = SalidaAnimal::find($id);
        request()->validate(SalidaAnimal::$rules);
        $salida->update($request->all());

        return redirect()->route('salidaAnimales.index')
            ->with('success', 'Adoptante updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $salida = SalidaAnimal::find($id)->delete();

        return redirect()->route('salidaAnimales.index')
            ->with('success', 'Departamento deleted successfully');

    }
}
