<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index()
    {
        $dados = Usuario::all();
        return view('usuario.index', [
            'usuarios' => $dados,
        ]);
    }

    public function cadastrar()
    {
        return view('usuario.cadastrar');
    }

    public function gravar(Request $form)
    {
        $dados = $form->validate([
            'nome' => 'required|min:3',
            'email' => 'required|email',
            'login' => 'required',
            'senha' => 'required|min:6'


        ]);
        $dados['senha'] = Hash::make($dados['senha']);

        Usuario::create($dados);
        return redirect()->route('usuario');
    }
    public function apagar(Usuario $usuario)
    {
        return view('usuario.apagar', [
            'usuario' => $usuario,
        ]);
    }

    public function deletar(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuario');
    }

    public function editar(Usuario $usuario)
    {
        return view('usuario/editar', ['usuario' => $usuario]);
    }


    public function editarGravar(Request $form, Usuario $usuario)
    {
        $dados = $form->validate([
            'nome' => 'required|min:3',
            'email' => 'required|email',
            'login' => 'required',
            'senha' => 'required|min:6'
        ]);

        $usuario->fill($dados);
        $usuario->save();
        return redirect()->route('usuario');
    }
}
