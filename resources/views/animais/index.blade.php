{{-- resouces/views/animais/index.blade.php --}}


@extends('base')

@section('titulo', 'Animais para Adoção')

@section('conteudo')
<p>
Veja nossa lista para aninais para adoação
    <br><a href="{{route('animais.cadastrar') }}"> Cadastrar animal </a></p>

    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
        <tr>
            @foreach($animais as $animal)
            <td>{{ $animal['nome'] }}</td>
            <td>{{ $animal['idade'] }}</td>
            <td><a href="{{ route('animais.apagar' , $animal["id"]) }}">Apagar</td>
        </tr>
        @endforeach
    </table>

@endsection