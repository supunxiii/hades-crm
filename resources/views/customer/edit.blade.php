@extends('layouts.bootstrap')
@section('content')
<div class="card">
  <div class="card-header">Customer Details: Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('customer/' .$customer->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$customer->id}}" id="id" />
        <label>Name</label><br>
        <input type="text" name="phone" id="phone" value="{{$customer->name}}" class="form-control"><br>
        <label>Phone</label><br>
        <input type="text" name="phone" id="phone" value="{{$customer->phone}}" class="form-control"><br>
        <label>Email</label><br>
        <input type="text" name="email" id="email" value="{{$customer->email}}" class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
    </form>
  
  </div>
</div>
@stop