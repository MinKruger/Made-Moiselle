@extends('layouts.app')

@section('content')
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<div class="container mt-5">
    <a href="{{ route('schedules.create') }}" class="btn btn btn-success btn-lg col-2">Novo agendamento</a>
    <div class="card mt-5 mb-5">
        <div class="card-body">
            <div class="container">
                @forelse($schedules as $schedule)
                <div class="row row-striped">
                    <div class="col-2 text-right">
                        <h1 class="display-4"><span class="badge badge-secondary">{{ $schedule->date->format('d') }}</span></h1>
                        <h2>{{ $schedule->date->locale('pt_BR')->monthName }}</h2>
                    </div>
                    <div class="col-10">
                        <h3 class="text-uppercase"><strong>{{ $schedule->procedure->name }}</strong></h3>
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $schedule->date->format('h:i') }}</li>
                        </ul>
                        <p>{{ $schedule->client->name }}</p>
                        @if($schedule->status == 0)
                        <a href="{{ route('schedules.finished', $schedule->id) }}" class="btn btn btn-info col-2" style="float:right">Executar atendimento</a>
                        @endif
                    </div>
                </div>
                @empty
                    <img src="https://www.chronicle.com/blogs/linguafranca/files/2017/11/Nothing-to-See-15a34a2fc727c8.jpg" class="img-fluid">
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection