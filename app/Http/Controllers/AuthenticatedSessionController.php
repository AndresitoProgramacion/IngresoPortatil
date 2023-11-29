<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request){


        $credentials = $request->validate([
            'Usuario' => ['required', 'string'],
            'Contraseña' => ['required', 'string'],
        ]);

        if (Auth::attempt(['Usuario' => $credentials['Usuario'], 'password' => $credentials['Contraseña']])) {
            throw ValidationException::withMessages([
                'Usuario' => __('auth.failed'),
                'Contraseña' => __('auth.failed'),
            ]);
        }




        $request->session()->regenerate();
        return redirect()->route('welcome')->with('status', 'Sesión Iniciada Correctamente');




    }

}
