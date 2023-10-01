
@extends('layout.principal')
@section('titulo', 'Clientes')
@section('conteudo')
<h1>Clientes </h1>
<a href="{{route('clientes.create')}}">NOVO CLIENTE</a>
@if($clientes)
    <ol>
        @foreach($clientes as $c )
            <li>
                {{$c['nome']}}
                <a href="{{route('clientes.edit', $c['id'])}}">editar</a>
                <a href="{{route('clientes.show', $c['id'])}}">info</a>
                <form action="{{route('clientes.destroy', $c['id'])}}" method='post'>
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Apagar">

                </form>
            </li>
        @endforeach
    </ol>
@else
    <h3>Não Existe Clientes Cadastrados </h3>
@endif
@endsection

