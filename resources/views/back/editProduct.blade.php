@extends("back.layouts.master")
@section('title','Edit Product')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">@yield('title')
    </div>
    <div class="card-body">
      @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
        </div>
      @endif
      @if(session('success'))
      <div class="alert alert-success">
        {{session('success')}}
      </div>
    @endif  
    <form method="post" action="{{route('updateProduct')}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type = "hidden" name = 'editID' value = "{{$product->id}}"> 
          <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" value = "{{$product->name}}" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Cover Photo</label><br>
                <img src="{{asset('images/').'/'.$product->coverPhoto}}" width="200">
        </div>
          <div class="form-group">
              <label>Cover Photo</label>
              <input type="file" name="coverPhoto" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Price</label>
            <input type="number" step="any" name="price" value = "{{$product->price}}" class="form-control" required>
        </div>
        <div class = "form-group">
            <label>Stock</label>
            <input type="number" name = "stock" value = "{{$product->stock}}" class ="form-control" required>
        </div>
          <div class="form-group">
              <label>About Product</label>
              <textarea id="editor" name="aboutProduct" value = "" class="form-control" rows="4" required>{{$product->aboutProduct}}</textarea>
          </div>
          
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Create Prodcut</button>
          </div>
       
      </form>
  </div>
</div>

@endsection