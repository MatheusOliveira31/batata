<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

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
            'idade' => 'required|integer',
            'descricao' => 'required'

        ]);
        Usuario::create($dados);
        return redirect()->route('usuarios');
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
        return redirect()->route('usuarios');
    }

    public function editar(Usuario $usuario)
    {
        return view('usuario/editar', ['usuario' => $usuario]);
    }


    public function editarGravar(Request $form, Usuario $usuario)
    {
        $dados = $form->validate([
            'nome' => 'required|max:255',
            'idade' => 'required',
            'descricao' => 'required'
        ]);

        $usuario->fill($dados);
        $usuario->save();
        return redirect()->route('usuarios');
    }
}
