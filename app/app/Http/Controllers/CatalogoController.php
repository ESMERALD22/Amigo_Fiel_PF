<?php

namespace App\Http\Controllers;

use App\Models\Hogar;
use App\Models\Animal;
use App\Models\Contrato;
use App\Models\IngresoAnimal;
use Illuminate\Http\Request;
use App\Models\RegistroMedico;
use Illuminate\Support\Facades\DB;

class CatalogoController extends Controller
{

    public function catalogo()
    {
        $animales=Animal::select()->where('estado', 0)->get();
        return view("catalogo", compact('animales'));
    }
}




