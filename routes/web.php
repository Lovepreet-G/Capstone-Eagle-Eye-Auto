<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;

Route::get('/', function () {
    return view('welcome');
});

// Group routes that require authentication
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('adminDashboard');
    })->name('dashboard');

    Route::resource('employees', EmployeeController::class);
    
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/car-repairs', function () {
    return view('admin.carRepairHistory');
})->name('admin.carRepairHistory');

Route::get('/admin/add-car-repair', function () {
    return view('admin.addCarRepair');
})->name('admin.addCarRepair');

Route::get('/admin/employees', 
    [EmployeesController::class, 'show'])
    ->name('admin.employees');


Route::get('/admin/addemployee/', 
    [EmployeesController::class, 'create'])
    ->name('admin.addEmployee');
// post request to store employee data
Route::post('/admin/employees/store', 
    [EmployeesController::class, 'store'])
    ->name('admin.employee.store');
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
