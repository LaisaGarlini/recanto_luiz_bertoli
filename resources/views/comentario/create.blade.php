@extends('layout.app')
@section('title', $title)
@section('content')

    <h2>{{ __("Criar Comentário") }}</h2>
    <form action="{{url('comentario')}}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required>
        <br>
        <label for="comentario">Comentário:</label>
        <input type="text" id="comentario" name="comentario" required>
        <br>
        <button type="submit">Salvar</button>
    </form> 

@endsection