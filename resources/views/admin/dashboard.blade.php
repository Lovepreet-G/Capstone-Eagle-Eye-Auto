@extends('layouts.admin')

@section('content')
    <h1>Admin Dashboard</h1>    
    {{-- <div class="container mt-5">
        <div class="dashboard-cards">
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Total Employees</h5>
                    <p class="card-text">{{ $activeEmployeesCount }}</p>
                    <a href="{{ route('admin.employees') }}" class="btn btn-primary">View Employees</a>
                </div>
            </div>
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Sales This Month</h5>
                    <p class="card-text">${{ number_format($salesThisMonth, 2) }}</p>
                    <a href="{{ route('admin.carRepairHistory') }}" class="btn btn-primary">View Repairs</a>
                </div>
            </div>
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Cars Repaired This Month</h5>
                    <p class="card-text">{{ $carsRepairedThisMonth }}</p>
                    <a href="{{ route('admin.carRepairHistory') }}" class="btn btn-primary">View Repairs</a>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="{{ route('admin.employees') }}" class="card-link">
                    <div class="card card-box bg-red">
                        <div class="inner">
                            <h3>{{ $activeEmployeesCount }}</h3>
                            <p>Total Employees</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                </a>
            </div>
    
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="{{ route('admin.carRepairHistory') }}" class="card-link">
                    <div class="card card-box bg-blue">
                        <div class="inner">
                            <h3>${{ number_format($salesThisMonth, 2) }}</h3>
                            <p>Sales This Month</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                    </div>
                </a>
            </div>
    
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="{{ route('admin.carRepairHistory') }}" class="card-link">
                    <div class="card card-box bg-orange">
                        <div class="inner">
                            <h3>{{ $carsRepairedThisMonth }}</h3>
                            <p>Cars Repaired This Month</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-car"></i>
                        </div>
                    </div>
                </a>
            </div>
    
            
        </div>
    </div>
    
    
@endsection
