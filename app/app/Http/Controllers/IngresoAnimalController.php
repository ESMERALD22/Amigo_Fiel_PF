<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use App\Models\IngresoAnimal;
use App\Http\Requests\StoreIngresoAnimalRequest;
use App\Http\Requests\UpdateIngresoAnimalRequest;
use App\Models\Hogar;

class IngresoAnimalController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
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
        $ingreso = IngresoAnimal::create($request->all());

        return redirect()->route('ingresoAnimales.index')->with('success', 'Ingreso Creado created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(IngresoAnimal $ingresoAnimal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IngresoAnimal $ingresoAnimal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIngresoAnimalRequest $request, IngresoAnimal $ingresoAnimal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        
        $registro = IngresoAnimal::find($id)->delete();

        return redirect()->route('ingresoAnimales.index')
            ->with('success', 'Departamento deleted successfully');
   
    }
}
