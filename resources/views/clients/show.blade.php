@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Cliente</h1>
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-6"><b>Nome: </b></div>{{ $client->name }}
                            <div class="col-6"><b>CPF: </b></div>{{ $client->cpf }}
                            <div class="col-6"><b>Data de Nascimento: </b></div>{{ $client->birthdate }}
                            <div class="col-6"><b>Sexo: </b></div>{{ $client->sex == 'f' ? 'Feminino' : 'Masculino'}}
                            <div class="col-6"><b>Email: </b></div>{{ $client->email }}
                            <div class="col-12"><b>Endereço: </b></div>{{ $client->adress }}
                            <div class="col-6"><b>Numero: </b></div>{{ $client->number }}
                            <div class="col-6"><b>Complemento: </b></div>{{ $client->complement }}
                            <div class="col-3"><b>Cidade: </b></div>{{ $client->city }}
                            <div class="col-3"><b>Estado: </b></div>{{ $client->state }}
                            <div class="col-3"><b>CEP: </b></div>{{ $client->cep }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection