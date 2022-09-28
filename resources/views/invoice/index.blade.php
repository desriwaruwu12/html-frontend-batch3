<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body style="background: lightgray">

@extends('admin.layouts.main')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-text-short"></i>
                </span> Invoice
            </h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <div class="mb-4">
                        <div class="table table-responsive">
                            <table class="table table-bordered">
                                <thead class="btn-primary">
                                <tr>
                                    <th scope="col">Invoice ID</th>
                                    <th scope="col">Invoice Date</th>
                                    <th scope="col">User ID</th>
                                    <th scope="col">Produk Id</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Discount</th>
                                    <th scope="col">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <div class="alert alert-danger">
                                        Data belum Tersedia.
                                    </div>
                                </tbody>
                                {{-- <tbody>
                                    @forelse ($invoice as $item)
                                        <tr>
                                            <td>{{ $item->id}}</td>
                                            <td>{{ $item->invoice_date }}</td>
                                            <td>{{ $item->user_id}}</td>
                                            <td>{{ $item->produk_id}}</td>
                                            <td>{{ $item->quantity}}</td>
                                            <td>{{ $item->discount}}</td>
                                            <td>{{$item->status}}</td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data belum Tersedia.
                                        </div>
                                    @endforelse
                                    </tbody> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


</body>
</html>
@endsection
