<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
            'name' => 'string|required',
            'email' => 'email|required',
            'password' => 'string|required',
        ]);

        $dados['password'] = Hash::make($dados['password']);
        Usuario::create($dados);

        return redirect()->route('usuarios');
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

    public function login(Request $req) {

        if($req->isMethod('POST')){
            $data = $req->validate([
                'email'=> 'required',
                'password'=> 'required'
            ]);

            if (Auth::attempt($data)){
                return redirect()->route('usuarios');
            } else {
                return redirect()->route('login')->with('erro','Deu ruim!');
            }



        }

        return view('usuarios.login');
    }

    public function logout (){
        Auth::logout();

        return redirect()->route('usuarios');
    }
}
