<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Database\QueryException;


class UserController extends Controller
{
    use PasswordValidationRules;

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:users.index')->only('index');
        $this->middleware('can:users.create')->only('create', 'store');
        $this->middleware('can:users.edit')->only('edit', 'update');
        $this->middleware('can:users.destroy')->only('destroy');
        $this->middleware('can:users.show')->only('show');
    }

    public function index()
    {
        $usuarios = User::all();
        return view('users.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ]);

        try {
            User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);


            return redirect()->route('users.index')->with('success', 'Usuario registrado correctamente');;
        } catch (QueryException $ex) {
            return redirect()->route('users.index')->with('error', 'Error, no se registro el usuario');;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $roles = Role::all();
        $usuario = User::find($id);
        return view("users.edit", compact('usuario', 'roles')); //devuelve form 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $user = User::find($id);
        try {
            $user->roles()->sync($request->rol);
            return redirect()->route('users.index')->with('success', 'Rol de usuario actualizado correctamente');;
        } catch (QueryException $ex) {
            return redirect()->route('users.index')->with('error', 'Error, no se actualizo el rol del usuario');;
        }
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
