@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Treni in partenza</h1>
        <div class="row">

            @forelse ($trains as $train)

            <div class="card m-4" style="width: 18rem;">
                <img src="{{ $train->img }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Treno: {{ $train->azienda }}</h5>
                    <h5 class="card-title">Stazione Partenza: <br> {{ $train->stazione_partenza }} </h5>
                    <h5 class="card-title">Stazione Arrivo: <br> {{ $train->stazione_arrivo }} </h5>

                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Orario di partenza: {{ $train->orario_partenza }} </li>
                    <li class="list-group-item">Orario di arrivo: {{ $train->orario_arrivo }} </li>
                </ul>
            </div>

            @empty

            @endforelse
        </div>
    </div>

@endsection
