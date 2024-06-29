@extends('layout.app')
@section('title', $title)
@section('content')
<style>
    h2 {
        display: flex;
        justify-content: center;
    }

    .comentario {
        position: absolute;
        top: 55%;
        left: 50%;
        padding: 20px;
        transform: translate(-50%, -50%);
        box-shadow: 0 10px 20px rgba(0, 0, 0, .6);
        border-radius: 30px;
    }

    input {
        padding: 10px;
        border: none;
        outline: none;
        font-size: 15px;
        border-radius: 20px;
        margin: 5px;
        width: 88%;
        background-color: rgba(184,200,214,0.7870797977394083);
    }

    .button {
        padding: 10px;
        border: none;
        border-radius: 20px;
        background-color: rgb(31, 249, 118);
        margin: 5px;
        width: 89%;
    }

    .button:hover {
        background-color: rgb(52, 140, 118);
        cursor: pointer;
    }
</style>
<div class="comentario">
    <h3>{{ __("Criar Comentário") }}</h3>
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
        <button class="button" type="submit">Salvar</button>
    </form>
</div>
@endsection