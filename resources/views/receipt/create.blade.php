@extends('receipt.layout')
@section('content')
<div class="card">
  <div class="card-header">Receipt Page</div>
  <div class="card-body">
      
      <form action="{{ url('receipt') }}" method="post">
        {!! csrf_field() !!}
        <label>Customer</label><br>
        <input type="text" name="customer" id="customer" class="form-control"><br>
        <label>Payment ID</label><br>
        <input type="text" name="paymentId" id="paymentId" class="form-control"><br>
        <label>Date</label><br>
        <input type="text" name="date" id="date" class="form-control"><br>
        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>
  
  </div>
</div>
@stop