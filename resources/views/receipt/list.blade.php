@extends('layouts.bootstrap')
@csrf
@section('content')
<div class="container">
    <h1 class="mb-4">Receipts of Hades</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Payment ID</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($receipts as $receipt)
            <tr>
                <td>{{ $receipt->customer }}</td>
                <td>{{ $receipt->paymentId }}</td>
                <td>{{ $receipt->date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
