@extends('layouts.main')

@section('page-title', 'Stations')


@section('main-content')

    <div class="container">
        <div class="row">

            @foreach ($stations as $station)
        
                <div class="col-4 mb-5">
                    <h2>
                        {{ $station->location }}
                    </h2>
                    <h3>
                        @if ($station->ticket_resale)
                            Has ticket resale
                        @else
                            Doesn't have ticket resale
                        @endif
                    </h3>
                    <h3>
                        @if ($station->snack_bar)
                            Has snack bar
                        @else
                            Doesn't have snack bar  
                        @endif
                    </h3>
                </div>

            @endforeach

        </div>
    </div>

@endsection