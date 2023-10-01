
@extends('layout.principal')
@section('titulo', 'Opções')
@section('conteudo')
    <h1>Opções </h1>
        <div class="options">
            <ul>
                <li>
                    <a  class="warning" href="{{route('opcoes', 1)}}">warning</a>
                </li>
                <li>
                    <a class="info" href="{{route('opcoes', 2)}}">info</a>
                </li>
                <li>
                    <a class="success"  href="{{route('opcoes', 3)}}">success</a>
                </li>
                <li>
                    <a class="error"  href="{{route('opcoes', 4)}}">options</a>
                </li>
            </ul>


@endsection

