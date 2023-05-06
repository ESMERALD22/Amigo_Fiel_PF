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

    //un adoptante esta en muchos contratos
    public function animales()
    {
        return $this->hasMany('App\Models\Animal', 'idAnimal', 'id');
    }
    



}
