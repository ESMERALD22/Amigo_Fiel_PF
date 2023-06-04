<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use App\Models\RegistroMedico;
use App\Http\Requests\StoreRegistroMedicoRequest;
use App\Http\Requests\UpdateRegistroMedicoRequest;
use Illuminate\Database\QueryException;

class RegistroMedicoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('can:registrosMedicos.index')->only('index');
        $this->middleware('can:registrosMedicos.create')->only('create', 'store');
        $this->middleware('can:registrosMedicos.edit')->only('edit', 'update');
        $this->middleware('can:registrosMedicos.destroy')->only('destroy');
        $this->middleware('can:ingresoAnimales.show')->only('show');
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

        return view("registrosMedicos.create", compact('animal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(RegistroMedico::$rules);
        try {
            $registro = RegistroMedico::create($request->all());
            return redirect()->route('registrosMedicos.index')->with('success', 'Registro médico ingresado.');
        } catch (QueryException $ex) {
            return redirect()->route('registrosMedicos.index')->with('error', 'Error, no se ingresó registro médico');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $registro = RegistroMedico::find($id);
        return view("registrosMedicos.show", compact('registro')); //devuelve form 
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
        try {
            $registro->update($request->all());
            return redirect()->route('registrosMedicos.index')
                ->with('success', 'Registro médico actualizado');
        } catch (QueryException $ex) {
            return redirect()->route('registrosMedicos.index')
                ->with('error', 'Error, no se actualizó el registro médico');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $registro = RegistroMedico::find($id)->delete();
            return redirect()->route('registrosMedicos.index')
                ->with('success', 'Registro médico eliminado');
        } catch (QueryException $ex) {
            return redirect()->route('registrosMedicos.index')
                ->with('error', 'Error, no se eliminó el registro médico.');
        }
    }
}
