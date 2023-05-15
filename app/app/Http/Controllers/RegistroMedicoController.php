<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use App\Models\RegistroMedico;
use App\Http\Requests\StoreRegistroMedicoRequest;
use App\Http\Requests\UpdateRegistroMedicoRequest;

class RegistroMedicoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');

        $this->middleware('can:registrosMedicos.index')->only('index');
        $this->middleware('can:registrosMedicos.create')->only('create','store');
        $this->middleware('can:registrosMedicos.update')->only('edit','update');
        $this->middleware('can:registrosMedicos.destroy')->only('destroy');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registros = RegistroMedico::all();

        return view("registrosMedicos.index", compact('registros')); 
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $id = $request->input('id');
        $animal = Animal::find($id);

        return view("registrosMedicos.create", compact( 'animal'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(RegistroMedico::$rules);
        $registro = RegistroMedico::create($request->all());

        return redirect()->route('registrosMedicos.index')->with('success', 'Salio created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(RegistroMedico $registroMedico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $registro = RegistroMedico::find($id);
        return view("registrosMedicos.edit", compact('registro')); //devuelve form 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $registro = RegistroMedico::find($id);
        request()->validate(RegistroMedico::$rules);
        $registro->update($request->all());

        return redirect()->route('registrosMedicos.index')
            ->with('success', 'Adoptante updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $registro = RegistroMedico::find($id)->delete();

        return redirect()->route('registrosMedicos.index')
            ->with('success', 'Departamento deleted successfully');
   
    }
}
