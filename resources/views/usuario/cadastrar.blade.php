
@extends('base')

@section('titulo', 'Cadastro de Usuário')

@section('conteudo')

<p>Prencha o formulário</p>
@if($errors->any())
    <div>
        <h4>Deu ruim</h4>
        @foreach($errors->all() as $erro)
        <p>{{$erro}}</p>
            
        @endforeach
    </div>
@endif
<form method="post" action ="{{ route('usuario.gravar') }}">
    @csrf
    <p><input value="{{ old('nome', $usuario->nome ?? '') }}" type="text" name="nome"
        placeholder="Nome do Usuário" value=""></p>
    <p><input value="{{ old('email', $usuario->email?? '') }}" type="text" name="email"
        placeholder="Email do Usuário"></p>
    <p><input value="{{ old('login', $usuario->login?? '') }}" type="text" name="login"
            placeholder="Login do Usuário"></p>
    <p><input value="{{ old('senha', $usuario->senha?? '') }}" type="text" name="login"
                placeholder="Senha do Usuário"></p>
    <input type="submit" value="Gravar"> <br>
</form>
@endsection