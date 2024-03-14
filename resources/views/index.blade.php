@extends('layouts.bootstrap')
@section('content')
<div class="row">
    <div class="col-md-2">
        <div class="card">
            <div class="card-header">
                USER DASHBOARD
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{ url('/customers') }}">VIEW ALL CUSTOMERS</a></li>
                <li class="list-group-item"><a href="{{ url('/products') }}">VIEW ALL PRODUCTS</a></li>
                <li class="list-group-item"><a href="{{ url('/sales') }}">VIEW ALL SALES</a></li>
                <li class="list-group-item"><a href="{{ url('/receipts') }}">VIEW ALL RECEIPTS</a></li>
                <li class="list-group-item"><a href="{{ url('/payments') }}">VIEW ALL PAYMENTS</a></li>
                <li class="list-group-item"><a href="{{ url('/salespersons') }}">VIEW ALL SALESPEOPLE</a></li>
                <li class="list-group-item"><a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-left"></i>
                     {{ __('Logout') }} 
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf</li>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Active Employees</div>
                    <div class="card-body"><h4 class="text-center">6</h4></div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Current Sales Leader</div>
                    <div class="card-body"><h4 class="text-center">Taylor Swift</h4></div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Sales for Month</div>
                    <div class="card-body"><h4 class="text-center">5</h4></div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Total Sales Values</div>
                    <div class="card-body"><h4 class="text-center">$42,000.45</h4></div>
                </div>
            </div>

        </div>
        {{-- End of leader board --}}
        <div class="row mt-4">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">Unassigned Prospects</div>
                    <ul class="list-group list-group-flush">
                        @for($i=0; $i<6; $i++)
                            <li class="list-group-item">
                                Mr. Prospect <span class="float-end btn btn-sm btn-success">Assign</span>
                            </li>
                        @endfor
                        <li class="list-group-item">
                            <a href="" class="btn btn-md btn-primary w-100">View All Unassigned Prospects</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        Recent Estimates
                    </div>
                    <ul class="list-group list-group-flush">
                        @for($i=0; $i<6; $i++)
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-3">New Amount</div>
                                <div class="col-sm-3">June 5th, 2023</div>
                                <div class="col-sm-3 text-center">
                                    Value: $54,500.00 
                                </div>
                                <div class="col-sm-3 text-center">
                                    <span class="btn btn-sm btn-success">Details</span>
                                </div>
                            </div>
                        </li>
                        @endfor
                        <li class="list-group-item">
                            <a href="" class="btn btn-md btn-primary w-100">View All Recent Estimates</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 