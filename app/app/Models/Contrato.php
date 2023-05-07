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

    //relacion uno a uno de contrato con animal(inverso)
    public function Animal(){
        return $this->belongsTo('App\Models\Animal','idAnimal','id');
    }

    //Relacion de uno a muchos entre Contratos y adoptante(inversa) 
    public function Adoptante(){
        return $this->belongsTo('App\Models\Adoptante','idAdoptante','id');
    }

    //Relacion de uno a muchos entre Contratos y socios(inversa) 
    public function Socio(){
        return $this->belongsTo('App\Models\Socio','idSocio','id');
    }
    
}
