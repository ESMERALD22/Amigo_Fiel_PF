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
		'dpi' => 'required|digits:13',
		'telefono1' => 'required|digits:8',
		'telefono2' => 'required|digits:8',
		'correo' => 'required',
		'direccion' => 'required',
		'detalles' => 'required',
    ];


    protected $perPage = 20;
    protected $fillable = ['nombre','apellido','dpi','telefono1','telefono2','correo','direccion','detalles'];

    //Relacion de uno a muchos entre contrato y adoptante 
    public function contratos(){
        return $this->hasMany('App\Models\Contrato','idAdoptante','id');
    }
    
//----------------------------------------


}
