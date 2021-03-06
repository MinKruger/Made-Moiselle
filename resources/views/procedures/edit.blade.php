@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1>Cadastrar Procedimento</h1>
            <form method="POST" action="{{ route('procedures.update', $procedure->id) }}">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nome</label>
                        <input type="text" name="name" class="form-control" value="{{ $procedure->name }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Preço</label>
                        <input type="number" name="amount" class="form-control" value="{{ $procedure->amount }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Custo</label>
                        <input type="number" name="base_amount" class="form-control" value="{{ $procedure->base_amount }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Sessoes</label>
                        <input type="number" name="session" class="form-control" value="{{ $procedure->session }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-3">Salvar</button>
            </form>
        </div>
    </div>
</div>
@endsection