<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroMedico extends Model
{
    public $table = "registros_medicos";

    static $rules = [
        'fecha' => 'required',
		'idAnimal' => 'required',
		'tratamiento' => 'required',
		'descripcion' => 'required',
    ];


    protected $perPage = 20;
    protected $fillable = ['fecha','idAnimal','tratamiento','descripcion'];

  
   //Relacion de uno a muchos entre Registro medico y animal 
   public function Hogar(){
    return $this->belongsTo('App\Models\Animal','idAnimal','id');
    }
    
    //Relacion de uno a muchos entre Registro medico y animal 
    public function Animal(){
        return $this->belongsTo('App\Models\Animal','idAnimal','id');
    }
}
