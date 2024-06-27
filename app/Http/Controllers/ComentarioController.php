<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comentarios = Comentario::all();
        return view('comentario.index',array('comentarios' => $comentarios,
        'title' => 'Comentários'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comentario.create', ['title' => 'Criar Comentário']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'required|string|max:20',
            'comentario' => 'required|string',
        ]);

        $comentario = new Comentario([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone'),
            'comentario' => $request->input('comentario'),
        ]);

        if ($comentario->save()) {
            return redirect('comentario')->with('success', 'Comentário criado com sucesso');
        } else {
            return redirect('comentario/create')->with('error', 'Falha ao criar comentário');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comentario = Comentario::find($id);
        return view('comentario.show', [
            'comentario' => $comentario,
            'title' => 'Detalhes do Comentário'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
