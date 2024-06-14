<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CarRepairHistoryController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;

Route::get('/', function () {
    return view('welcome');
});

// Group routes that require authentication
Route::middleware(['auth'])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('adminDashboard');
    // })->name('dashboard');

    Route::resource('employees', EmployeeController::class);
        
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    
// show all employees
    Route::get('/admin/employees', 
        [EmployeesController::class, 'index'])
        ->name('admin.employees');
//show form to add employee
    Route::get('/admin/addemployee/', 
        [EmployeesController::class, 'create'])
        ->name('admin.addEmployee');
// post request to store employee data
    Route::post('/admin/employeeStore', 
        [EmployeesController::class, 'store'])
        ->name('admin.employeeStore');
// to search a employee by their name   
    Route::get('/admin/employees-search', 
        [EmployeesController::class, 'show'])
        ->name('admin.employees-search');
     
    
// Route to show all records of  car repaired
    Route::get('/admin/car-repairs', 
        [CarRepairHistoryController::class, 'index'])
        ->name('admin.carRepairHistory');
//show form to add car details   
    Route::get('/admin/add-car-repair', 
        [CarRepairHistoryController::class, 'create'])
        ->name('admin.addCarRepair');
// to store car detail to data base
    Route::post('/admin/car-repair/store', 
        [CarRepairHistoryController::class, 'store'])
        ->name('admin.carRepairStore');  
// to search a car detail
    Route::get('/admin/car-repairs-search', 
        [CarRepairHistoryController::class, 'show'])
        ->name('admin.carRepairHistorySearch');

    
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
