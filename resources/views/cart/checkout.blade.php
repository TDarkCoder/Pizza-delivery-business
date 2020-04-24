@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="" method="post">
            <header>
                <h3 class="text-center">{{ __('Place order') }}</h3>
            </header>
            <div class="row mt-4">
                <section class="col-md-7">
                    <div class="bg-white border p-3 rounded">
                        <header class="text-center pt-2">
                            <h5 class="mb-0">{{ __('Personal information') }}</h5>
                        </header>
                        <hr>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="name">{{ __('Name') }}*</label>
                                <input type="text" id="name" class="form-control form-control-sm" value="@auth {{ Auth::user()->name }} @endauth" @auth readonly @endauth>
                            </div>
                            <div class="col-sm-6">
                                <label for="email">{{ __('Email') }}*</label>
                                <input type="email" id="email" class="form-control form-control-sm" value="@auth {{ Auth::user()->email }} @endauth" @auth readonly @endauth>
                            </div>
                        </div>
                        @guest
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="password">{{ __('Password') }}*</label>
                                    <input type="password" id="password" class="form-control form-control-sm" value="@auth {{ Auth::user()->name }} @endauth" @auth readonly @endauth>
                                </div>
                                <div class="col-sm-6">
                                    <label for="password_confirmation">{{ __('Confirm password') }}*</label>
                                    <input type="password" id="password_confirmation" class="form-control form-control-sm" value="@auth {{ Auth::user()->email }} @endauth" @auth readonly @endauth>
                                </div>
                            </div>
                        @endguest
                        <div class="form-group">
                            <label for="address">{{ __('Address') }}*</label>
                            <textarea id="address" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="delivery">{{ __('Delivery') }} </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" id="delivery" aria-label="{{ __('Delivery') }}" checked>
                                    </div>
                                    <label for="delivery" class="input-group-text rounded-right bg-white"><b>5.00$</b></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">{{ __('Message') }} ({{ __('optional') }})</label>
                            <textarea id="message" class="form-control"></textarea>
                        </div>
                    </div>
                </section>
                <section class="col-md-5 mt-md-0 mt-2">
                    <div class="bg-white border p-3 rounded">
                        <header class="text-center pt-2">
                            <h5 class="mb-0">{{ __('Order details') }}</h5>
                        </header>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-borderless table-sm mb-0">
                                <tr>
                                    <th>{{ __('Product') }}</th>
                                    <th>{{ __('Price') }}</th>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Margarita <b>× 2</b></span>
                                    </td>
                                    <td>
                                        <span><b>50.00$</b></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Quattro Stagioni <b>× 3</b></span>
                                    </td>
                                    <td>
                                        <span><b>75.00$</b></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Marinara <b>× 1</b></span>
                                    </td>
                                    <td>
                                        <span><b>25.00$</b></span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <hr>
                        <div class="text-right">
                            <ul class="nav nav-pills justify-content-end">
                                <li class="nav-item">
                                    <button type="button" class="btn btn-sm active">USD</button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="btn btn-sm">EUR</button>
                                </li>
                            </ul>
                            <p>{{ __('Total price') }}: <b id="price">155.00</b>$ <span id="delivery-notification">(including delivery cost)</span></p>
                            <button class="btn btn-outline-success" type="submit">{{ __('Place order') }}</button>
                        </div>
                    </div>
                </section>
            </div>
        </form>
    </div>

@endsection
