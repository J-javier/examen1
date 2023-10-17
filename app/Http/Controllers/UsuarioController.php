<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuario = new Usuario();
        return $usuario->all();
    }

    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nombre =$request->nombre;
        $usuario->apellido =$request->apellido;
        $usuario->correo =$request->correo;
        $usuario->fecha_registro =$request->fecha_registro;
        $usuario->save();
        return "Tu consulta ha sido ejecutada"; 
    }

    public function show(string $id)
    {
        return Usuario::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $usuarios = Usuario::all();
        $usuario = $usuarios->find($id);
        $usuario->nombre =$request->nombre;
        $usuario->apellido =$request->apellido;
        $usuario->correo =$request->correo;
        $usuario->fecha_registro =$request->fecha_registro;
        $usuario->save();
        return $usuario;
    }

    public function destroy(Usuario $id)
    {
        $usuarios = Usuario::all();
        $usuario = $usuarios->find($id);
        $usuario->delete();
        return "Usuario eliminado";
    }
}
