@extends('layouts.bootstrap')
@section('content')
<div class="card">
  <div class="card-header">Receipts Details: Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('receipt/' .$receipt->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$receipt->id}}" id="id" />
        <label>Customer</label><br>
        <input type="text" name="customer" id="customer" value="{{$receipt->customer}}" class="form-control"><br>
        <label>PaymentId</label><br>
        <input type="text" name="paymentId" id="paymentId" value="{{$receipt->paymentId}}" class="form-control"><br>
        <label>Date</label><br>
        <input type="text" name="date" id="date" value="{{$receipt->date}}" class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
    </form>
  
  </div>
</div>
@stop