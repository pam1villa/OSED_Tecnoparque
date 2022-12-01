<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    //----------------Función para Mostrar los datos almacenados en la BD---------------------------
    public function index()
    {
        $users = User::all();
        return view('Users.index', compact('users'));
        // ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    //----------------Función para redirigir al formulario---------------------------
    public function create()
    {
        return view('Users.create');
    }
    //----------------Función para crear en BD---------------------------
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required',
        // ]);
        // dd ( $request->post());
        //ENCRIPTADO:
        $data = ($request ->all());
        $password = Hash::make($request -> password);
        $data ['password'] = $password;
        $data ['idRol'] = 1;
        User::create($data);


        //todo: autenticar -> redirige:
        return redirect()->route('dashboard')
            ->with('success', 'Usuario creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $users)
    {
        return view('Users.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('Users.edit', compact('user'));
    }


    //----------------Función para Actualizar---------------------------
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required',
        // ]);

        $user = User::find($id);
        $user->update($request->all());
        
        return redirect('/users'); //usar el nombre de la ruta

        // $users = User::all();
        // return view('Users.index', compact('users'));
        // ->with('success', 'Product updated successfully');
    }

    //----------------Función para eliminar---------------------------
    public function delete($id)
    {
        $deleteuser = User::FindOrFail($id);
        $deleteuser->delete();
        return redirect('/users');
    }


    public function test()
    {
        // return view('layouts.users.index', compact('users'));
        return view('layouts.users.prueba');
    }
}
