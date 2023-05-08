<?php

namespace App\Http\Controllers;

use App\Models\TipoAnimal;
use App\Http\Requests\StoreTipoAnimalRequest;
use App\Http\Requests\UpdateTipoAnimalRequest;

class TipoAnimalController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTipoAnimalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tipo = TipoAnimal::find($id);
        return $tipo;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoAnimal $tipoAnimal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTipoAnimalRequest $request, TipoAnimal $tipoAnimal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoAnimal $tipoAnimal)
    {
        //
    }
}
