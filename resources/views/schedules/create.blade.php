@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1>Novo Agendamento</h1>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('schedules.store') }}">
                        @csrf

                        <div class="row">
                            <div class="col-12">
                                <label>Clientes</label>
                                <select name="client_id" class="form-control">
                                    @forelse($clients as $client)
                                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                                    @empty
                                    <option>Nenhum cliente :(</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="col-12">
                                <label>Procedimentos</label>
                                <select name="procedure_id" class="form-control">
                                    @forelse($procedures as $procedure)
                                    <option value="{{ $procedure->id }}">{{ $procedure->name }}</option>
                                    @empty
                                    <option>Nenhum procedimento :(</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="col-12">
                                <label>Data</label>
                                <input type="date" name="date" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Agendar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection