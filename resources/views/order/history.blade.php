@extends('layouts.app')

@section('content')

    <div class="container bg-white border rounded p-3">
        <header>
            <h3 class="text-center">{{ __('My orders history') }}</h3>
        </header>
        <hr>
        <section class="orders-list">
            @if($orders->count() > 0)
                @foreach($orders as $order)
                    <h3 class="text-center">{{ request('page') ? ++$counter * request('page') : ++$counter }}</h3>
                    <div class="my-2 bg-light p-3 rounded">
                        <ul class="list-group">
                            <li class="list-unstyled"><b>{{ __('Status') }}</b>: @if($order->status) <span class="text-success">{{ __('Completed') }}</span> @else <span class="text-danger">{{ __('Rejected') }}</span> @endif</li>
                            <li class="list-unstyled"><b>{{ __('Address') }}</b>: {{ $order->address }}</li>
                            <li class="list-unstyled"><b>{{ __('Message') }}</b>: {{ $order->message ? $order->message : __('No message') }}</li>
                            <li class="list-unstyled"><b>{{ __('Delivery') }}</b>: {{ $order->delivery ?  __('Checked') : __('Not checked') }}</li>
                            <li class="list-unstyled"><b>{{ __('Date') }}</b>: {{ $order->created_at->diffForHumans() }}</li>
                            <li class="list-unstyled"><b>{{ __('Total price') }}</b>: {{ $order->price }}$</li>
                        </ul>
                        <hr>
                        <article>
                            @foreach($order->products as $item)
                                <div class="d-inline-block mx-2">
                                    <img src="{{ asset('img/'.$item->product->image) }}" class="mr-1" alt="{{ $item->product->name }}" width="50">
                                    <span>{{ $item->product->name }} <b> × {{ $item->quantity }}</b></span>
                                </div>
                            @endforeach
                        </article>
                    </div>
                @endforeach
                {{ $orders->links() }}
            @else
                <h4 class="py-5 text-center">{{ __('Your orders list is empty') }}</h4>
            @endif
        </section>
    </div>
@endsection
