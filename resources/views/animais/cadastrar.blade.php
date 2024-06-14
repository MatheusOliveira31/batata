
@extends('base')

@section('titulo', 'Animais para Adoção')

@section('conteudo')

<p>Prencha o formulário</p>
<form method="post" action ="{{ route('animais.gravar') }}">
    @csrf
    <input type="text" name="nome" placeholder="Nome"> <br>
    <input type="number" name="idade" placeholder="Idade"> <br>
    <input type="submit" value="Gravar"> <br>
</form>
@endsection