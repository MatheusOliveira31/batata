{{-- resouces/views/animais/index.blade.php --}}


@extends('base')

@section('titulo', 'Animais para Adoção')

@section('conteudo')
<p>
Veja nossa lista para aninais para adoação
    <br><a href="{{route('animais.cadastrar') }}"> Cadastrar animal </a></p>

@endsection