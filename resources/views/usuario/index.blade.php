{{-- resouces/views/animais/index.blade.php --}}


@extends('base')

@section('titulo', 'Usuários')

@section('conteudo')
<p>
    <br><a href="{{route('usuario.cadastrar') }}"> Cadastro de Usuário </a>
</p>

    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Login</th>
        </tr>
        <tr>
            @foreach($usuarios as $usuario)
            <td>{{ $usuario['nome'] }}</td>
            <td>{{ $usuario['email'] }}</td>
            <td>{{ $usuario['login'] }}</td>
            <td><a href="{{ route('usuario.apagar' , $usuario["id"]) }}">Apagar</td>
            <td><a href="{{ route('usuario.editar' , $usuario["id"]) }}">Editar</td>

        </tr>
        @endforeach
    </table>

@endsection