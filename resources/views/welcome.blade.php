@extends('layouts.app')

@section('content')

    <div class="container bg-white border p-3 rounded">
        <header>
            <h2 class="text-center">{{ __('Our menu') }}</h2>
        </header>
        <hr>
        <section class="menu-section">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <article class="px-2 border rounded">
                        <header class="py-3 text-center border-bottom">
                            <h5 class="mb-0">Margarita</h5>
                        </header>
                        <article class="pt-3">
                            <img src="{{ asset('img/pizzas/1.png') }}" alt="{{ __('Pizza 1') }}" width="100%">
                            <div class="row align-items-center mx-0 py-3">
                                <div class="col-7 text-left">
                                    <span><strong>25.00$</strong></span>
                                </div>
                                <div class="col-5 text-right">
                                    <button class="btn btn-light" type="button">
                                        <img src="{{ asset('img/icons/add-to-cart.svg')  }}" alt="{{ __('Add to cart') }}" width="20">
                                    </button>
                                </div>
                            </div>
                        </article>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <article class="px-2 border rounded">
                        <header class="py-3 text-center border-bottom">
                            <h5 class="mb-0">Quattro Stagioni</h5>
                        </header>
                        <article class="pt-3">
                            <img src="{{ asset('img/pizzas/2.png') }}" alt="{{ __('Pizza 1') }}" width="100%">
                            <div class="row align-items-center mx-0 py-3">
                                <div class="col-7 text-left">
                                    <span><strong>25.00$</strong></span>
                                </div>
                                <div class="col-5 text-right">
                                    <button class="btn btn-light" type="button">
                                        <img src="{{ asset('img/icons/add-to-cart.svg')  }}" alt="{{ __('Add to cart') }}" width="20">
                                    </button>
                                </div>
                            </div>
                        </article>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <article class="px-2 border rounded">
                        <header class="py-3 text-center border-bottom">
                            <h5 class="mb-0">Marinara</h5>
                        </header>
                        <article class="pt-3">
                            <img src="{{ asset('img/pizzas/3.png') }}" alt="{{ __('Pizza 1') }}" width="100%">
                            <div class="row align-items-center mx-0 py-3">
                                <div class="col-7 text-left">
                                    <span><strong>25.00$</strong></span>
                                </div>
                                <div class="col-5 text-right">
                                    <button class="btn btn-light" type="button">
                                        <img src="{{ asset('img/icons/add-to-cart.svg')  }}" alt="{{ __('Add to cart') }}" width="20">
                                    </button>
                                </div>
                            </div>
                        </article>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <article class="px-2 border rounded">
                        <header class="py-3 text-center border-bottom">
                            <h5 class="mb-0">Carbonara</h5>
                        </header>
                        <article class="pt-3">
                            <img src="{{ asset('img/pizzas/4.png') }}" alt="{{ __('Pizza 1') }}" width="100%">
                            <div class="row align-items-center mx-0 py-3">
                                <div class="col-7 text-left">
                                    <span><strong>25.00$</strong></span>
                                </div>
                                <div class="col-5 text-right">
                                    <button class="btn btn-light" type="button">
                                        <img src="{{ asset('img/icons/eye.svg')  }}" alt="{{ __('Add to cart') }}" width="20">
                                    </button>
                                </div>
                            </div>
                        </article>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <article class="px-2 border rounded">
                        <header class="py-3 text-center border-bottom">
                            <h5 class="mb-0">Frutti di Mare</h5>
                        </header>
                        <article class="pt-3">
                            <img src="{{ asset('img/pizzas/5.png') }}" alt="{{ __('Pizza 1') }}" width="100%">
                            <div class="row align-items-center mx-0 py-3">
                                <div class="col-7 text-left">
                                    <span><strong>25.00$</strong></span>
                                </div>
                                <div class="col-5 text-right">
                                    <button class="btn btn-light" type="button">
                                        <img src="{{ asset('img/icons/add-to-cart.svg')  }}" alt="{{ __('Add to cart') }}" width="20">
                                    </button>
                                </div>
                            </div>
                        </article>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <article class="px-2 border rounded">
                        <header class="py-3 text-center border-bottom">
                            <h5 class="mb-0">Quattro Formaggi</h5>
                        </header>
                        <article class="pt-3">
                            <img src="{{ asset('img/pizzas/6.png') }}" alt="{{ __('Pizza 1') }}" width="100%">
                            <div class="row align-items-center mx-0 py-3">
                                <div class="col-7 text-left">
                                    <span><strong>25.00$</strong></span>
                                </div>
                                <div class="col-5 text-right">
                                    <button class="btn btn-light" type="button">
                                        <img src="{{ asset('img/icons/add-to-cart.svg')  }}" alt="{{ __('Add to cart') }}" width="20">
                                    </button>
                                </div>
                            </div>
                        </article>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <article class="px-2 border rounded">
                        <header class="py-3 text-center border-bottom">
                            <h5 class="mb-0">Crudo</h5>
                        </header>
                        <article class="pt-3">
                            <img src="{{ asset('img/pizzas/7.png') }}" alt="{{ __('Pizza 1') }}" width="100%">
                            <div class="row align-items-center mx-0 py-3">
                                <div class="col-7 text-left">
                                    <span><strong>25.00$</strong></span>
                                </div>
                                <div class="col-5 text-right">
                                    <button class="btn btn-light" type="button">
                                        <img src="{{ asset('img/icons/add-to-cart.svg')  }}" alt="{{ __('Add to cart') }}" width="20">
                                    </button>
                                </div>
                            </div>
                        </article>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <article class="px-2 border rounded">
                        <header class="py-3 text-center border-bottom">
                            <h5 class="mb-0">Napoli</h5>
                        </header>
                        <article class="pt-3">
                            <img src="{{ asset('img/pizzas/8.png') }}" alt="{{ __('Pizza 1') }}" width="100%">
                            <div class="row align-items-center mx-0 py-3">
                                <div class="col-7 text-left">
                                    <span><strong>25.00$</strong></span>
                                </div>
                                <div class="col-5 text-right">
                                    <button class="btn btn-light" type="button">
                                        <img src="{{ asset('img/icons/add-to-cart.svg')  }}" alt="{{ __('Add to cart') }}" width="20">
                                    </button>
                                </div>
                            </div>
                        </article>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <article class="px-2 border rounded">
                        <header class="py-3 text-center border-bottom">
                            <h5 class="mb-0">Pugliese</h5>
                        </header>
                        <article class="pt-3">
                            <img src="{{ asset('img/pizzas/9.png') }}" alt="{{ __('Pizza 1') }}" width="100%">
                            <div class="row align-items-center mx-0 py-3">
                                <div class="col-7 text-left">
                                    <span><strong>25.00$</strong></span>
                                </div>
                                <div class="col-5 text-right">
                                    <button class="btn btn-light" type="button">
                                        <img src="{{ asset('img/icons/add-to-cart.svg')  }}" alt="{{ __('Add to cart') }}" width="20">
                                    </button>
                                </div>
                            </div>
                        </article>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <article class="px-2 border rounded">
                        <header class="py-3 text-center border-bottom">
                            <h5 class="mb-0">Montanara</h5>
                        </header>
                        <article class="pt-3">
                            <img src="{{ asset('img/pizzas/10.png') }}" alt="{{ __('Pizza 1') }}" width="100%">
                            <div class="row align-items-center mx-0 py-3">
                                <div class="col-7 text-left">
                                    <span><strong>25.00$</strong></span>
                                </div>
                                <div class="col-5 text-right">
                                    <button class="btn btn-light" type="button">
                                        <img src="{{ asset('img/icons/add-to-cart.svg')  }}" alt="{{ __('Add to cart') }}" width="20">
                                    </button>
                                </div>
                            </div>
                        </article>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <article class="px-2 border rounded">
                        <header class="py-3 text-center border-bottom">
                            <h5 class="mb-0">Emiliana</h5>
                        </header>
                        <article class="pt-3">
                            <img src="{{ asset('img/pizzas/11.png') }}" alt="{{ __('Pizza 1') }}" width="100%">
                            <div class="row align-items-center mx-0 py-3">
                                <div class="col-7 text-left">
                                    <span><strong>25.00$</strong></span>
                                </div>
                                <div class="col-5 text-right">
                                    <button class="btn btn-light" type="button">
                                        <img src="{{ asset('img/icons/add-to-cart.svg')  }}" alt="{{ __('Add to cart') }}" width="20">
                                    </button>
                                </div>
                            </div>
                        </article>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <article class="px-2 border rounded">
                        <header class="py-3 text-center border-bottom">
                            <h5 class="mb-0">Romana</h5>
                        </header>
                        <article class="pt-3">
                            <img src="{{ asset('img/pizzas/1.png') }}" alt="{{ __('Pizza 1') }}" width="100%">
                            <div class="row align-items-center mx-0 py-3">
                                <div class="col-7 text-left">
                                    <span><strong>25.00$</strong></span>
                                </div>
                                <div class="col-5 text-right">
                                    <button class="btn btn-light" type="button">
                                        <img src="{{ asset('img/icons/add-to-cart.svg')  }}" alt="{{ __('Add to cart') }}" width="20">
                                    </button>
                                </div>
                            </div>
                        </article>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <article class="px-2 border rounded">
                        <header class="py-3 text-center border-bottom">
                            <h5 class="mb-0">Fattoria</h5>
                        </header>
                        <article class="pt-3">
                            <img src="{{ asset('img/pizzas/2.png') }}" alt="{{ __('Pizza 1') }}" width="100%">
                            <div class="row align-items-center mx-0 py-3">
                                <div class="col-7 text-left">
                                    <span><strong>25.00$</strong></span>
                                </div>
                                <div class="col-5 text-right">
                                    <button class="btn btn-light" type="button">
                                        <img src="{{ asset('img/icons/add-to-cart.svg')  }}" alt="{{ __('Add to cart') }}" width="20">
                                    </button>
                                </div>
                            </div>
                        </article>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <article class="px-2 border rounded">
                        <header class="py-3 text-center border-bottom">
                            <h5 class="mb-0">Schiacciata</h5>
                        </header>
                        <article class="pt-3">
                            <img src="{{ asset('img/pizzas/3.png') }}" alt="{{ __('Pizza 1') }}" width="100%">
                            <div class="row align-items-center mx-0 py-3">
                                <div class="col-7 text-left">
                                    <span><strong>25.00$</strong></span>
                                </div>
                                <div class="col-5 text-right">
                                    <button class="btn btn-light" type="button">
                                        <img src="{{ asset('img/icons/add-to-cart.svg')  }}" alt="{{ __('Add to cart') }}" width="20">
                                    </button>
                                </div>
                            </div>
                        </article>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <article class="px-2 border rounded">
                        <header class="py-3 text-center border-bottom">
                            <h5 class="mb-0">Prosciutto</h5>
                        </header>
                        <article class="pt-3">
                            <img src="{{ asset('img/pizzas/4.png') }}" alt="{{ __('Pizza 1') }}" width="100%">
                            <div class="row align-items-center mx-0 py-3">
                                <div class="col-7 text-left">
                                    <span><strong>25.00$</strong></span>
                                </div>
                                <div class="col-5 text-right">
                                    <button class="btn btn-light" type="button">
                                        <img src="{{ asset('img/icons/add-to-cart.svg')  }}" alt="{{ __('Add to cart') }}" width="20">
                                    </button>
                                </div>
                            </div>
                        </article>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <article class="px-2 border rounded">
                        <header class="py-3 text-center border-bottom">
                            <h5 class="mb-0">Americana</h5>
                        </header>
                        <article class="pt-3">
                            <img src="{{ asset('img/pizzas/5.png') }}" alt="{{ __('Pizza 1') }}" width="100%">
                            <div class="row align-items-center mx-0 py-3">
                                <div class="col-7 text-left">
                                    <span><strong>25.00$</strong></span>
                                </div>
                                <div class="col-5 text-right">
                                    <button class="btn btn-light" type="button">
                                        <img src="{{ asset('img/icons/add-to-cart.svg')  }}" alt="{{ __('Add to cart') }}" width="20">
                                    </button>
                                </div>
                            </div>
                        </article>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <article class="px-2 border rounded">
                        <header class="py-3 text-center border-bottom">
                            <h5 class="mb-0">Prosciutto e Funghi</h5>
                        </header>
                        <article class="pt-3">
                            <img src="{{ asset('img/pizzas/6.png') }}" alt="{{ __('Pizza 1') }}" width="100%">
                            <div class="row align-items-center mx-0 py-3">
                                <div class="col-7 text-left">
                                    <span><strong>25.00$</strong></span>
                                </div>
                                <div class="col-5 text-right">
                                    <button class="btn btn-light" type="button">
                                        <img src="{{ asset('img/icons/add-to-cart.svg')  }}" alt="{{ __('Add to cart') }}" width="20">
                                    </button>
                                </div>
                            </div>
                        </article>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <article class="px-2 border rounded">
                        <header class="py-3 text-center border-bottom">
                            <h5 class="mb-0">Braccio di Ferro</h5>
                        </header>
                        <article class="pt-3">
                            <img src="{{ asset('img/pizzas/7.png') }}" alt="{{ __('Pizza 1') }}" width="100%">
                            <div class="row align-items-center mx-0 py-3">
                                <div class="col-7 text-left">
                                    <span><strong>25.00$</strong></span>
                                </div>
                                <div class="col-5 text-right">
                                    <button class="btn btn-light" type="button">
                                        <img src="{{ asset('img/icons/add-to-cart.svg')  }}" alt="{{ __('Add to cart') }}" width="20">
                                    </button>
                                </div>
                            </div>
                        </article>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <article class="px-2 border rounded">
                        <header class="py-3 text-center border-bottom">
                            <h5 class="mb-0">Sarda</h5>
                        </header>
                        <article class="pt-3">
                            <img src="{{ asset('img/pizzas/8.png') }}" alt="{{ __('Pizza 1') }}" width="100%">
                            <div class="row align-items-center mx-0 py-3">
                                <div class="col-7 text-left">
                                    <span><strong>25.00$</strong></span>
                                </div>
                                <div class="col-5 text-right">
                                    <button class="btn btn-light" type="button">
                                        <img src="{{ asset('img/icons/add-to-cart.svg')  }}" alt="{{ __('Add to cart') }}" width="20">
                                    </button>
                                </div>
                            </div>
                        </article>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <article class="px-2 border rounded">
                        <header class="py-3 text-center border-bottom">
                            <h5 class="mb-0">Tonno</h5>
                        </header>
                        <article class="pt-3">
                            <img src="{{ asset('img/pizzas/9.png') }}" alt="{{ __('Pizza 1') }}" width="100%">
                            <div class="row align-items-center mx-0 py-3">
                                <div class="col-7 text-left">
                                    <span><strong>25.00$</strong></span>
                                </div>
                                <div class="col-5 text-right">
                                    <button class="btn btn-light" type="button">
                                        <img src="{{ asset('img/icons/add-to-cart.svg')  }}" alt="{{ __('Add to cart') }}" width="20">
                                    </button>
                                </div>
                            </div>
                        </article>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <article class="px-2 border rounded">
                        <header class="py-3 text-center border-bottom">
                            <h5 class="mb-0">Valtellina</h5>
                        </header>
                        <article class="pt-3">
                            <img src="{{ asset('img/pizzas/10.png') }}" alt="{{ __('Pizza 1') }}" width="100%">
                            <div class="row align-items-center mx-0 py-3">
                                <div class="col-7 text-left">
                                    <span><strong>25.00$</strong></span>
                                </div>
                                <div class="col-5 text-right">
                                    <button class="btn btn-light" type="button">
                                        <img src="{{ asset('img/icons/add-to-cart.svg')  }}" alt="{{ __('Add to cart') }}" width="20">
                                    </button>
                                </div>
                            </div>
                        </article>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                    <article class="px-2 border rounded">
                        <header class="py-3 text-center border-bottom">
                            <h5 class="mb-0">Gorgonzola</h5>
                        </header>
                        <article class="pt-3">
                            <img src="{{ asset('img/pizzas/11.png') }}" alt="{{ __('Pizza 1') }}" width="100%">
                            <div class="row align-items-center mx-0 py-3">
                                <div class="col-7 text-left">
                                    <span><strong>25.00$</strong></span>
                                </div>
                                <div class="col-5 text-right">
                                    <button class="btn btn-light" type="button">
                                        <img src="{{ asset('img/icons/add-to-cart.svg')  }}" alt="{{ __('Add to cart') }}" width="20">
                                    </button>
                                </div>
                            </div>
                        </article>
                    </article>
                </div>
            </div>
            <div class="text-center mb-2 mt-3">
                <button class="btn btn-primary">{{ __('More') }}</button>
            </div>
        </section>
    </div>

@endsection
