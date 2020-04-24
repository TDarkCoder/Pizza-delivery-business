@extends('layouts.app')

@section('content')

    <div class="container bg-white border p-3 rounded">
        <header>
            <h3 class="text-center">{{ __('Our menu') }}</h3>
        </header>
        <hr>
        <products></products>
    </div>

@endsection
