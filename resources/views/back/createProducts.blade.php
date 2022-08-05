@extends("back.layouts.master")
@section('title','Create Product')
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
    <form method="post" action="{{route('storeProducts')}}" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control" required>
          </div>
          <div class="form-group">
              <label>Cover Photo</label>
              <input type="file" name="coverPhoto" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Price</label>
            <input type="number" step="any" name="price" class="form-control" required>
        </div>
        <div class = "form-group">
            <label>Stock</label>
            <input type="number" name = "stock" class ="form-control" required>
        </div>
          <div class="form-group">
              <label>About Product</label>
              <textarea id="editor" name="aboutProduct" class="form-control" rows="4" required></textarea>
          </div>
          
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Create Prodcut</button>
          </div>
       
      </form>
  </div>
</div>

@endsection