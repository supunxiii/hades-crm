@extends('product.layout')
@section('content')
<div class="card">
  <div class="card-header">{{ $product->name }}'s Details</div>
  <div class="card-body">
        <div class="card-body">
        <p class="card-title">Name : {{ $product->name }}</p>
        <p class="card-text"> Category: {{ $product->category }}</p>
        <p class="card-text"> Price : {{ $product->price }}</p>
  </div>
    <hr>
  </div>
</div>