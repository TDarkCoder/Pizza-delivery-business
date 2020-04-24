@extends('layouts.app')

@section('content')

    <div class="container bg-white border rounded p-3">
        <header>
            <h3 class="text-center">{{ __('Order confirmation') }}</h3>
        </header>
        <hr>
        <section class="order-information bg-light p-3 rounded">
            <ul class="list-group">
                <li class="list-unstyled"><b>{{ __('Address') }}</b>: Somewhere</li>
                <li class="list-unstyled"><b>{{ __('Message') }}</b>: Thank you very much for your existence!</li>
                <li class="list-unstyled"><b>{{ __('Delivery') }}</b>: {{ __('Checked') }}</li>
                <li class="list-unstyled"><b>{{ __('Date') }}</b>: 2020-24-04</li>
                <li class="list-unstyled"><b>{{ __('Total price') }}</b>: 160.00$</li>
            </ul>
            <hr>
            <div class="table-responsive">
                <table class="table table-sm table-borderless mb-0">
                    <tr>
                        <th>Pizza</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total price</th>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('img/pizzas/1.png') }}" class="mr-1" alt="Margarita" width="50">
                            <span>Margarita</span>
                        </td>
                        <td>25.00$</td>
                        <td>
                            2
                        </td>
                        <td>50.00$</td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('img/pizzas/2.png') }}" class="mr-1" alt="Quattro Stagioni" width="50">
                            <span>Quattro Stagioni</span>
                        </td>
                        <td>25.00$</td>
                        <td>
                            <span>3</span>
                        </td>
                        <td>75.00$</td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('img/pizzas/2.png') }}" class="mr-1" alt="Marinara" width="50">
                            <span>Marinara</span>
                        </td>
                        <td>25.00$</td>
                        <td>
                            1
                        </td>
                        <td>25.00$</td>
                    </tr>
                </table>
            </div>
        </section>
        <section class="confirmation-buttons mt-3">
            <div class="text-center">
                <form action="" class="d-inline-block">
                    <button type="button" class="btn btn-outline-success">{{ __('Confirm') }}</button>
                </form>
                <form action="" class="d-inline-block">
                    <button type="button" class="btn btn-outline-danger">{{ __('Cancel') }}</button>
                </form>
            </div>
        </section>
    </div>
@endsection
