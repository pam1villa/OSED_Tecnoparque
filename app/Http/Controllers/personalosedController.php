<?php

namespace App\Http\Controllers;

use App\Models\personalOsed;
use Illuminate\Http\Request;

class personalosedController extends Controller
{
    
    public function index()
    {
        $personalosed = personalOsed::all();
        return view('PersonalOSED.index', compact('personalosed'));
        // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // public function create()
    // {
    //     //
    // }

    // public function store(Request $request)
    // {
    //     personalOsed::create($request->all());
    //     //todo: autenticar -> redirige
    //     return redirect()->route('dashboard')
    //         ->with('success', 'Usuario creado correctamente');
    // }

    // public function show($id)
    // {
    //     //
    // }

    
    // public function edit($id)
    // {
    //     //
    // }

    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // public function destroy($id)
    // {
    //     //
    // }
}
