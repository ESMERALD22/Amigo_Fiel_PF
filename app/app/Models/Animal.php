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

    //un adoptante esta en muchos contratos
    public function tipoAnimal()
    {
        return $this->hasOne('App\Models\TipoAnimal', 'id', 'idTipoAnimal');
    }
    public function IngresoAnimal()
    {
        return $this->hasMany('App\Models\IngresoAnimal', 'idAnimal', 'id');
    }
    public function Hogares()
    {
        return $this->hasMany('App\Models\IngresoAnimal', 'idHogar', 'id');
    }
    

}
