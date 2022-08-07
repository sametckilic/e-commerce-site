@extends('front.layouts.master')
@section('content')
    <!-- Page Content -->
    <!-- Single Starts Here -->

    <div class="single-product">
        <div class="container">
            <div class="row productData">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>{{ $product->name }}</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-slider">
                        <div id="slider" class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="{{ asset('images/' . '/' . $product->coverPhoto) }}" />
                                </li>
                                <li>
                                    <img src="{{ asset('images/' . '/' . $product->coverPhoto) }}" />
                                </li>
                                <li>
                                    <img src="{{ asset('images/' . '/' . $product->coverPhoto) }}" />
                                </li>
                                <li>
                                    <img src="{{ asset('images/' . '/' . $product->coverPhoto) }}" />
                                </li>
                                <!-- items mirrored twice, total of 12 -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <h4>{{ $product->name }}</h4>
                        <h6>${{ $product->price }}</h6>
                        <p>{{ $product->aboutProduct }} </p>
                        <span>{{ $product->stock }} left on stock</span>
                        <form action="" method="get">
                            <label for="quantity">Quantity:</label>
                            <input type="hidden" value="{{ $product->id }}" class="productID">
                            <input name="quantity" type="quantity" class="quantity-text productQty" id="quantity"
                                onfocus="if(this.value == '1') { this.value = ''; }"
                                onBlur="if(this.value == '') { this.value = '1';}" value="1">

                            <button type="button" class="btn btn-primary me-3 addToCart float-start">Add to Cart <i
                                    class="fas fa-shopping-bag"></i></button>
                        </form>
                        <div class="down-content">
                            <div class="share">
                                <h6>Share: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                                                class="fa fa-linkedin"></i></a><a href="#"><i
                                                class="fa fa-twitter"></i></a></span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Page Ends Here -->

    <!-- Similar Ends Here -->
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('.addToCart').click(function(e) {
            e.preventDefault();

            var productID = $(this).closest('.productData').find('.productID').val();
            var productQty = $(this).closest('.productData').find('.productQty').val();

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
                    'productQty': productQty
                },
                success: function(response) {
                    alert(response.status);
                    var id = (response.newItem[0].id);
                    var photo = (response.newItem[0].coverPhoto);
                    var name = (response.newItem[0].name);
                    var price = (response.newItem[0].price);
                    console.log(id, photo, price, name)

                    $('.newItem').html('<a class="dropdown-item" href=/products/' + id +
                        '><div class = "container"><img src="http://localhost:8000/images/' + photo +
                        '" alt="" width="40">' + name +
                        '</div>	&nbsp  Quantity: '+productQty+'  	&nbsp Price:    $' + (price * productQty) +
                        ' </a>');

                }
            });
        });
    });
</script>
