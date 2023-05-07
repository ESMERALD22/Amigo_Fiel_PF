<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalidaAnimal extends Model
{
    public $table = "salida_animales";
    static $rules = [
        'fechaSalida' => 'required',
		'idAnimal' => 'required',
		'tipoSalida' => 'required',
		'detalle' => 'required',
    ];


    protected $perPage = 20;
    protected $fillable = ['fechaSalida','idAnimal','tipoSalida','detalle'];

    //un adoptante esta en muchos contratos
    public function Animal()
    {
        return $this->hasOne('App\Models\Animal', 'id', 'idAnimal');
    }
}
