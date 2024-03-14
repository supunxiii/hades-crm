@extends('layouts.bootstrap')
@csrf
@section('content')
<div class="container">
    <h1 class="mb-4">Hades Customers</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection