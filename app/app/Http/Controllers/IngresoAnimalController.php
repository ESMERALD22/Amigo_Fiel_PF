<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use App\Models\IngresoAnimal;
use App\Http\Requests\StoreIngresoAnimalRequest;
use App\Http\Requests\UpdateIngresoAnimalRequest;
use App\Models\Hogar;
use Illuminate\Database\QueryException;

class IngresoAnimalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:ingresoAnimales.index')->only('index');
        $this->middleware('can:ingresoAnimales.create')->only('create', 'store');
        $this->middleware('can:ingresoAnimales.edit')->only('edit', 'update');
        $this->middleware('can:ingresoAnimales.destroy')->only('destroy');
        $this->middleware('can:ingresoAnimales.show')->only('show');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingresos = IngresoAnimal::all();

        return view("ingresoAnimales.index", compact('ingresos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //capturar datos
        $idHogar = $request->input('hogar');
        $hogar = Hogar::find($idHogar);

        $id = $request->input('animal');
        $animal = Animal::find($id);

        return view("ingresoAnimales.create", compact('hogar', 'animal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        request()->validate(IngresoAnimal::$rules);
        try {

            $ingreso = IngresoAnimal::create($request->all());
            return redirect()->route('ingresoAnimales.index')->with('success', 'Registro de ingreso de animal correcto');
        } catch (QueryException $ex) {
            return redirect()->route('ingresoAnimales.index')->with('error', 'Error, no se registro el ingreso de animal');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ingreso = IngresoAnimal::find($id);
        //capturar datos
        $hogar = Hogar::find($ingreso->Hogar->id);
        $animal = Animal::find($ingreso->Animal->id);

        return view("ingresoAnimales.show", compact('hogar', 'animal', 'ingreso'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ingreso = IngresoAnimal::find($id);
        //capturar datos
        $hogar = Hogar::find($ingreso->Hogar->id);
        $animal = Animal::find($ingreso->Animal->id);

        return view("ingresoAnimales.edit", compact('hogar', 'animal', 'ingreso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $ingreso = IngresoAnimal::find($id);
        request()->validate(IngresoAnimal::$rules);

        try {
            $ingreso->update($request->all());
            return redirect()->route('ingresoAnimales.index')
                ->with('success', 'Ingreso de animales actualizado correctamente');
        } catch (QueryException $ex) {
            return redirect()->route('ingresoAnimales.index')->with('error', 'Error, no se actualizo el ingreso de animal');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $registro = IngresoAnimal::find($id)->delete();
            return redirect()->route('ingresoAnimales.index')
                ->with('success', 'Registro eliminado correctamente');
        } catch (QueryException $ex) {
            return redirect()->route('ingresoAnimales.index')
                ->with('error', 'Error, no se elimino el registro');
        }
    }
}
