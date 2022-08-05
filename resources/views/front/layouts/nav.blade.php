<body>
<div class = "container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <div class="navbar-header"> <a class="navbar-brand" href="#"><img src="{{ asset('/') }}assets/images/header-logo.png"
                    alt=""></a></div>
            <ul class="nav navbar-nav">
                <li class="nav-item @yield('index')">
                    <a class="nav-link " href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item @yield('products')">
                    <a class="nav-link" href="{{ route('products') }}">Products</a>
                </li>
                <li class="nav-item @yield('about')">
                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
                </li>
                <li class="nav-item @yield('contact')">
                    <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-5">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @foreach ($cart as $item)
                    <a class="dropdown-item" href= {{route('single',$item->productID)}}><div class = "container"><img src="{{asset('images/').'/'.$item->products->coverPhoto}}" alt="" width="40">
                       {{$item->products->name}}</div>	&nbsp  Quantity: {{$item->productQty}}  	&nbsp Price:    ${{($item->productQty)*($item->products->price)}} </a>
                    @endforeach
                    <a class="dropdown-item bg-success text-white rounded text-center" href="{{route('showCart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Go to cart</a>
                  
                  </div>
                </li>
            </ul>
        </div>
    </nav>
    </div>