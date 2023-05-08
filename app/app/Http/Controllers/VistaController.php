<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistaController extends Controller
{
    public function ver($id)
    {
        return view("contratos.adoptanteC", compact('id'));
    }
}
