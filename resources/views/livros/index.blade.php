@extends('layouts.app')

@section('content')
    <h2>Lista de Livros</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Ano de Publicação</th>
                <th>Resumo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registros as $livro)
                <tr>
                    <td>{{ $livro->titulo }}</td>
                    <td>{{ $livro->autor }}</td>
                    <td>{{ $livro->ano_publicacao }}</td>
                    <td>{{ $livro->resumo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
