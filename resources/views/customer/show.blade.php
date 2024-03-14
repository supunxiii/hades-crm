@extends('customer.layout')
@section('content')
<div class="card">
  <div class="card-header">Customer - {{ $customer->name }}'s Details</div>
  <div class="card-body">
  
        <div class="card-body">
        <p class="card-title">Name : {{ $customer->name }}</p>
        <p class="card-text"> Phone: {{ $customer->phone }}</p>
        <p class="card-text"> Email : {{ $customer->email }}</p>
  </div>
      
    <hr>
  
  </div>
</div>