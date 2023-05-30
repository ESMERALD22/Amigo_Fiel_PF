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
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('can:contratos.index')->only('index');
        $this->middleware('can:contratos.create')->only('create','store');
        $this->middleware('can:contratos.edit')->only('edit','update');
        $this->middleware('can:contratos.destroy')->only('destroy');
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

        $id = $request->input('id');
        $animal = Animal::find($id);

        $socio=Socio::find(1);

        return view("contratos.create", compact('adoptante', 'animal', 'socio'));


        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
        'fechaSalida' => 'required',
		'idAnimal' => 'required',
		'idAdoptante' => 'required',
		'idSocio' => 'required',
		'estado' => 'required',
		'lugar' => 'required',
		'observacion' => 'required',
        ]);

        try{
            $contrato = Contrato::create($request->all());
            return redirect()->route('contratos.index')->with('success', 'Contrato registrado correctamente');
        }catch(QueryException $ex){
            return redirect()->route('contratos.index')->with('error', 'Error');
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
        return view('contratos.show', compact('contrato','date'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contrato $contrato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContratoRequest $request, Contrato $contrato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contrato $contrato)
    {
        //
    }
}
