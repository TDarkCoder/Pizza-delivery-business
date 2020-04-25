@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{ route('order.store') }}" method="post">
            @csrf
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
                                <input type="text" id="name" name="name" class="form-control form-control-sm" value="@auth {{ Auth::user()->name }} @else {{ old('name') ?? '' }} @endauth" @auth readonly @endauth>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <label for="email">{{ __('Email') }}*</label>
                                <input type="email" id="email" name="email" class="form-control form-control-sm" value="@auth {{ Auth::user()->email }} @else {{ old('email') ?? '' }} @endauth" @auth readonly @endauth>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        @guest
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="password">{{ __('Password') }}*</label>
                                    <input type="password" id="password" name="password" class="form-control form-control-sm" value="@auth {{ Auth::user()->name }} @endauth" @auth readonly @endauth>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="password_confirmation">{{ __('Confirm password') }}*</label>
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-sm" value="@auth {{ Auth::user()->email }} @endauth" @auth readonly @endauth>
                                </div>
                            </div>
                        @endguest
                        <div class="form-group">
                            <label for="address">{{ __('Address') }}*</label>
                            <textarea id="address" name="address" class="form-control">{{ old('address') ?? '' }}</textarea>
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="message">{{ __('Message') }} ({{ __('optional') }})</label>
                            <textarea id="message" name="message" class="form-control">{{ old('message') ?? '' }}</textarea>
                        </div>
                    </div>
                </section>
                <section class="col-md-5 mt-md-0 mt-2">
                    <checkout :products="{{ $products }}"></checkout>
                </section>
            </div>
        </form>
    </div>

@endsection
