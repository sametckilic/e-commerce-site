@extends('back.layouts.master')
@section('title','About Us')
@section('content')



    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form method="post" action="{{route('updateAbout')}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label>About Us Image</label><br>
                    <img src="{{asset('images/').'/'.$about->image}}" width="200">
            </div>
            <div class="form-group">
                <label>Change Image</label>
                <input type="file" name="image" value="{{$about->image}}" class="form-control">
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{$about->title}}" required>
            </div>
            <div class="form-group">
                <label>About Us</label>
                <textarea id="editor" name="aboutUs" class="form-control" rows="4">{{$about->aboutUs}}</textarea>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update About Page</button>
            </div>
    </form>














@endsection

