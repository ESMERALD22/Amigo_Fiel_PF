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

    //relacion uno a uno de ingreso animal con animal(inverso)
    public function Animal(){
        return $this->belongsTo('App\Models\Animal','idAnimal','id');
    }

    //relacion de uno a muchos de ingreso aniamles y hogares (inversa)
    public function Hogar(){
        return $this->belongsTo('App\Models\Hogar','idHogar','id');
    }
    
}
