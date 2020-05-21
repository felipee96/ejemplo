<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\registro;

class RegistroController extends Controller
{
    public function index()
    {
        return view('principal');
    }

    public function ver()
    {
        return view('ver');
    }

    //METODO DE GUARDAR
    public function store(Request $request)
    {
        $datosRegistro = request()->except('_token');
        registro::insert($datosRegistro);
        return view('ver');

    }

    //METODO EDITAR
    public function edit(Request $request, $id)
    {
        $users = registro::findOrFail($id);
        return view('editar')->with('users', $users);
        //findorfail sirve para nos permite recuperar un registro de un modelo
         //a partir de su ID sin necesidad de comprobar si existe
    }

    //METODO ACTUALIZAR
    public function update(Request $request, $id)
    {
        $users = registro::find($id);
        $users->nombre = $request->input('nombre');
        $users->apellido = $request->input('apellido');
        $users->telefono = $request->input('telefono');
        $users->correo = $request->input('correo');
        $users->update();

        return redirect('/Ver');
    }

    //METODO ELIMINAR
    public function destroy($id)
    {
        $users = registro::findOrFail($id);
        $users->delete();

        return redirect('/Ver');
    }
}
