<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
   
    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add your CSS links here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    {{-- footawsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
   <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo"> Eagle Eye Auto
        </a>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sidebar -->
    <nav class="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.employees') ? 'active' : '' }}" href="{{ route('admin.employees') }}">
                    Employees
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.carRepairHistory') ? 'active' : '' }}" href="{{ route('admin.carRepairHistory') }}">
                    Car Repair History
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.addCarRepair') ? 'active' : '' }}" href="{{ route('admin.addCarRepair') }}">
                    Add Car Repair
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.addEmployee') ? 'active' : '' }}" href="{{ route('admin.addEmployee') }}">
                    Add Employee
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.services') ? 'active' : '' }}" href="{{ route('admin.services') }}">
                    Services
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.addEmployee') ? 'active' : '' }}" href="{{ route('admin.addService') }}">
                    Add Services
                </a>
            </li>
            
        </ul>
    </nav>
    

    <!-- Main Content -->
    <div class="content main">
        @yield('content')
    </div>

        <!-- Add your JavaScript links here -->
        <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
