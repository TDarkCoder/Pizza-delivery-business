@extends('layouts.app')

@section('content')

    <div class="container bg-white border rounded p-3">
        <header>
            <h3 class="text-center">{{ __('My orders history') }}</h3>
        </header>
        <hr>
        <section class="orders-list">
            <h3 class="text-center">1</h3>
            <div class="my-2 bg-light p-3 rounded">
                <ul class="list-group">
                    <li class="list-unstyled"><b>{{ __('Status') }}</b>: <span class="text-success">Completed</span></li>
                    <li class="list-unstyled"><b>{{ __('Address') }}</b>: Somewhere</li>
                    <li class="list-unstyled"><b>{{ __('Message') }}</b>: Thank you very much for your existence!</li>
                    <li class="list-unstyled"><b>{{ __('Delivery') }}</b>: {{ __('Checked') }}</li>
                    <li class="list-unstyled"><b>{{ __('Date') }}</b>: 2020-24-04</li>
                    <li class="list-unstyled"><b>{{ __('Total price') }}</b>: 160.00$</li>
                </ul>
                <hr>
                <article>
                    <div class="d-inline-block mx-2">
                        <img src="{{ asset('img/pizzas/1.png') }}" class="mr-1" alt="Margarita" width="50">
                        <span>Margarita <b> × 2</b></span>
                    </div>
                    <div class="d-inline-block mx-2">
                        <img src="{{ asset('img/pizzas/2.png') }}" class="mr-1" alt="Quattro Stagioni" width="50">
                        <span>Quattro Stagioni <b> × 3</b></span>
                    </div>
                    <div class="d-inline-block mx-2">
                        <img src="{{ asset('img/pizzas/2.png') }}" class="mr-1" alt="Marinara" width="50">
                        <span>Marinara <b> × 1</b></span>
                    </div>
                </article>
            </div>
            <h3 class="text-center">2</h3>
            <div class="my-2 bg-light p-3 rounded">
                <ul class="list-group">
                    <li class="list-unstyled"><b>{{ __('Status') }}</b>: <span class="text-danger">{{ __('Rejected') }}</span></li>
                    <li class="list-unstyled"><b>{{ __('Address') }}</b>: Somewhere 1</li>
                    <li class="list-unstyled"><b>{{ __('Message') }}</b>: Thank you very much for your existence twice!</li>
                    <li class="list-unstyled"><b>{{ __('Delivery') }}</b>: {{ __('Checked') }}</li>
                    <li class="list-unstyled"><b>{{ __('Date') }}</b>: 2020-23-04</li>
                    <li class="list-unstyled"><b>{{ __('Total price') }}</b>: 55.00$</li>
                </ul>
                <hr>
                 <article>
                    <div class="d-inline-block mx-2">
                        <img src="{{ asset('img/pizzas/2.png') }}" class="mr-1" alt="Marinara" width="50">
                        <span>Marinara <b> × 1</b></span>
                    </div>
                    <div class="d-inline-block mx-2">
                        <img src="{{ asset('img/pizzas/1.png') }}" class="mr-1" alt="Margarita" width="50">
                        <span>Margarita <b> × 1</b></span>
                    </div>
                 </article>
            </div>
        </section>
    </div>
@endsection
