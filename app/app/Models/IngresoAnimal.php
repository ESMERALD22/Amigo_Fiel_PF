<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngresoAnimal extends Model
{
    public $table = "ingreso_animales";

    static $rules = [
        'fechaIngreso' => 'required',
		'idAnimal' => 'required',
		'idHogar' => 'required',
		'procedencia' => 'required',
		'detalle' => 'required',
    ];


    protected $perPage = 20;
    protected $fillable = ['fechaIngreso','idAnimal','idHogar','procedencia','detalle'];

    //un adoptante esta en muchos contratos
    public function Animal()
    {
        return $this->hasOne('App\Models\Animal', 'id', 'idAnimal');
    }
    public function Hogar()
    {
        return $this->hasOne('App\Models\Hogar', 'id', 'idHogar');
    }
}
