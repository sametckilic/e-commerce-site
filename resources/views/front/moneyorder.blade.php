@extends('front.layouts.master')
@section('index', 'active')

@section('content')
    @php $orderButton = true; @endphp
    <div class="container mt-5 p-3 rounded cart">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="product-details mr-2 productData">
                    <h6 class="mb-0">Shopping cart</h6>
                    <div class="d-flex justify-content-between"><span>You have {{ $cart->count() }} items in your cart</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                        <div class="d-flex flex-row">
                            <div class="ml-2"><span class="font-weight-bold d-block">Name</span>

                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mr-4"><span class="d-block">Quantitiy</span><span
                                class="d-block ml-5 font-weight-bold">Price</span></div>
                    </div>
                    @php $subPrice = 0 @endphp
                    @foreach ($cart as $cartItem)
                        <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                            <div class="d-flex flex-row"><img class="rounded"
                                    src="{{ asset('images/') . '/' . $cartItem->products->coverPhoto }}" width="80">
                                <div class="ml-2"><span
                                        class="font-weight-bold d-block">{{ $cartItem->products->name }}</span>
                                    @if ($cartItem->products->stock >= $cartItem->productQty)
                                        <span class="spec text-success">In Stock</span>
                                    @else
                                        @php
                                            $orderButton = false;
                                        @endphp
                                    @endif
                                    @if ($cartItem->products->stock < $cartItem->productQty)
                                        <span class="spec text-danger">Out of Stock</span>
                                        @php $orderButton = false; @endphp
                                    @endif
                                </div>
                            </div>
                            <div class="d-flex flex-row align-items-center ml-5"><span
                                    class="d-block">{{ $cartItem->productQty }}</span><span
                                    class="d-block ml-5 font-weight-bold">${{ $cartItem->products->price * $cartItem->productQty }}</span>
                                @php $subPrice += ($cartItem->products->price)*($cartItem->productQty) @endphp
                                <input class="productID" type="hidden" value="{{ $cartItem->productID }}">
                                <button type="button" class="fa fa-trash-o ml-3 text-black-50 deleteCart">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex justify-content-between information ml-5">

                    <form method="POST" action={{ route('moneyOrder') }}>
                        @csrf
                        <div class="payment-info">

                            <hr class="line">
                            <div class = "mb-5">
                                <strong>TR56 0011 1000 0000 0104 5074 94</strong>
                                <strong class = "d-inline-block text-center ">Samet Çıplakkılıç</strong>
                            </div>

                            <div><label class="credit-card-label orderAddress">Your Address</label><input id='orderAddress'
                                    type="text" name="orderAddress" class="form-control credit-inputs"
                                    placeholder="Address">
                            </div>
                            <div class="d-flex justify-content-between information mt-5">

                                <span>Subtotal</span><span>${{ $subPrice }}</span>
                            </div>
                        </div>
                        @if ($orderButton)
                            <button type="submit"
                                class="btn btn-primary btn-block d-flex justify-content-between mt-4 order"
                                type="button"><span>${{ $subPrice }}</span><span>Pay with Money Order<i
                                        class="fa fa-long-arrow-right ml-1"></i></span></button>
                        @else
                            <button type="submit"
                                class="btn btn-danger btn-block d-flex justify-content-between mt-5"><span>${{ $subPrice }}</span><span>You
                                    can't order.</span></button>
                        @endif

                </div>
                </form>
            </div>

        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.deleteCart').click(function(e) {
                e.preventDefault();
                var productID = $(this).closest('.productData').find('.productID').val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method: "POST",
                    url: "/cart/delete",
                    data: {
                        'productID': productID
                    },
                    success: function(response) {
                        alert(response.status);
                        window.location = '/cart';
                    }
                });
            });
        });
        
    </script>
     <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
          alert(msg);
        }
      </script>
@endsection
