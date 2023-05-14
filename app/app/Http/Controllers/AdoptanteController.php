<?php

namespace App\Http\Controllers;

use App\Models\Adoptante;use Illuminate\Http\Request;

use App\Http\Requests\UpdateAdoptanteRequest;

class AdoptanteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('can:adoptantes.index')->only('index');
        $this->middleware('can:adoptantes.create')->only('create','store');
        $this->middleware('can:adoptantes.update')->only('edit','update');
        $this->middleware('can:adoptantes.destroy')->only('destroy');

    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adoptantes = Adoptante::all();
        return view("adoptantes.index", compact('adoptantes')); //devuelve form 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("adoptantes.create"); //devuelve form  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        request()->validate(Adoptante::$rules);
        $adoptante = Adoptante::create($request->all());

        return redirect()->route('adoptantes.index')->with('success', 'Adoptante created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Adoptante $adoptante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $adoptante = Adoptante::find($id);
        return view("adoptantes.edit", compact('adoptante')); //devuelve form 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $adoptante = Adoptante::find($id);
        request()->validate(Adoptante::$rules);
        $adoptante->update($request->all());

        return redirect()->route('adoptantes.index')
            ->with('success', 'Adoptante updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $adoptante = Adoptante::find($id)->delete();

        return redirect()->route('adoptantes.index')
            ->with('success', 'Departamento deleted successfully');

    }
}
