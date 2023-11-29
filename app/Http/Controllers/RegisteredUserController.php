<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombreCelador' => ['required','string','max:255'],
            'identificacion' => ['required','integer'],
            'Usuario' => ['required','string','max:255','unique:celadores'],
            'Contraseña' => ['required','confirmed'],
        ]);
        User::create([
            'nombreCelador' => $request->nombreCelador,
            'identificacion' => $request->identificacion,
            'Usuario' => $request->Usuario,
            'Contraseña' => bcrypt($request->Contraseña)
        ]);
        return to_route('login')->with('status','Cuenta Creada Correctamente');

    }
}
