@extends('layout.app')
@section('title', 'Detalhes do Comentário')
@section('content')

    <h2>{{ __("Detalhes do Comentário") }}</h2>
    <p>Nome: {{ $comentario->nome }}</p>
    <p>Email: {{ $comentario->email }}</p>
    <p>Telefone: {{ $comentario->telefone }}</p>
    <p>Comentário: {{ $comentario->comentario }}</p>

@endsection