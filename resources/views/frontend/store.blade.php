@extends('layouts.frontend.master')
@section('content')
    {{-- CSS MASTER --}}
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">


    <body>

        <header class="container text-white" style="background-image: linear-gradient(to right, #260c83, #0e58c7)">
            <div class="row">
                <div class="col-12 py-4 text-center">
                    <h1 class="display-3">Welcome to Travelxism Store</h1>
                    <p class="lead">Choose the tourism service you like </p>
                </div>
            </div>
        </header>

        <main>
            <div class="container pt-5">
                <div class="row" style="margin-bottom: 60px">
                    <div class="col-sm-6">
                        <div class="">
                            <div class="bg-white rounded shadow-sm"><img src="https://i.pinimg.com/564x/33/a1/e1/33a1e1cbfb6089545e05452b52eb07fb.jpg" alt="" class="img-fluid card-img-top">
                            <div class="p-4">
                                <h4><a href="#" class="text-dark">Offline Tour</a></h4>
                                {{-- <h5><a href="#" class="text-dark">Jelajahi Malioboro yang iconic</a></h5>
                                <p class="item-price"><span>Rp. 200.000</span></p>
                                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>--}}
                                <div class="d-flex align-items-center justify-content-between px-3 py-2 mt-4">
                                    <a href="{{ ('offlinetour') }}" class="btn btn-primary">view more</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="">
                            <div class="bg-white rounded shadow-sm"><img src="https://i.pinimg.com/564x/33/a1/e1/33a1e1cbfb6089545e05452b52eb07fb.jpg" alt="" class="img-fluid card-img-top">
                            <div class="p-4">
                                <h4> <a href="{{ ('offlinetour') }}" class="text-dark">Virtual Tour</a></h4>
                                {{-- <h5> <a href="#" class="text-dark">Jelajahi Malioboro yang iconic</a></h5>
                                <p class="item-price"><span>Rp. 200.000</span></p>
                                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>--}}
                                <div class="d-flex align-items-center justify-content-between px-3 py-2 mt-4">
                                <a href="{{ ('virtualtour') }}" class="btn btn-primary">view more</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>

@stop
