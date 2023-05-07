<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public $table = "animales";

    static $rules = [
        'sexo' => 'required',
		'idTipoAnimal' => 'required',
		'raza' => 'required',
		'nombreRaza' => 'required',
		'nombre' => 'required',
		'fechaNacimiento' => 'required',
		'edad' => 'required',
		'descripcion' => 'required',
		'foto' => 'required',
    ];


    protected $perPage = 20;
    protected $fillable = ['sexo','idTipoAnimal','raza','nombreRaza','nombre','fechaNacimiento','edad', 'descripcion', 'foto'];

    
    //relacion uno a uno de ingreso animal con animal
    public function IngresoAnimal(){
        return $this->hasOne('App\Models\IngresoAnimal','idAnimal','id');

    }
     //relacion uno a uno de contrato con animal
     public function Contrato(){
        return $this->hasOne('App\Models\Contrato','idAnimal','id');

    }
    //Relacion de uno a mucho entre tipo animal y animales(inversa)
    public function TipoAnimal(){
        return $this->belongsTo('App\Models\TipoAnimal','idTipoAnimal','id');
    }
    //Relacion de uno a muchos entre Registro medico y animal 
    public function RegistroMedico(){
        return $this->hasMany('App\Models\RegistroMedico','idAnimal','id');
    }
}
