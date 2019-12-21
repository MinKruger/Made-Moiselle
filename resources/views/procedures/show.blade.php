@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Procedimento</h1>
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-6"><b>Nome: </b></div>{{ $procedure->name }}
                            <div class="col-6"><b>Preço: $</b></div>{{ $procedure->amount }}
                            <div class="col-6"><b>Custo: </b></div>{{ $procedure->base_amount }}
                            <div class="col-6"><b>Sessões por procedimento: </b></div>{{ $procedure->session }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection