<!-- resources/views/proprietarios/index.blade.php -->

@extends('layouts.app') <!-- Caso esteja usando um layout principal (opcional) -->

@section('content')
    <div class="container">
        <h1>Proprietários Cadastrados</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome Completo</th>
                    <th>Data de Cadastro</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proprietarios as $proprietario)
                    <tr>
                        <td>{{ $proprietario->nome_completo }}</td>
                        <td>{{ $proprietario->created_at->format('d/m/Y H:i:s') }}</td>
                        <td>
                            <!-- Adicione aqui os botões para editar ou excluir o proprietário -->
                            <a href="{{ route('proprietarios.edit', $proprietario->id) }}" class="btn btn-primary">Editar</a>
                            <!-- Adicione aqui a rota e o método para excluir o proprietário (usando o formulário) -->
                            <form action="{{ route('proprietarios.destroy', $proprietario->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
