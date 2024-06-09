<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Add your CSS links here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    
    
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo"> Eagle Eye Auto
        </a>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.carRepairs') }}">Car Repair History</a>
        <a href="{{ route('admin.addCarRepair') }}">Add Repaired Car Details</a>
        <a href="{{ route('admin.employees') }}">Employee List</a>
        <a href="{{ route('admin.addEmployee') }}">Add Employee</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Add your JavaScript links here -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
