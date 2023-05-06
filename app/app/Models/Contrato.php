<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    public $table = "contratos";

    static $rules = [
        'idContrato' => 'required',
		'fechaSalida' => 'required',
		'idAnimal' => 'required',
		'idAdoptante' => 'required',
		'idSocio' => 'required',
		'estado' => 'required',
		'observacion' => 'required',
    ];


    protected $perPage = 20;
    protected $fillable = ['idContrato','fechaSalida','idAnimal','idAdoptante','idSocio','estado','observacion'];

    //un adoptante esta en muchos contratos
    public function Adoptante()
    {
        return $this->hasOne('App\Models\Adoptante', 'id', 'idAdoptante');
    }

    
}
