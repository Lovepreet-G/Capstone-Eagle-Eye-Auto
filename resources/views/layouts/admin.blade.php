<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Add your CSS links here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
</head>
<body>
   <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo"> Eagle Eye Auto
        </a>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.carRepairHistory') }}">Car Repair History</a>
        <a href="{{ route('admin.addCarRepair') }}">Add Repaired Car Details</a>
        <a href="{{ route('admin.employees') }}">Employee List</a>
        <a href="{{ route('admin.addEmployee') }}">Add Employee</a>
    </div>

    <!-- Main Content -->
    <div class="content main">
        @yield('content')
    </div>

        <!-- Add your JavaScript links here -->
        <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
