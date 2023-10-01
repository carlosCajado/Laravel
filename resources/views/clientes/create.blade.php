@extends('layout.principal')
@section('titulo', 'Novo Cliente')
@section('conteudo')
    <h3>Cliente Novo</h3>

    <form action="{{route('clientes.store')}}" method='post'>
        @csrf
        <input type="text" name="nome">
        <input type="submit" value="Cadastrar">

    </form>
    @alerta(['titulo'=> 'Erro', 'tipo'=> 'info'])
        <strong>Erro </strong>
        <h3> Procure o Suporte</h3>
    @endalerta
    @component('components.alert', ['titulo'=> 'Erro', 'tipo'=> 'info'])
    <strong>Erro </strong>
    <h3> Procure o Suporte</h3>
    @endcomponent
    @component('components.alert', ['titulo'=> 'Erro', 'tipo'=> 'success'])
        <strong>Erro </strong>
        <h3> Procure o Suporte</h3>
    @endcomponent
    @component('components.alert', ['titulo'=> 'Erro', 'tipo'=> 'error  '])
        <strong>Erro </strong>
        <h3> Procure o Suporte</h3>
    @endcomponent
@endsection

