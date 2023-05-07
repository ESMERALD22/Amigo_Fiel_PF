<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAnimal extends Model
{
    public $table = "tipo_animales";
    static $rules = [
        'tipo' => 'required',
    ];


    protected $perPage = 20;
    protected $fillable = ['tipo'];

    //Relacion de uno a mucho entre tipo animal y animales
    public function Animales(){
        return $this->hasMany('App\Models\Animal','idTipoAnimal','id');
    }
    
}
