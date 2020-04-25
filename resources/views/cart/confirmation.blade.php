@extends('layouts.app')

@section('content')

    <div class="container bg-white border rounded p-3">
        @if(session()->has('message'))
            <div class="alert alert-warning">
                <span>{{ session()->get('message') }}</span>
            </div>
        @endif
        <header>
            <h3 class="text-center">{{ __('Order confirmation') }}</h3>
        </header>
        <hr>
        <section class="order-information bg-light p-3 rounded">
            <ul class="list-group">
                <li class="list-unstyled"><b>{{ __('Address') }}</b>: {{ $order->address }}</li>
                <li class="list-unstyled"><b>{{ __('Message') }}</b>: {{ $order->message ?? __('No message')  }}</li>
                <li class="list-unstyled"><b>{{ __('Delivery') }}</b>: {{ $order->delivery ? __('Checked') : __('Not checked') }}</li>
                <li class="list-unstyled"><b>{{ __('Date') }}</b>: {{ $order->created_at->diffForHumans() }}</li>
                <li class="list-unstyled"><b>{{ __('Total price') }}</b>: {{ $order->price }}$</li>
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
                    @foreach($order->products as $item)
                        <tr>
                            <td>
                                <img src="{{ asset('img/'.$item->product->image) }}" class="mr-1" alt="{{ $item->product->name }}" width="50">
                                <span>{{ $item->product->name }}</span>
                            </td>
                            <td>{{ $item->product->price }}$</td>
                            <td>
                                {{ $item->quantity }}
                            </td>
                            <td>{{ $item->quantity * $item->product->price }}$</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </section>
        <section class="confirmation-buttons mt-3">
            <div class="text-center">
                <form action="{{ route('order.update', ['order' => $order->id]) }}" method="post" class="d-inline-block">
                    @csrf
                    <input type="hidden" name="status" value="1">
                    <button type="submit" class="btn btn-outline-success">{{ __('Confirm') }}</button>
                </form>
                <form action="{{ route('order.update', ['order' => $order->id]) }}" method="post" class="d-inline-block">
                    @csrf
                    <input type="hidden" name="status" value="0">
                    <button type="submit" class="btn btn-outline-danger">{{ __('Cancel') }}</button>
                </form>
            </div>
        </section>
    </div>
@endsection
