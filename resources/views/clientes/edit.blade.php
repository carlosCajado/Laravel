@extends('layout.principal')
@section('titulo', 'Editar Cadastro')
@section('conteudo')<h3>Editar</h3>

    <form action="{{route('clientes.update', $cliente['id'])}}" method='post'>
        @csrf
        @method("PUT")
        <input type="text" name="nome" value="{{$cliente['nome']}}">
        <input type="submit" value="Atualizar">

    </form>
@endsection
