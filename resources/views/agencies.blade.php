@extends('layouts.main')

@section('main-content')
    <div class="row">
        @foreach ($agencies as $agency)
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $agency->name }}</h4>
                        <p class="card-text">{{ $agency->location }}</p>
                        <p class="card-text">{{ 'Treni: ' . $agency->trains_fleet }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
