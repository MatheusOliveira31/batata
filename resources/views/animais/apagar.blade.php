
@extends('base')

@section('titulo', 'Apagar| Animais para Adoção')

@section('conteudo')
<p>Tem certeza que quer apagar?</p>
<p><em> {{$animal['nome'] }}</em></p>
<form action="{{ route ('animais.apagar' , $animal ['id'])}}" method="POST">
    @method('delete')
    @csrf
<input type="submit" value="Pode apagar sem medo" style="background-color:red; color:white; ">

</form>

<a href="{{route ('animais.apagar', $animal['id']) }}">Cancelar</a>
@endsection