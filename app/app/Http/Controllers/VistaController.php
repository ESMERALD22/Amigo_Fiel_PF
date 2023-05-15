<?php

namespace App\Http\Controllers;

use App\Models\Hogar;
use App\Models\Animal;
use App\Models\Contrato;
use App\Models\IngresoAnimal;
use Illuminate\Http\Request;
use App\Models\RegistroMedico;
use Illuminate\Support\Facades\DB;

class VistaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('can:registrosMedicos.index')->only('infoRegMed');
        $this->middleware('can:hogares.index')->only('infoHogares');
        $this->middleware('can:contratos.index')->only('infoContrato');
    }
    
    public function ver($id)
    {
        return view("contratos.adoptanteC", compact('id'));
    }

    public function elegirHogar($id)
    {
        $hogares = Hogar::all();
        return view("ingresoAnimales.hogares", compact('hogares','id'));
    }


    public function infoRegMed($id)
    {
        $registros=RegistroMedico::select()->where('idAnimal', $id)->get();
        $animal = Animal::find($id);
        return view("animales.registros", compact('registros','animal'));
    }

    public function infoHogares($id)
    {
        $ingresos=IngresoAnimal::select()->where('idAnimal', $id)->get();
        $animal = Animal::find($id);
        return view("animales.hogarA", compact('ingresos','animal'));
    }
    public function infoContrato($id)
    {
        $contratos=Contrato::select()->where('idAnimal', $id)->get();
        $animal = Animal::find($id);
        return view("animales.contratoA", compact('contratos','animal'));
    }
}

