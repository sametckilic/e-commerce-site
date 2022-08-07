@extends('front.layouts.master')
@section('content')
@section('products', 'active')

<!-- Page Content -->
<!-- Items Starts Here -->


<div class="featured-page">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1>Featured Items</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="featured container no-gutter productData">
    <div class="row posts">


        @foreach ($products as $product)
            <div class="item col-md-4">
                <a href="{{route('single',$product->id)}}">
                    <div class="featured-item">
                        <input type="hidden" class="productID" value={{ $product->id }}>
                        <img src="{{ asset('images') . '/' . $product->coverPhoto }}" alt=""><br><br>
                        <h4 style="display:inline;">{{ $product->name }}</h4> <button type="button"
                            veri={{ $product->id }} class="btn btn-primary me-3 addToCart float-start"
                            style="margin-left: 70px;margin-top: 25px;">Add to Cart <i
                                class="fas fa-shopping-bag"></i><input type="hidden" class="productID"
                                value={{ $product->id }}></button>
                        <h6>${{ $product->price }}</h6>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

<!-- Featred Page Ends Here -->

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('.addToCart').click(function(e) {
            e.preventDefault();

            var productID = $(this).closest('.addToCart').find('.productID').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: "POST",
                url: "/add-to-cart",
                data: {
                    'productID': productID,
                    'productQty': 1
                },
                success: function(response) {
                    alert(response.status);
                    var id = (response.newItem[0].id);
                    var photo = (response.newItem[0].coverPhoto);
                    var name = (response.newItem[0].name);
                    var price = (response.newItem[0].price);
                    console.log(id, photo, price, name)

                    $('.newItem').append('<a class="dropdown-item" href=/products/' + id +
                        '><div class = "container"><img src="http://localhost:8000/images/' + photo +
                        '" alt="" width="40">' + name +
                        '</div>	&nbsp  Quantity: 1  	&nbsp Price:    $' + (price * 1) +
                        ' </a>');
                }
            });

        });
    });
</script>
