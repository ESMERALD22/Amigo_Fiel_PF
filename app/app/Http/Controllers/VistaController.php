<?php

namespace App\Http\Controllers;

use App\Models\Hogar;
use Illuminate\Http\Request;

class VistaController extends Controller
{
    public function ver($id)
    {
        return view("contratos.adoptanteC", compact('id'));
    }

    public function elegirHogar($id)
    {
        $hogares = Hogar::all();
        return view("ingresoAnimales.hogares", compact('hogares','id'));
    }

}
