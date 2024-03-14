@extends('layouts.bootstrap')
@section('content')
<div class="card">
  <div class="card-header">Product Details: Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('product/' .$product->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$product->id}}" id="id" />
        <label>Name</label><br>
        <input type="text" name="name" id="name" value="{{$product->name}}" class="form-control"><br>
        <label>Category</label><br>
        <input type="text" name="category" id="category" value="{{$product->category}}" class="form-control"><br>
        <label>Price</label><br>
        <input type="text" name="price" id="price" value="{{$product->price}}" class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
    </form>
  
  </div>
</div>
@stop