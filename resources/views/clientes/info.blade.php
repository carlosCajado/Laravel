@extends('layout.principal')
@section('titulo', 'Informações')
@section('conteudo')
    <h3>Cliente info</h3>
    <p>ID: {{$cliente['id']}}</p>
    <p>Nome: {{$cliente['nome']}}</p>
    <a href="{{ route('clientes.index')}}">voltar</a>
@endsection
