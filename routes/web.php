<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CarRepairHistoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ReviewsController;




use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Group routes that require authentication
Route::middleware(['auth'])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('adminDashboard');
    // })->name('dashboard');

    Route::resource('employees', EmployeeController::class);
        
    Route::get('/admin/dashboard', 
        [DashboardController::class, 'showDashboard'])
        ->name('admin.dashboard');
    
    
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
// show edit employee form
    Route::get('/admin/employees/{id}/edit', 
        [EmployeesController::class, 'edit'])
        ->name('admin.editEmployee');
// Update employee data
    Route::put('/admin/employees/{id}', 
        [EmployeesController::class, 'update'])
        ->name('admin.updateEmployee');
    
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
// to show services
    Route::get('/admin/services', 
        [ServiceController::class, 'adminIndex'])
        ->name('admin.services');
// to show form to add service
    Route::get('/admin/addService', 
        [ServiceController::class, 'create'])->name('admin.addService');
// to store service to db
    Route::post('/admin/services', 
        [ServiceController::class, 'store'])->name('admin.servicesstore');
// to show edit form
    Route::get('/admin/services/{service}/edit', 
        [ServiceController::class, 'edit'])
        ->name('admin.editService');
// to store the updated service value
    Route::put('/admin/services/{service}', 
        [ServiceController::class, 'update'])
        ->name('admin.updateService');
// to delete a service
    Route::delete('/admin/services/{service}', 
        [ServiceController::class, 'destroy'])
        ->name('admin.destroyService');
    
});

Route::get('/', 
        [HomeController::class, 'index'])
        ->name('home');
// to show services
Route::get('/services', 
    [ServiceController::class, 'index'])
    ->name('services');
// to store reviews
Route::post('/reviews', 
    [ReviewsController::class, 'store'])
    ->name('reviewsstore');
Route::get('/allreviews', 
    [ReviewsController::class, 'index'])
    ->name('allReviews');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
