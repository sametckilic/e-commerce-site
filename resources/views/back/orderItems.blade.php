@extends('back.layouts.master')
@section('title', 'Order Number')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')
            </h6>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Product Photo</th>
                            <th>Product Name</th>
                            <th>Quantitiy</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orderItems as $orderItem)

                            <tr>
                                <td width = '80'><img src="{{asset('images').'/'.$orderItem->products->coverPhoto}}" width = '80' alt=""></td>
                                <td>{{$orderItem->products->name}}</td>
                                
                                <td>{{$orderItem->productQty}}</td>
                                <td>{{$orderItem->productQty*$orderItem->products->price}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('js')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script></script>
@endsection