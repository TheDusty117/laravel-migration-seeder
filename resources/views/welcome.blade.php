<!-- estende il pezzo "layouts/app" ovvero la nostra maschera di layout, e ne estende l'interno con un content qui sotto -->
@extends('layouts.app')



@section('content')

<section class="content-section">
    <div class="container">
        <h3>questo e' il contenuto tramite controller PER I TRENI</h3>

        @forelse ($trains as $train)

        <div class="card my-4" style="width: 18rem;">
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
</section>

@endsection



@section('content')
