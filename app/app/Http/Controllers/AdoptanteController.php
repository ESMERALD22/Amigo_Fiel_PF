<?php

namespace App\Http\Controllers;

use App\Models\Adoptante;
use Illuminate\Http\Request;

use App\Http\Requests\UpdateAdoptanteRequest;
use Illuminate\Database\QueryException;

class AdoptanteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:adoptantes.index')->only('index');
        $this->middleware('can:adoptantes.create')->only('create', 'store');
        $this->middleware('can:adoptantes.edit')->only('edit', 'update');
        $this->middleware('can:adoptantes.destroy')->only('destroy');
        $this->middleware('can:adoptantes.show')->only('show');
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
        try {
            $adoptante = Adoptante::create($request->all());
            return redirect()->route('adoptantes.index')->with('success', 'Adoptante registrado correctamente');
        } catch (QueryException $ex) {
            return redirect()->route('adoptantes.index')->with('error', 'Error, no se registro el adoptante');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $adoptante = Adoptante::find($id);

        return view('adoptantes.show', compact('adoptante'));
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
        try {
            $adoptante->update($request->all());
            return redirect()->route('adoptantes.index')
                ->with('success', 'Adoptante actualizado correctamente');
        } catch (QueryException $ex) {
            return redirect()->route('adoptantes.index')->with('error', 'Error, no se actualizó el adoptante');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $adoptante = Adoptante::find($id)->delete();

            return redirect()->route('adoptantes.index')
                ->with('success', 'Adoptante eliminado correctamente');
        } catch (QueryException $ex) {
            return redirect()->route('adoptantes.index')->with('error', 'Error, no se elimino el adoptante');
        }
    }
}
