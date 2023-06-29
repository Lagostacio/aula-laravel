<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsuariosController extends Controller
{
    public function index () {

        $usuarios = Usuario::paginate();

        return view('usuarios.index',[
            'usrs'=>$usuarios,
        ]);
    }

    public function add () {

        return view('usuarios.add');
    }

    public function addSave (Request $form) {

        $dados = $form->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        Usuario::create($dados);

        return redirect()->route('usuarios')->with('mensagem');
    }

    public function edit () {

    }
    public function delete (Usuario $usuario) {

        return view('usuarios.delete',[
            'user'=>$usuario
        ]);
    }

    public function deleteForReal (Usuario $usuario) {

        $usuario->delete();

        return redirect()->route('usuarios');
    }
}
