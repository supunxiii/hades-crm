@extends('layouts.bootstrap')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Hades Receipts</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/receipt/create') }}" class="btn btn-success btn-sm" title="Add New Receipt">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <a href="{{ url('/admin/index') }}" class="btn btn-primary btn-sm ml-2" title="Back to Admin" id="backbtn">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back to Admin
                        </a>
                    </div>
                    <br/>
                    <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Customer</th>
                                        <th>Payment ID</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($receipt as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->customer }}</td>
                                        <td>{{ $item->paymentId }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>
                                            <a href="{{ url('/receipt/' . $item->id) }}" title="View Receipt"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/receipt/' . $item->id . '/edit') }}" title="Edit Receipt"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/receipt' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection