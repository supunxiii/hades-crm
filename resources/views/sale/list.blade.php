@extends('layouts.bootstrap')
@csrf
@section('content')
<div class="container">
    <h1 class="mb-4">Sales of Hades</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Customer</th>
                <th>Payment ID</th>
                <th>Receipt ID</th>
                <th>Salesperson ID</th>
                <th>Amount</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
            <tr>
                <td>{{ $sale->customer }}</td>
                <td>{{ $sale->paymentId }}</td>
                <td>{{ $sale->receiptid }}</td>
                <td>{{ $sale->salePerId }}</td>
                <td>{{ $sale->amount }}</td>
                <td>{{ $sale->date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
