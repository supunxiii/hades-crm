@extends('layouts.bootstrap')
@csrf
@section('content')
<div class="container">
    <h1 class="mb-4">Payments of Hades</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Customer</th>
                <th>Amount</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($payments as $payment)
            <tr>
                <td>{{ $payment->customer }}</td>
                <td>{{ $payment->amount }}</td>
                <td>{{ $payment->date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
