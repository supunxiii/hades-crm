@extends('payment.layout')
@section('content')
<div class="card">
  <div class="card-header">Payments Page</div>
  <div class="card-body">
      
      <form action="{{ url('payment') }}" method="post">
        {!! csrf_field() !!}
        <label>Customer</label><br>
        <input type="text" name="customer" id="customer" class="form-control"><br>
        <label>Amount</label><br>
        <input type="text" name="amount" id="amount" class="form-control"><br>
        <label>Date</label><br>
        <input type="text" name="date" id="date" class="form-control"><br>
        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>
  
  </div>
</div>
@stop