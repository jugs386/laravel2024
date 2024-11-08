<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    public function index(Request $request)
    {
        // Obtém todos os registros do modelo
        $registros = Livro::all();
        // Retorna uma view com os registros
        return view('livros.index', compact('registros'));
    }

    public function create()
    {
        // Retorna a view para criar um novo registro
        return view('livros.adicionar');
    }

    public function store(Request $request)
    {
        // Validação dos dados recebidos
        $request->validate([
            'titulo' => 'required|string|max:100',
            'autor' => 'required|string|max:50',
            'ano_publicacao' => 'required|integer',
            'resumo' => 'nullable|string', // Opcional
        ]);
    
        // Cria um novo registro no banco de dados
        Livro::create($request->all());
        // Redireciona com uma mensagem de sucesso
        return redirect()->route('livros.index')->with('success', 'Registro criado com sucesso!');
    }
}
