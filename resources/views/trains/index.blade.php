@extends('layouts.app')

@section('page-title', 'Trains')

@section('main-content')
    <h1 class="text-center">
        Trains
    </h1>

    <h2 class="text-center fs-3 mb-3">
        Data di partenza 2024-02-27
    </h2>

    <div class="row">
        @foreach ($trains as $train)
            <div class="col-12 col-sm-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">
                            Compagnia: {{ $train->company }}
                        </h3>
                        <ul>
                            <li>
                                Stazione di arrivo: {{ $train->arrival }}
                            </li>
                            <li>
                                Stazione di partenza: {{ $train->departure }}
                            </li>
                            <li>
                                Arrivo: {{ $train->arrival_time }}
                            </li>
                            <li>
                                Codice treno: {{ $train->train_code }}
                            </li>
                            <li>
                                Numero Carrozze:{{ $train->carrages }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
