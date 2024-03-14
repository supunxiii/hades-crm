@extends('receipt.layout')
@section('content')
<div class="card">
  <div class="card-header">Customer #{{ $receipt->customer}}'s Receipt Details</div>
  <div class="card-body">
        <div class="card-body">
        <p class="card-title"> Customer : {{ $receipt->customer}}</p>
        <p class="card-text"> Payment ID: {{ $receipt->paymentId}}</p>
        <p class="card-text"> Date : {{ $receipt->date}}</p>
  </div>
    <hr>
  </div>
</div>