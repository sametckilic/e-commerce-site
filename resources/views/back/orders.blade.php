@extends('back.layouts.master')
@section('title', 'Orders')
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
                            <th>Order Number</th>
                            <th>Address</th>
                            <th>Ordered At</th>
                            <th>Processes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $orderNumbers = [];
                        @endphp
                        @foreach ($orders as $order)
                            @if(!in_array($order->orderNumber,$orderNumbers))
                            <tr>
                                <td>{{ $order->orderNumber }}</td>
                                <td>{{ $order->address }}</td>
                                <td>{{$order->created_at}}</td>
                                <td>
                                    <a target="_blank" href="{{route('showOrderItems',$order->orderNumber)}}" title="Show" class="btn btn-sm btn-success"><i
                                            class="fa fa-eye"></i> </a>
                                </td>
                            </tr>
                            @endif
                            @php
                                array_push($orderNumbers, $order->orderNumber);
                            @endphp
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
