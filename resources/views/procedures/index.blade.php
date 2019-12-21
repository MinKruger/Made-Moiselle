@extends('layouts.app')

@section('content')
<h1 class="text-center">Procedimentos</h1>
<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('procedures.create') }}" class="btn btn-success mb-3">Novo Procedimento</a>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($procedures as $procedure)
            <tr>
                <th>{{ $procedure->id }}</th>
                <td>{{ $procedure->name }}</td>
                <td>${{ $procedure->amount }}</td>
                <td>
                    <a href="{{ route('procedures.show', $procedure->id) }}" class="btn btn-info btn-sm">Detalhes</a>
                    <a href="{{ route('procedures.edit', $procedure->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <a href="{{ route('procedures.destroy', $procedure->id) }}" class="btn btn-danger btn-sm">Excluir</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Sem entrada :(</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection