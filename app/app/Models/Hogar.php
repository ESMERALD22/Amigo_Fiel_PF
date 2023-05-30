<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hogar extends Model
{
    public $table = "hogares";

    static $rules = [
        'nombreEncargado' => 'required',
		'telefono1' => 'required|digits:8',
		'telefono2' => 'required|digits:8',
		'direccion' => 'required',
		'descripcionLugar' => 'required',
		'animalesPropios' => 'required',
		'tiempoDisponible' => 'required',
		'miembrosFam' => 'required',
    ];


    protected $perPage = 20;
    protected $fillable = ['nombreEncargado','telefono1','telefono2','direccion','descripcionLugar','animalesPropios','tiempoDisponible','miembrosFam'];

    //relacion de ono a muchos de ingreso animales y hogares
    public function IngresoAnimales(){
        return $this->hasMany('App\Models\IngresoAnimal','idHogar','id');
    }
}
