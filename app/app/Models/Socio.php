<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    
    public $table = "socios";
    static $rules = [
        'nombre' => 'required',
		'apellido' => 'required',
		'telefono1' => 'required',
		'telefono2' => 'required',
        'dpi' => 'required',
        
        
    ];


    protected $perPage = 20;
    protected $fillable = ['nombre','apellido','telefono1','telefono2','dpi'];

    //Relacion de uno a muchos entre contrato y Socio 
    public function contratos(){
        return $this->hasMany('App\Models\Contrato','idSocio','id');
    }
}
