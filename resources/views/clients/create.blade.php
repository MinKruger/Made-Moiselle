@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Cadastrar Cliente</h1>
            <form method="POST" action="{{ route('clients.store') }}">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nome</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>CPF</label>
                        <input type="text" name="cpf" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Data de Nascimento</label>
                        <input type="date" name="birthdate" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="seunome@email.com">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Sexo</label>
                        <select name="sexo" class="form-control mb-2">
                            <option value="0" checked>Feminino</option>
                            <option value="1">Masculino</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Endereço</label>
                    <input type="text" name="address" class="form-control" placeholder="Rua">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Numero</label>
                        <input type="text" name="number" class="form-control" placeholder="Numero da casa ou predio">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Complemento</label>
                        <input type="text" name="complement" class="form-control" placeholder="Apartamento, andar">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Cidade</label>
                        <input type="text" name="city" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Estado</label>
                        <input type="text" name="state" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label>CEP</label>
                        <input type="text" name="cep" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-3">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
@endsection