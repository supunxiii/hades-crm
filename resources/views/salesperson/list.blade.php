@extends('layouts.bootstrap')
@csrf
@section('content')
<div class="container">
    <h1 class="mb-4">Salespersons of Hades</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Salesperson Name</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($salespersons as $salesperson)
            <tr>
                <td>{{ $salesperson->name }}</td>
                <td>{{ $salesperson->phone }}</td>
                <td>{{ $salesperson->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
