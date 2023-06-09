<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    public $table = "contratos";

    static $rules = [
		'fechaSalida' => 'required',
		'idAnimal' => 'required',
		'idAdoptante' => 'required',
		'idSocio' => 'required',
		'estado' => 'required',
		'observacion' => 'required',
    ];


    protected $perPage = 20;
    protected $fillable = ['idContrato','fechaSalida','idAnimal','idAdoptante','idSocio','estado','observacion','lugar'];

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
    

    //----------------------------------------------------
    public function Animal1(){
        return $this->hasOne('App\Models\Animal','id','idAnimal');
    }
    public function Adoptante1(){
        return $this->hasOne('App\Models\Adoptante','id','idAdoptante');
    }
    public function User(){
        return $this->hasOne('App\Models\User','id','idSocio');
    }
}
