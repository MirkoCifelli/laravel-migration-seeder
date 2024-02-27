@extends('layouts.app')

@section('page-title', 'Trains')

@section('main-content')
    <h1>
        Trains
    </h1>

    <div class="row">
        @foreach ($trains as $train)
            <div class="col-12 col-sm-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h3>
                           Compagnia: {{ $train->company }}
                        </h3>
                        <ul>
                            <li>
                               Arrivo: {{ $train->departure_time }}
                            </li>
                            <li>
                                Codice treno: {{ $train->train_code }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
