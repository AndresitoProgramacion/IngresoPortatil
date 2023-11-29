<?php

namespace App\Http\Controllers;


use Illuminate\Auth\Events\Failed;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request){


        $credentials = $request->validate([
            'Usuario' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);



        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('welcome')->with('status', 'Sesión Iniciada Correctamente');
        }
        throw ValidationException::withMessages([
            'Usuario' => __('Usuario no encontrado'),
            'passsword' => __('auth.failed')
        ]);




    }

}
