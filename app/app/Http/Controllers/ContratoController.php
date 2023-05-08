<?php

namespace App\Http\Controllers;

use App\Models\Socio;
use App\Models\Animal;
use App\Models\Contrato;
use App\Models\Adoptante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreContratoRequest;
use App\Http\Requests\UpdateContratoRequest;

class ContratoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
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

        $contrato = Contrato::create($request->all());
        return redirect()->route('contratos.index')->with('success', 'contrato creado');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $contrato = Contrato::find($id);

        return view('contratos.show', compact('contrato'));

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
