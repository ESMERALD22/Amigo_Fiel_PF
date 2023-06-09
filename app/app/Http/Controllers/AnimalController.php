<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\TipoAnimal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Database\QueryException;

class AnimalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:animales.index')->only('index');
        $this->middleware('can:animales.create')->only('create', 'store');
        $this->middleware('can:animales.edit')->only('edit', 'update');
        $this->middleware('can:animales.destroy')->only('destroy');
        $this->middleware('can:animales.show')->only('show');
    }


    public function index()
    {
        $tiposAnimales = TipoAnimal::all();

        $animales = Animal::all();
        return view("animales.index", compact('animales', 'tiposAnimales')); //devuelve form y carga tipos de animaes existentes

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        //hembra o macho
        $tiposAnimales = TipoAnimal::all();

        return view("animales.create", compact('tiposAnimales')); //devuelve form y carga tipos de animaes existentes

    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

        request()->validate(Animal::$rules);
        //creamos el animal$animal
        $animal = new Animal;
        try {
            $animal = Animal::create($request->all());

            if ($request->hasfile('foto')); {
                $file = $request->file('foto');
                $extention = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extention;
                $file->move('uploads/animales/', $filename);
                $animal->foto = $filename;
                $animal->save();
            }
            return redirect()->route('animales.index')->with('success', 'Animal registrado correctamente.');
        } catch (QueryException $ex) {
            return redirect()->route('animales.index')->with('error', 'Error, no se registro el animal');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $animal = Animal::find($id);
        $tiposAnimales = TipoAnimal::all();

        return view("animales.show", compact('tiposAnimales', 'animal')); //devuelve form y carga tipos de animaes existentes


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $animal = Animal::find($id);
        $tiposAnimales = TipoAnimal::all();

        return view("animales.edit", compact('tiposAnimales', 'animal')); //devuelve form y carga tipos de animaes existentes

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $animal = Animal::find($id);
        request()->validate([
            'sexo' => 'required',
            'idTipoAnimal' => 'required',
            'raza' => 'required',
            'nombreRaza' => 'required',
            'nombre' => 'required',
            'edad' => 'required',
            'descripcion' => 'required'
        ]);
        try {

            $animal->update($request->all());

            if ($request->hasfile('foto')) {

                $destination = 'uploads/animales/' . $animal->foto;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('foto');
                $extention = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extention;
                $file->move('uploads/animales/', $filename);
                $animal->foto = $filename;
                $animal->save();
            }

            return redirect()->route('animales.index')->with('success', 'Animal actualizado correctamente');
        } catch (QueryException $ex) {
            return redirect()->route('animales.index')->with('error', 'Error, no se actualizo el animal');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $animal = Animal::find($id);
        try {
            $animal->delete();
            return redirect()->route('animales.index')->with('success', 'Animal elimindado correctamente');
        } catch (QueryException $ex) {
            return redirect()->route('animales.index')->with('error', 'Error, no se elimino el animal');
        }
    }
}
