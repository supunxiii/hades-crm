@extends('layouts.bootstrap')
@section('content')
<div class="card">
  <div class="card-header">Payment Details: Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('payment/' .$payment->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$payment->id}}" id="id" />
        <label>Customer</label><br>
        <input type="text" name="customer" id="customer" value="{{$payment->customer}}" class="form-control"><br>
        <label>Amount</label><br>
        <input type="text" name="amount" id="amount" value="{{$payment->amount}}" class="form-control"><br>
        <label>Date</label><br>
        <input type="text" name="date" id="date" value="{{$payment->date}}" class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
    </form>
  
  </div>
</div>
@stop