@extends('sale.layout')
@section('content')
<div class="card">
  <div class="card-header">Sale #{{ $sale->id}} Details</div>
  <div class="card-body">
        <div class="card-body">
        <p class="card-title">Customer: {{ $sale->customer}}</p>
        <p class="card-text">Payment ID: {{ $sale->paymentId}}</p>
        <p class="card-text">Receipt ID: {{ $sale->receiptid}}</p>
        <p class="card-title">Salesperson ID: {{ $sale->salePerId}}</p>
        <p class="card-text">Amount: {{ $sale->amount}}</p>
        <p class="card-text">Date: {{ $sale->date}}</p>
  </div>
      
    <hr>
  
  </div>
</div>