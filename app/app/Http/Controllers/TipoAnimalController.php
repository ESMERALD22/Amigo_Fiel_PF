<?php

namespace App\Http\Controllers;

use App\Models\TipoAnimal;
use App\Http\Requests\StoreTipoAnimalRequest;
use App\Http\Requests\UpdateTipoAnimalRequest;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class TipoAnimalController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('can:tipoAnimal.index')->only('index');
        $this->middleware('can:tipoAnimal.create')->only('create','store');
        $this->middleware('can:tipoAnimal.edit')->only('edit','update');
        $this->middleware('can:tipoAnimal.destroy')->only('destroy');
        $this->middleware('can:tipoAnimal.show')->only('show');

    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos = TipoAnimal::all();
        return view("tipoAnimal.index", compact('tipos')); //devuelve form 

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tipoAnimal.create"); //devuelve form  

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        request()->validate(TipoAnimal::$rules);
        try {
            $tipo = TipoAnimal::create($request->all());
            return redirect()->route('tipoAnimal.index')->with('success', 'Tipo de animal registrado correctamente');
        } catch (QueryException $ex) {
            return redirect()->route('tipoAnimal.index')->with('error', 'Error, no se registro el tipo de animal');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tipo = TipoAnimal::find($id);

        return view('tipoAnimal.show', compact('tipo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tipo =TipoAnimal::find($id);
        return view("tipoAnimal.edit", compact('tipo')); //devuelve form 
   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $tipo = TipoAnimal::find($id);
        request()->validate(TipoAnimal::$rules);
        try {
            $tipo->update($request->all());
            return redirect()->route('tipoAnimal.index')
                ->with('success', 'Tipo actualizado correctamente');
        } catch (QueryException $ex) {
            return redirect()->route('tipoAnimal.index')->with('error', 'Error, no se actualizo el tipo de animal');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $tipo = TipoAnimal::find($id)->delete();

            return redirect()->route('tipoAnimal.index')
                ->with('success', 'Tipo de animal eliminado correctamente');
        } catch (QueryException $ex) {
            return redirect()->route('tipoAnimal.index')->with('error', 'Error, no se elimino el registro de animal');
        }

    }
}
