<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function create(Request $datosPost)
    {
        $nuevoUsuario = new Usuario();
        $nuevoUsuario->firstName = $datosPost->firstName;
        $nuevoUsuario->lastName = $datosPost->lastName;
        $nuevoUsuario->email = $datosPost->email;
        $nuevoUsuario->pwd = $datosPost->pwd;
        $nuevoUsuario->save();
        return "El usuario se registro exitosamente";
    }
}
