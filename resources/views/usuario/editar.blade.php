@extends('base')
@section('titulo', 'Editar Usuário')
@section('conteudo')
 <h1>Usuário - Editar</h1>
 @if ($errors->any())
 <p>Preencha os campos corretamente.</p>
 <ul>
 @foreach($errors->all() as $erro)
 <li>{{ $erro }}</li>
 @endforeach
 </ul>
 @endif
 <form action="{{ route('usuario.editar', $usuario->id) }}" method="post">
 @csrf
 @method('put')

 <p><input value="{{ old('nome', $usuario->nome ?? '') }}" type="text" name="nome"
placeholder="Nome do Usuário" value=""></p>
 <p><input value="{{ old('email', $usuario->email?? '') }}" type="text" name="email"
placeholder="Email do Usuário"></p>
<p><input value="{{ old('login', $usuario->login?? '') }}" type="text" name="login"
    placeholder="Login do Usuário"></p>
<p><input value="{{ old('senha', $usuario->senha?? '') }}" type="text" name="senha"
        placeholder="Senha do Usuário"></p>

 <p><input type="submit" value="Gravar"></p>
 </form>
@endsection