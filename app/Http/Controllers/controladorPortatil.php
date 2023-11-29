<?php

namespace App\Http\Controllers;

use App\Models\Portatil;
use Illuminate\Http\Request;

class controladorPortatil extends Controller
{


}

 function index()
{
    $portatiles = Portatil::get();

    return view("portatiles", ['portatiles' => $portatiles]);

    @foreach($portatiles as $portatil)
        <tr>
        <form acton="{{}}">
            <td>$portatil->idPor</td>
            <td>$portatil->marca</td>
            <td><button>Insertar</button></td>
        <form>
        <tr>
        @endforeach
}

 function create()
{

}

 function store(Request $request)
{
    Portatil::create([
        'marca' => $request->marcaPor
    ]);

    return to_route('portatil.index')->with('msj', 'dchdsgncg')
}

 function show(string $id)
{

}

 function edit(string $id)
{

}

 function update(Request $request, Portatil  $portatil)
{
    $portatil:update([
        '' =>
    ]):
}

 function destroy(string $id)
{

}
