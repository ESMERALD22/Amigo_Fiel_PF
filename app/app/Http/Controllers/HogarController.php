<?php

namespace App\Http\Controllers;

use App\Models\Hogar;
use App\Http\Requests\StoreHogarRequest;
use App\Http\Requests\UpdateHogarRequest;
use Illuminate\Http\Request;


class HogarController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('can:hogares.index')->only('index');
        $this->middleware('can:hogares.create')->only('create','store');
        $this->middleware('can:hogares.update')->only('edit','update');
        $this->middleware('can:hogares.destroy')->only('destroy');

    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hogares = Hogar::all();
        return view("hogares.index", compact('hogares')); 

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("hogares.create"); //devuelve form
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        request()->validate(Hogar::$rules);
        //creamos el animal$animal
        $animal = Hogar::create($request->all());

        return redirect()->route('hogares.index')->with('success', 'Hogar created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Hogar $hogar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $hogar = Hogar::find($id);
        return view("hogares.edit", compact('hogar')); //devuelve form 

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $hogar = Hogar::find($id);
        request()->validate(Hogar::$rules);
        $hogar->update($request->all());

        return redirect()->route('hogares.index')
            ->with('success', 'Adoptante updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hogar = Hogar::find($id)->delete();

        return redirect()->route('hogares.index')
            ->with('success', 'Departamento deleted successfully');

    }
}
