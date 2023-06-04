<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\SalidaAnimal;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSalidaAnimalRequest;
use App\Http\Requests\UpdateSalidaAnimalRequest;
use Illuminate\Database\QueryException;

class SalidaAnimalController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:salidaAnimales.index')->only('index');
        $this->middleware('can:salidaAnimales.create')->only('create', 'store');
        $this->middleware('can:salidaAnimales.edit')->only('edit', 'update');
        $this->middleware('can:salidaAnimales.destroy')->only('destroy');
        $this->middleware('can:salidaAnimales.show')->only('show');
    }

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

        return view("salidaAnimales.create", compact('animal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(SalidaAnimal::$rules);
        try {
            $salida = SalidaAnimal::create($request->all());
            return redirect()->route('salidaAnimales.index')->with('success', 'Salida registrada correctamente.');
        } catch (QueryException $ex) {
            return redirect()->route('salidaAnimales.index')->with('error', 'Error, no se registro la salida.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $salida = SalidaAnimal::find($id);
        $tiposSalida = ['Adopción', 'Muerte', 'Otro', 'Retorno a su hogar'];
        return view("salidaAnimales.show", compact('salida', 'tiposSalida')); //devuelve form 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $salida = SalidaAnimal::find($id);
        $tiposSalida = ['Adopción', 'Muerte', 'Otro', 'Retorno a su hogar'];
        return view("salidaAnimales.edit", compact('salida', 'tiposSalida')); //devuelve form 

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $salida = SalidaAnimal::find($id);
        request()->validate(SalidaAnimal::$rules);
        try {
            $salida->update($request->all());
            return redirect()->route('salidaAnimales.index')
                ->with('success', 'Registro de salida actualizado');
        } catch (QueryException $ex) {
            return redirect()->route('salidaAnimales.index')
                ->with('error', 'Error, no se actualizo la salida');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $salida = SalidaAnimal::find($id)->delete();
            return redirect()->route('salidaAnimales.index')
                ->with('success', 'Registro de salida eliminado');
        }catch(QueryException $ex){
            return redirect()->route('salidaAnimales.index')
                ->with('error', 'Error, no se eliminó registro de salida');
        }

    }
}
