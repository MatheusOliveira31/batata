
@extends('base')

@section('titulo', 'Apagar| Animais para Adoção')

@section('conteudo')
<p>Tem certeza que quer apagar?</p>
<p><em> {{$animal['nome'] }}</em></p>
<form action="animais.apagar"></form>
@endsection