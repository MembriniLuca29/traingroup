@extends('layouts.main')

@section('page-title', 'Homepage')

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')
<h1>
    Homepage
</h1>

<button>
    <a href="{{ route('stations') }}">
        Stations! (bottone bellixximo)
    </a>
</button>

@endsection
