
@extends('base')

@section('titulo', 'Apagar Usuário')

@section('conteudo')
<p>Tem certeza que quer apagar?</p>
<p><em> {{$usuario['nome'] }}</em></p>
<form action="{{ route ('usuario.apagar' , $usuario ['id'])}}" method="POST">
    @method('delete')
    @csrf
<input type="submit" value="Pode apagar sem medo" style="background-color:red; color:white; ">

</form>

<a href="{{route ('usuario.apagar', $usuario['id']) }}">Cancelar</a>
@endsection