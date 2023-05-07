<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hogar extends Model
{
    public $table = "hogares";

    static $rules = [
        'nombreEncargado' => 'required',
		'telefono1' => 'required',
		'telefono2' => 'required',
		'direccion' => 'required',
		'descripcionLugar' => 'required',
		'animalesPropios' => 'required',
		'tiempoDisponible' => 'required',
    ];


    protected $perPage = 20;
    protected $fillable = ['nombreEncargado','telefono1','telefono2','direccion','descripcionLugar','animalesPropios','tiempoDisponible'];

    //un adoptante esta en muchos contratos
    public function IngresoAnimal()
    {
        return $this->hasMany('App\Models\IngresoAnimal', 'idHogar', 'id');
    }
}
