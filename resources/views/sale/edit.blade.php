@extends('layouts.bootstrap')
@section('content')
<div class="card">
  <div class="card-header">Sales Details: Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('sale/' .$sale->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$sale->id}}" id="id" />
        <label>Customer</label><br>
        <input type="text" name="customer" id="customer" value="{{$sale->customer}}" class="form-control"><br>
        <label>Payment ID</label><br>
        <input type="text" name="paymentId" id="paymentId" value="{{$sale->paymentId}}" class="form-control"><br>
        <label>Receipt ID</label><br>
        <input type="text" name="receiptid" id="receiptid" value="{{$sale->receiptid}}" class="form-control"><br> 
        <label>Saleperson ID</label><br>
        <input type="text" name="salePerId" id="salePerId" value="{{$sale->salePerId}}" class="form-control"><br>
        <label>Amount</label><br>
        <input type="text" name="amount" id="amount" value="{{$sale->amount}}" class="form-control"><br>
        <label>Date</label><br>
        <input type="text" name="date" id="date" value="{{$sale->date}}" class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
    </form>
  
  </div>
</div>
@stop