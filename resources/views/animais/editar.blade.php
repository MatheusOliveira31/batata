@extends('base')
@section('titulo', 'Página de Produtos - Editar')
@section('conteudo')
 <h1>Animais - Editar</h1>
 @if ($errors->any())
 <p>Preencha os campos corretamente.</p>
 <ul>
 @foreach($errors->all() as $erro)
 <li>{{ $erro }}</li>
 @endforeach
 </ul>
 @endif
 <form action="{{ route('animais/editar', $animal->id) }}" method="post">
 @csrf
 @method('put')

 <p><input value="{{ old('nome', $animal->nome ?? '') }}" type="text" name="nome"
placeholder="Nome do produto" value=""></p>
 <p><input value="{{ old('idade', $animal->idade?? '') }}" type="number" name="idade"
placeholder="Idade"></p>
 <p><textarea name="descricao" cols="30" rows="10" placeholder="Descrição">{{
old('descricao', $animal->descricao ?? '') }}</textarea></p>
 <p><input type="submit" value="Gravar"></p>
 </form>
@endsection