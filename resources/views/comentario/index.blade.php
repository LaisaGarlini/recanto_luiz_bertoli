@extends('layout.app')
@section('title', $title)
@section('content')
<style>
    h2,a {
        margin: 5px;
    }

    #comentario{
        margin: 5px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, .1);
        border-radius: 20px;
    }
</style>
<!-- <h2>{{ __("Comentários") }}</h2>
<br>

 <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Comentário</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comentarios as $comentario)
                    <tr>
                        <td>{{ $comentario->id }}</td>
                        <td>{{ $comentario->nome }}</td>
                        <td>{{ $comentario->email }}</td>
                        <td>{{ $comentario->telefone }}</td>
                        <td>{{ $comentario->comentario }}</td>
                        <td>
                            <a href="{{ url('comentario/' . $comentario->id) }}" class="btn btn-sm btn-info">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> -->

@foreach ($comentarios as $comentario)
    <div class="m-2 p-2 border border-secondary" id="comentario">
        <p><i>- {{ $comentario->nome }}</i></p>
        <p>{{ $comentario->comentario }}</p>
        <a href="{{ url('comentario/' . $comentario->id) }}" class="btn btn-sm btn-secondary">Ver</a>
    </div>
   
@endforeach
<a href="{{ url('comentario/create') }}" class="btn btn-primary mb-3">Criar Comentário</a>
@endsection