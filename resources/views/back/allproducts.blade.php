@extends('back.layouts.master')
@section('title', 'All Products')
@section('content')








    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')
                <span class="float-right">{{ $product->count() }} products found.</strong>
            </h6>
        </div> 
        @if(session('success'))
        <div class="alert alert-success">
          {{session('success')}}
        </div>
      @endif  
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Cover Photo</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Created At</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $products)
                            <tr>
                                <td>{{ $products->id }}</td>
                                <td><img src="{{ asset('images/') . '/' . $products->coverPhoto }}" height='100' alt="">
                                </td>
                                <td>{{ $products->name }}</td>
                                <td>${{ $products->price }}</td>
                                <td>{{ $products->stock }}</td>
                                <td>{{ $products->created_at }}</td>
                                <td>
                                    <a target="_blank" href="{{ route('single', [$products->id]) }}" title="Show"
                                        class="btn btn-sm btn-success"><i class="fa fa-eye"></i> </a>

                                    <a href="{{route('editProduct',$products->id)}}" title="Edit" class="btn btn-sm btn-primary"><i
                                            class="fa fa-pen"></i> </a>

                                    <a href="{{route('deleteProduct',$products->id)}}" title="Delete" class="btn btn-sm btn-danger"><i
                                            class="fa fa-times"></i> </a>

                                </td>

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
