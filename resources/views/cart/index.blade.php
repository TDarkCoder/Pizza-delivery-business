@extends('layouts.app')

@section('content')

    <div class="container bg-white border p-3 rounded">
        <header>
            <h3 class="text-center">{{ __('Shopping cart') }}</h3>
        </header>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Action</th>
                    <th>Pizza</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total price</th>
                </tr>
                <tr>
                    <th scope="row">
                        <button class="btn btn-sm btn-outline-danger">x</button>
                    </th>
                    <td>
                        <img src="{{ asset('img/pizzas/1.png') }}" class="mr-1" alt="Margarita" width="50">
                        <span>Margarita</span>
                    </td>
                    <td>25.00$</td>
                    <td>
                        <label style="width:60px">
                            <input type="number" step="1" min="1" class="form-control form-control-sm" value="2">
                        </label>
                    </td>
                    <td>50.00$</td>
                </tr>
                <tr>
                    <th scope="row">
                        <button class="btn btn-sm btn-outline-danger">x</button>
                    </th>
                    <td>
                        <img src="{{ asset('img/pizzas/2.png') }}" class="mr-1" alt="Quattro Stagioni" width="50">
                        <span>Quattro Stagioni</span>
                    </td>
                    <td>25.00$</td>
                    <td>
                        <label style="width:60px">
                            <input type="number" step="1" min="1" class="form-control form-control-sm" value="3">
                        </label>
                    </td>
                    <td>75.00$</td>
                </tr>
                <tr>
                    <th scope="row">
                        <button class="btn btn-sm btn-outline-danger">x</button>
                    </th>
                    <td>
                        <img src="{{ asset('img/pizzas/2.png') }}" class="mr-1" alt="Marinara" width="50">
                        <span>Marinara</span>
                    </td>
                    <td>25.00$</td>
                    <td>
                        <label style="width:60px">
                            <input type="number" step="1" min="1" class="form-control form-control-sm" value="1">
                        </label>
                    </td>
                    <td>25.00$</td>
                </tr>
            </table>
            <div class="text-right p-2">
                <h5 class="mb-3">{{ __('Total price') }}: 150.00$</h5>
                <a href="{{ route('checkout') }}" class="btn btn-outline-success">{{ __('Place order') }}</a>
            </div>
        </div>
    </div>

@endsection
