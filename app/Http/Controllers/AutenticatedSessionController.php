<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutenticatedSessionController extends Controller
{
    Public function store(Request $request){
        $credenciales=$request-> validate([
            'user' => ['required'],
            'password'=> ['required'],
        ])
    }
}
