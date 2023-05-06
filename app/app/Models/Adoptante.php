<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoptante extends Model
{
    public $table = "adoptantes";
    static $rules = [
        'nombre' => 'required',
		'apellido' => 'required',
		'dpi' => 'required',
		'telefono1' => 'required',
		'telefono2' => 'required',
		'correo' => 'required',
		'direccion' => 'required',
		'detalles' => 'required',
    ];


    protected $perPage = 20;
    protected $fillable = ['nombre','apellido','dpi','telefono1','telefono2','correo','direccion','detallles'];

    //un adoptante esta en muchos contratos
    public function Contrato()
    {
        return $this->hasMany('App\Models\Contrato', 'idAdoptante', 'id');
    }
    

}
