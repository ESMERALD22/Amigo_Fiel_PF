<?php

namespace App\Http\Controllers;


use App\Models\Hogar;
use App\Models\Animal;
use App\Models\Contrato;
use Illuminate\Http\Request;
use App\Models\IngresoAnimal;
use App\Models\RegistroMedico;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Carbon;

use Illuminate\Database\QueryException;

class VistaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');

        $this->middleware('can:adoptantes.show')->only('ver');
        $this->middleware('can:hogares.show')->only('elegirHogar');

        $this->middleware('can:registrosMedicos.index')->only('infoRegMed');
        $this->middleware('can:hogares.index')->only('infoHogares');
        $this->middleware('can:contratos.index')->only('infoContrato');


        $this->middleware('can:ingresoAnimales.show')->only('vistaHA');
        $this->middleware('can:registrosMedicos.show')->only('showRA');

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

    public function imprimir($id){

        $contrato = Contrato::find($id);
        $fcha = $contrato->fechaSalida;
        $date = Carbon::createFromFormat('Y-m-d', $fcha);
        $date = $date->locale('es')->translatedFormat('l d \d\e F \d\e\l Y');
        //return view('contratos.pdfContrato', compact('contrato','date'));
        view()->share('contratos.pdfContrato', compact('contrato','date'));

        $pdf = PDF::loadView('contratos.pdfContrato', compact('contrato','date'));
        
        return $pdf->download('mi-archivo.pdf');

    }

    public function showRA($id)
    {
        $registro = RegistroMedico::find($id);
        return view("animales.showRA", compact('registro')); //devuelve form 
    }



    public function vistaHA($id)
    {
        $ingreso = IngresoAnimal::find($id);
        //capturar datos
        $hogar = Hogar::find($ingreso->Hogar->id);
        $animal = Animal::find($ingreso->Animal->id);

        return view("animales.vistaHA1", compact('hogar', 'animal', 'ingreso'));

    }



} 

