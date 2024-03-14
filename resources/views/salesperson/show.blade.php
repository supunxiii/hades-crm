@extends('salesperson.layout')
@section('content')
<div class="card">
  <div class="card-header">{{ $salesperson->name }}'s Details</div>
  <div class="card-body">
  
        <div class="card-body">
        <p class="card-title"> Name : {{ $salesperson->name }}</p>
        <p class="card-text"> Phone : {{ $salesperson->phone }}</p>
        <p class="card-text"> Email : {{ $salesperson->email }}</p>
  </div>
    <hr>
  </div>
</div>