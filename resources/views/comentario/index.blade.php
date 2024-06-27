@extends('layout.app')
@section('title', $title)
@section('content')

    <h2>{{ __("Comentários") }}</h2>
    <br>
    <a href="{{url('comentario/create')}}">Criar</a>
    @foreach ($comentarios as $comentario)
        <p>comentario <a class="bg-sky-700" href="{{url('comentario').'/'.$comentario->id}}">{{ $comentario->id }} - {{ $comentario->nome }}</a></p>
    @endforeach

@endsection