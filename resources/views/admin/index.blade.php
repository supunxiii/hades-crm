@extends('admin.layouts.bootstrap')
@section('content')
<div class="row">
    <div class="col-md-2">
        <div class="card">
            <div class="card-header">
                ADMIN DASHBOARD
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{ url('/customer') }}" class="bold-link">MANAGE CUSTOMERS</a></li>
                <li class="list-group-item"><a href="{{ url('/customers') }}" class="bold-link">VIEW ALL CUSTOMERS</a></li>
                <li class="list-group-item"><a href="{{ url('/product') }}" class="bold-link">MANAGE PRODUCTS</a></li>
                <li class="list-group-item"><a href="{{ url('/products') }}" class="bold-link">VIEW ALL PRODUCTS</a></li>
                <li class="list-group-item"><a href="{{ url('/sale') }}" class="bold-link">MANAGE SALES</a></li>
                <li class="list-group-item"><a href="{{ url('/sales') }}" class="bold-link">VIEW ALL SALES</a></li>
                <li class="list-group-item"><a href="{{ url('/receipt') }}" class="bold-link">MANAGE RECEIPTS</a></li>
                <li class="list-group-item"><a href="{{ url('/receipts') }}" class="bold-link">VIEW ALL RECEIPTS</a></li>
                <li class="list-group-item"><a href="{{ url('/payment') }}" class="bold-link">MANAGE PAYMENTS</a></li>
                <li class="list-group-item"><a href="{{ url('/payments') }}" class="bold-link">VIEW ALL PAYMENTS</a></li>
                <li class="list-group-item"><a href="{{ url('/salesperson') }}" class="bold-link">MANAGE SALESPEOPLE</a></li>
                <li class="list-group-item"><a href="{{ url('/salespersons') }}" class="bold-link">VIEW ALL SALESPEOPLE</a></li>
                <li class="list-group-item"><a href="#">REGISTER NEW USER</a></li>
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
                    <div class="card-body"><h4 class="text-center">13</h4></div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Salesperson of the Month</div>
                    <div class="card-body"><h4 class="text-center">Ethan Hunt</h4></div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Sales for Month</div>
                    <div class="card-body"><h4 class="text-center">6</h4></div>
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
                    <div class="card-header">Semiannual Sales </div>
                    <ul class="list-group list-group-flush">
                        @for($i=0; $i<6; $i++)
                            <li class="list-group-item">
                                {{ $i+1 }} Month <span class="float-end btn btn-sm btn-success">View</span>
                            </li>
                        @endfor
                        <li class="list-group-item">
                            <a href="" class="btn btn-md btn-primary w-100">View All Sales</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        Recent Stocks Arrivals
                    </div>
                    <ul class="list-group list-group-flush">
                        @for($i=0; $i<6; $i++)
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-3">New Stock {{ $i+1 }}</div>
                                <div class="col-sm-3">06/{{ $i+6 }}/2023</div>
                                <div class="col-sm-3 text-center">
                                    Value: $54,{{ $i+500}}.00 
                                </div>
                                <div class="col-sm-3 text-center">
                                    <span class="btn btn-sm btn-success">Details</span>
                                </div>
                            </div>
                        </li>
                        @endfor
                        <li class="list-group-item">
                            <a href="" class="btn btn-md btn-primary w-100">View All Recent Stocks</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 