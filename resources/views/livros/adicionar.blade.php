@extends('layouts.app')

@section('content')
    <h2>Adicionar Livro</h2>

    <form action="{{ route('livros.store') }}" method="POST">
        @csrf
        <div>
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" required maxlength="100">
        </div>
        <div>
            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor" required maxlength="50">
        </div>
        <div>
            <label for="ano_publicacao">Ano de Publicação:</label>
            <input type="number" id="ano_publicacao" name="ano_publicacao" required>
        </div>
        <div>
            <label for="resumo">Resumo:</label>
            <textarea id="resumo" name="resumo" maxlength="500"></textarea>
        </div>
        <div>
            <button type="submit">Adicionar Livro</button>
        </div>
    </form>
@endsection
