@extends('layouts.frontend.master')
@section('content')

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="assets/css/virtual.css" rel="stylesheet">

    <body>

    <div class = "main-wrapper">
        <div class = "container">
            <div class = "product-div">
                <div class = "product-div-left">
                    <div class = "img-container">
                        <img src = "assets/img/destinasi/destinasi-1.jpg" alt = "">
                    </div>
                    <div class = "hover-container">
                        <div><img src = "assets/img/destinasi/destinasi-1.jpg"></div>
                        <div><img src = "assets/img/destinasi/destinasi-2.jpg"></div>
                        <div><img src = "assets/img/destinasi/destinasi-3.jpg"></div>
                        <div><img src = "assets/img/destinasi/destinasi-4.jpg"></div>
                    </div>
                </div>

                <div class = "product-div-right">
                    <span class = "product-name">Jelajahi Malioboro yang iconic</span>
                    <div>Harga :</div>
                    <span class = "product-price" style="margin-right: 15px">Rp. 200.000</span>
                    <p class = "product-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae animi ad minima veritatis dolore. Architecto facere dignissimos voluptate fugit ratione molestias quis quidem exercitationem voluptas.</p>
                    <div class = "btn-groups">
                        <a href="{{'login'}}"><button type = "button" class = "buy-now-btn"><i class = "fas fa-wallet"></i>buy now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src = "assets/js/script.js"></script>
    </body>

@stop
