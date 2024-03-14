@extends('payment.layout')
@section('content')
<div class="card">
  <div class="card-header">{{ $payment->customer }}'s Payment Details</div>
  <div class="card-body">
  
        <div class="card-body">
        <p class="card-title">Customer : {{ $payment->customer }}</p>
        <p class="card-text"> Amount: {{ $payment->amount }}</p>
        <p class="card-text"> Date : {{ $payment->date }}</p>
  </div>
      
    <hr>
  
  </div>
</div>
