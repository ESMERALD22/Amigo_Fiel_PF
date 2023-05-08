<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\TipoAnimal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        $animal = Animal::create($request->all());

        if ($request->hasfile('foto')); 
        {
            $file = $request->file('foto');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/animales/', $filename);
            $animal->foto = $filename;
            $animal->save();
        }
        return redirect()->route('animales.index')->with('success', 'Departamento created successfully.');
 
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $animal = Animal::find($id);
        return $animal;
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
		'fechaNacimiento' => 'required',
		'edad' => 'required',
		'descripcion' => 'required'
        ]);

        $animal->update($request->all());

        if ($request->hasfile('foto')){
              
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


/*      $animal = Animal::find($id);
        request()->validate(Animal::$rules);
        $animal->update($request->all());
*/
        return redirect()->route('animales.index')->with('success', 'Animal actualizado');
       }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $animal = Animal::find($id);
        $animal->delete();
        return redirect()->route('animales.index')->with('success', 'Animal elimindado');
    }
}
