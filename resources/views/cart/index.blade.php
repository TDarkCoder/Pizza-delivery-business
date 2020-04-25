@extends('layouts.app')

@section('content')

    <div class="container bg-white border p-3 rounded">
        <header>
            <h3 class="text-center">{{ __('Shopping cart') }}</h3>
        </header>
        <shopping-cart></shopping-cart>
    </div>

@endsection
