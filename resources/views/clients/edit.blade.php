@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Cadastrar Cliente</h1>
            <form method="POST" action="{{ route('clients.update', $client->id) }}">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nome</label>
                        <input type="text" class="form-control" value="{{ $client->name }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>CPF</label>
                        <input type="text" class="form-control" value="{{ $client->cpf }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Data de Nascimento</label>
                        <input type="date" class="form-control" value="{{ $client->birthdate }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Sexo</label>
                        <select name="sexo" class="form-control mb-2">
                            <option value="0" {{ $client->sex == 'f' ? 'selected="selected"' : null }}>Feminino</option>
                            <option value="1" {{ $client->sex == 'm' ? 'selected="selected"' : null }}>Masculino</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control" value="{{ $client->email }}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Endereço</label>
                    <input type="text" class="form-control" placeholder="Rua" value="{{ $client->adress }}">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Numero</label>
                        <input type="text" class="form-control" placeholder="Numero da casa ou predio" value="{{ $client->number }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Complemento</label>
                        <input type="text" class="form-control" placeholder="Apartamento, andar" value="{{ $client->complement }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Cidade</label>
                        <input type="text" class="form-control" value="{{ $client->city }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Estado</label>
                        <input type="text" class="form-control" value="{{ $client->state }}">
                    </div>
                    <div class="form-group col-md-2">
                        <label>CEP</label>
                        <input type="text" class="form-control" value="{{ $client->cep }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-3">Salvar</button>
            </form>
        </div>
    </div>
</div>
@endsection