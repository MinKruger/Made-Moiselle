@extends('layouts.app')

@section('content')
<h1 class="text-center">Clientes</h1>
<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('clients.create') }}" class="btn btn-success mb-3">Novo Cliente</a>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($clients as $client)
            <tr>
                <th>{{ $client->id }}</th>
                <td>{{ $client->name }}</td>
                <td>{{ $client->email }}</td>
                <td>
                    <a href="{{ route('clients.show', $client->id) }}" class="btn btn-info btn-sm">Detalhes</a>
                    <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <a href="{{ route('clients.destroy', $client->id) }}" class="btn btn-danger btn-sm">Excluir</a>
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