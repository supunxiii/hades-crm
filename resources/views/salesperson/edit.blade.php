@extends('layouts.bootstrap')
@section('content')
<div class="card">
  <div class="card-header">Salespeople's Details: Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('salesperson/' .$salesperson->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$salesperson->id}}" id="id" />
        <label>Name</label><br>
        <input type="text" name="name" id="name" value="{{$salesperson->name}}" class="form-control"><br>
        <label>Phone</label><br>
        <input type="text" name="phone" id="phone" value="{{$salesperson->phone}}" class="form-control"><br>
        <label>Email</label><br>
        <input type="text" name="email" id="email" value="{{$salesperson->email}}" class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
    </form>
  
  </div>
</div>
@stop