<?php

namespace App\Http\Controllers;

use App\Models\Socio;
use App\Models\Animal;
use App\Models\Contrato;
use App\Models\Adoptante;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreContratoRequest;
use App\Http\Requests\UpdateContratoRequest;
use Illuminate\Database\QueryException;

class ContratoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:contratos.index')->only('index');
        $this->middleware('can:contratos.create')->only('create', 'store');
        $this->middleware('can:contratos.edit')->only('edit', 'update');
        $this->middleware('can:contratos.destroy')->only('destroy');
        $this->middleware('can:contratos.show')->only('show');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contratos = Contrato::all();

        return view("contratos.index", compact('contratos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //capturar datos
        $dpiAdoptante = $request->input('dpi');
        $adoptante = Adoptante::select()->where('dpi', $dpiAdoptante)->First();
        if ($adoptante != null) {
            $id = $request->input('id');
            $animal = Animal::find($id);

            $socio = Socio::find(1);

            return view("contratos.create", compact('adoptante', 'animal', 'socio'));
        } else {
            return redirect()->route('animales.index')->with('error', 'Error, no se encontro el adoptante');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(Contrato::$rules);
        try {
            $contrato = Contrato::create($request->all());
            return redirect()->route('contratos.index')->with('success', 'Contrato registrado correctamente');
        } catch (QueryException $ex) {
            return redirect()->route('contratos.index')->with('error', 'Error, no se registro el contrato');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $contrato = Contrato::find($id);
        $fcha = $contrato->fechaSalida;
        $date = Carbon::createFromFormat('Y-m-d', $fcha);
        $date = $date->locale('es')->translatedFormat('l d \d\e F \d\e\l Y');
        return view('contratos.show', compact('contrato', 'date'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contrato = Contrato::find($id);

        return view("contratos.edit", compact('contrato')); //devuelve form y carga tipos de animaes existentes


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $contrato = Contrato::find($id);
        request()->validate(Contrato::$rules);
        try {
            $contrato->update($request->all());
            //actualizar estado del animal
            $animal = Animal::find($contrato->idAnimal);
            $estado = $request->input('estado');

            if ($estado == "valido") {
                DB::table('animales')->where('id', $animal->id)->update(array('estado' => 1));
            } else {
                DB::table('animales')->where('id', $animal->id)->update(array('estado' => 0));
            }
            return redirect()->route('contratos.index')
                ->with('success', 'Contrato actualizado correctamente');
        } catch (QueryException $ex) {
            return redirect()->route('contratos.index')->with('error', 'Error, no se actualizo el contrato');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $contrato = Contrato::find($id)->delete();
            return redirect()->route('contratos.index')
                ->with('success', 'Contrato eliminado correctamente');
        } catch (QueryException $ex) {
            return redirect()->route('contratos.index')->with('error', 'Error, no se elimino el contrato');
        }
    }
}
