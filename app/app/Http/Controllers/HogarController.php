<?php

namespace App\Http\Controllers;

use App\Models\Hogar;
use App\Http\Requests\StoreHogarRequest;
use App\Http\Requests\UpdateHogarRequest;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;


class HogarController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('can:hogares.index')->only('index');
        $this->middleware('can:hogares.create')->only('create','store');
        $this->middleware('can:hogares.edit')->only('edit','update');
        $this->middleware('can:hogares.destroy')->only('destroy');
        $this->middleware('can:hogares.show')->only('show');


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
        
        try{
            $hogar = Hogar::create($request->all());
            return redirect()->route('hogares.index')->with('success', 'Hogar registrado correctamente');
        }catch(QueryException $ex){
            return redirect()->route('hogares.index')->with('error', 'Error');
        }


        //creamos el animal$animal


    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $hogar = Hogar::find($id);

        return view('hogares.show', compact('hogar'));

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
        
        try{
            $hogar->update($request->all());       
            return redirect()->route('hogares.index')
            ->with('success', 'Hogar actualizado correctamente');
         }catch(QueryException $ex){
            return redirect()->route('hogares.index')->with('error', 'Error');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $hogar = Hogar::find($id)->delete();
            return redirect()->route('hogares.index')
            ->with('success', 'Hogar eliminado correctamente');
        }catch(QueryException $ex){
            return redirect()->route('hogares.index')->with('error', 'Error');
        }
    }
}
